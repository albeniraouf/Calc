<!DOCTYPE html>
<html>
	<body>
		<?php
		    	require_once 'vendor/autoload.php';
			require_once 'calculator.php';
			
			$bot = new \TelegramBot\Api\Client('1320730548:AAGWVT5jmUHQGmUfpfYdwrh8gp_q_2wF3ds');
			$bot->run();

			$bot->command('start', function ($message) use ($bot) {
				$answer = 'Howdy! Welcome to Hova Calculator. Enter like This "1 + 2" without qoutes.';
				$bot->sendMessage($message->getChat()->getId(), $answer);
			});

			$bot->command($a, function($message) use ($bot) { 
				$c = new Calc($eq);
				$answer = $c->cal();
				$bot->sendMessage($message->getChat()->getId(), $answer);
			});
		?>
	</body>
</html>
