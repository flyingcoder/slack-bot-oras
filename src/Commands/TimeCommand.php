<?php

namespace Flyingcoder\Commands;

use PhpSlackBot\Bot;
use Flyingcoder\TimeTracker;

// Custom command
class TimeCommand extends \PhpSlackBot\Command\BaseCommand 
{

    protected function configure() 
    {
        $this->setName('log');
    }

    protected function execute($message, $context) 
    {
 		$args = $this->getArgs($message);
        $command = isset($args[1]) ? $args[1] : '';

        switch ($command) {
        case 'in':
            return TimeTracker::in($this->getCurrentUser());
            break;
        case 'status':
            $this->status();
            break;
        default:
            $this->send($this->getCurrentChannel(), $this->getCurrentUser(),
                        'No comprendo. Use "'.$this->getName().' start" or "'.$this->getName().' status"');
        }
    }

}