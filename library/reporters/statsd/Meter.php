<?php
namespace metrics\reporters\statsd;

class Meter
{
	private $key;
	private $statsDConnection;

    public function __construct($key, $connection)
    {
        $this->key = $key;
		$this->statsDConnection = $connection;
    }

    public function mark($options = array())
    {
    }
}
