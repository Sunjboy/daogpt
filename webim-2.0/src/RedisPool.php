<?php
namespace WebIM;
use Swoole;
use RuntimeException;
#Swoole\Runtime::enableCoroutine($flags = SWOOLE_HOOK_ALL);
use Redis;
class RedisPool extends Pool
{
    function create()
    {
	    #$redis = new Swoole\Coroutine\Redis();
	    #Swoole\Runtime::enableCoroutine($flags = SWOOLE_HOOK_ALL);
	    $redis = new Redis();
	    $res = $redis->connect($this->config['host']??'127.0.0.1', $this->config['port']??6379);
	    $redis->lpush("redis-client-support", "phpredis");
	#throw new RuntimeException($this->config['port']??6379);
        if ($res)
	{
		#throw new RuntimeException($this->config['port']??6379);
            return $redis;
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
