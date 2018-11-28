<?php
set_time_limit(0);

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
require_once '../vendor/autoload.php';

class Chat implements MessageComponentInterface {
	protected $clients;
	protected $users;

	public function __construct() {
		$this->clients = new \SplObjectStorage;
	}

	public function onOpen(ConnectionInterface $conn) {
		echo 'User connected';
		$this->clients->attach($conn);
		$this->users[$conn->resourceId] = $conn;
	}

	public function onClose(ConnectionInterface $conn) {
		echo 'User disconnected';
		$this->clients->detach($conn);
		unset($this->users[$conn->resourceId]);
	}

	public function onMessage(ConnectionInterface $from,  $data) {
		$from_id = $from->resourceId;
		$data = json_decode($data);
		$type = $data->type;
		echo 'message received';
		echo $data->chat_msg;
		switch ($type) {
			case 'chat':
				$user_id = $data->user_id;
				$chat_msg = $data->chat_msg;
				$response_from = "<li style='color:#999;padding-top:2px;padding-bottom:2px'><b>".$user_id.":</b> ".$chat_msg."</li>";
				$response_to = "<li>".$user_id."<b>: ".$chat_msg."<b></li>";
				// Output
				$from->send(json_encode(array("type"=>$type,"msg"=>$response_from)));
				foreach($this->clients as $client)
				{
					if($from!=$client)
					{
						$client->send(json_encode(array("type"=>$type,"msg"=>$response_to)));
					}
				}
				break;
			case 'login':
				
		}
	}

	public function onError(ConnectionInterface $conn, \Exception $e) {
		echo 'reeee 55';
		$conn->close();
	}
}
$server = IoServer::factory( new HttpServer(new WsServer(new Chat())),8080);
$server->run();
?>