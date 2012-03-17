<?php
namespace metrics\reporters\stdout;

class Timer
{
    protected $key;

    function __construct($key)
    {
        $this->key = $key;
    }

    function time($options)
    {
        echo "Timer: Start! Key: $this->key";
    }

    function stop($options)
    {
        echo "Timer: Stop! Key: $this->key";
    }
}
