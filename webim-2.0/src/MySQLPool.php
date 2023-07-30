<?php
namespace WebIM;
use Swoole;
#use Swoole\Coroutine\MySQL;
use RuntimeException;
use mysqli;

class MySQLPool extends Pool
{
    function create()
    {
	    #$db = new Swoole\Coroutine\MySQL();
	    #$db = new MySQL();
	    $res = new mysqli($this->config['host'], $this->config['user'], $this->config['password'], $this->config['database']);
        #$res = $db->connect($this->config);
        if ($res)
        {
	    #return $db;
	    return $res;
        }
        else
        {
            return false;
        }
    }
    function __construct($config, $size = 100)
    {
            parent::__construct($config, $size);
    }
}
