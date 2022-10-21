<?php

namespace App;

class Router{

	public static $routers = [];

	public function __construct($path){
		$this->path = $path;
	}

	public function match(){
		foreach(self::$routers as $router){
			if($router['path']== $this->path){
				return $router;
			}
		}
	}

	public static function addRouter($path, $action){
		self::$routers[] = ['path' => $path, 'action' => $action];
	}
}