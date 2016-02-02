<?php 

namespace Flyingcoder;

use LeoExpress\Time;
/**
* 
*/
class TimeTracker
{
	private $username;

	private function log($command)
	{
		return "You are log".$command." at exactly "date("F d, Y",time());
	}

	public static function in($username)
	{
		$this->username = $username;
		return $this->log("in");
	}

	public static function out($username)
	{
		$this->username = $username;
		return $this->log("out");
	}


}