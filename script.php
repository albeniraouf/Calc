<!DOCTYPE html>
<html>
	<body>
		<?php
		    require_once 'vendor/autoload.php';
			require_once 'stopwatch.php';
			
			$bot = new \TelegramBot\Api\Client('bot_token', 'botanio_token');
			$bot->run();

			$bot->command('start', function ($message) use ($bot) {
				$answer = 'Howdy! Welcome to Hova Calculator. .';
				$bot->sendMessage($message->getChat()->getId(), $answer);
			});


			$eq = $_POST("eq");
			$c = new Calc($eq);
			echo $c->cal();
		?>
	</body>
</html>