<?php
require_once('StatsDReporter.php');
require_once('StdOutReporter.php');

class Reporter {
	protected $_key_mask;
	
	function __construct($key_mask) {
		$this->_key_mask = $key_mask;
	}
	
	function stdout() {
		return Metrics::saveReporter($this->_key_mask, new StdOutReporter($options));
	}
	
	function statsd($options = array('host' => 'localhost', 'port' => 1111)) {
		return Metrics::saveReporter($this->_key_mask, new StatsDReporter($options));
	}
	
	function totango($options = array('host' => 'localhost')) {
		return Metrics::saveReporter($this->_key_mask, new ToTangoReporter($options));
	}
}