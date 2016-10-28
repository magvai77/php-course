<?php

class Config
{
	public $config;

	public function __construct($pathToConfig)
	{
		$this->config = file_exists($pathToConfig) ? require $pathToConfig : [];
	}

	public function get($name)
	{
		// $keyArray = explode('.', $name);
		// $tmpConfig = $this->config;
		// foreach ($keyArray as $key) {
		// 	if (!isset($tmpConfig);


		// }
		$result = isset($this->config[$name]) ?  $this->config[$name] : NULL;
		return $result;
	}
	
}