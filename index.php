<?php

class Job {
  private $logger;

	public function __construct(ConsoleLogger $logger)
	{
		$this -> logger = $logger;
	}
	public function work(){
		$logger = new ConsoleLogger();
		for($i=0; $i<10; $i++){
			$logger -> log($i);
		}
	}
}

class ConsoleLogger implements Logger {
	public function log($message){
		echo $message . "\n";
	}
}
interface Logger {
	public function log($message);
}

//======================

class NothingLogger{
	public function log($message){

	}
}
$consoleLogger = new ConsoleLogger();
$nothingLogger = new NothingLogger();
$job = new Job($ConsoleLogger);
$job ->work();