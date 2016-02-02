<?php

namespace Flyingcoder\Bots;

use PhpSlackBot\Bot;
use Flyingcoder\TimeCommand;

/**
* 
*/
// class Oras extends Bot
// {
	
	
// }

$bot = new Bot();
$bot->setToken('xoxb-19972036567-itTiAcgQZUDlzkmQ5zdW8c5X'); // Get your token here https://my.slack.com/services/new/bot
$bot->loadCommand(new TimeCommand());
$bot->run();