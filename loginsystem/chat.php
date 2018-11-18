<?php
$session = mt_rand(1,999);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<script src="js/jquery.js" type="text/javascript"></script>
	<style type="text/css">
	* {margin:0;padding:0;box-sizing:border-box;font-family:arial,sans-serif;resize:none;}
	html,body {width:100%;height:100%;}
	#wrapper {position:relative;margin:auto;max-width:1000px;height:100%;}
	#chat_output {position:absolute;top:0;left:0;padding:20px;width:100%;height:calc(100% - 100px);}
	#chat_input {position:absolute;bottom:0;left:0;padding:10px;width:100%;height:100px;border:1px solid #ccc;}
	</style>
</head>
<body>
	<div id="wrapper">
		<div id="chat_output"></div>
			<textarea id="chat_input" placeholder="Deine Nachricht..."></textarea>
		<script type="text/javascript">
		jQuery(function($){
			$outside_connected = false;

			function debug_to_console( $data ) {
				console.log( $data);
			};

			var websocket_server = new WebSocket("ws://85.29.72.38:2222/");

			//KUn websocket kohtaa errorin
			websocket_server.onerror = function (event){
				//Juoksee function 
				onError(event)
			};
			
			//ylempi toiminto juoksee tämän function. Tämä on atm vain korjatakseen Mikan local yhteys ongelman
			function onError(evt) {
				//Saadaan websockettiin yhteys mikan verkossakin missä koko roska hostataan
			} 

			if($outside_connected == false)
			{
				debug_to_console("connecting in via local ip")
				//moi poika var websocket_server = new WebSocket("ws://192.168.1.3:8080/");
				// tää on vittu tuskaa enkä ole enään ikinä tekemässä
			} 

			//kun websocket saa yhteyden
			websocket_server.onopen = function(e) 
			{
				$outside_connected = true;

				debug_to_console("Connected to websocket")
				websocket_server.send(
					JSON.stringify({
						'type':'socket',
						'user_id':<?php echo $session; ?>
					})
				);
			};

			//Tämä functio tapahtuu kun clientin websocket saa messagen
			websocket_server.onmessage = function(e) {
				debug_to_console("message received");
				var json = JSON.parse(e.data);
				switch(json.type) {
					case 'chat': //jos messagen tyyppi on chat niin se postataan jokaisen clientin chat_outputtiin aka tehdään siitä oikea chat
						$('#chat_output').append(json.msg);
						break;
				}
			}

			//eventti systeemi // Tässä luetaan inputtia chat_input osiosta
			$('#chat_input').on('keyup',function(e){
				if(e.keyCode==13 && !e.shiftKey)
				{
				//document.write(68);
				//writeToScreen("CONNECTED reee 57");
					var chat_msg = $(this).val();
					websocket_server.send(
						JSON.stringify({
							'type':'chat',
							'user_id':<?php echo $session; ?>,
							'chat_msg':chat_msg
						})
					);
					$(this).val('');
				}
			});
		});
		</script>
	</div>
</body>
</html>