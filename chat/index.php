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
			// Websocket

			//document.write(27);
			//writeToScreen("CONNECTED reee 29");
			var websocket_server = new WebSocket("ws://85.29.72.38:2222/");
			//document.write(29);
			websocket_server.onopen = function(e) {
				//document.write(32);
				//writeToScreen("CONNECTED reee 29");
				websocket_server.send(
					JSON.stringify({
						'type':'socket',
						'user_id':<?php echo $session; ?>
					})
				);
			};
			websocket_server.onerror = function (event) {
			       onError(event)
			};
			
			function onError(evt) {
				///jos funkkari olemassa saa nätin error messagen
		        document.write('<span style = "color: red;">WEB SOCKET ERROR:</span> ' + evt.data);
	      	} 
			//websocket_server.onerror = function(e) {
//
		//		document.write(41);
				//writeToScreen("CONNECTED reee 37");
				// Errorhandling
			//}
			websocket_server.onmessage = function(e)
			{
				var json = JSON.parse(e.data);
				switch(json.type) {
					case 'chat':
						$('#chat_output').append(json.msg);
						break;
				}
			}
			// Events
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