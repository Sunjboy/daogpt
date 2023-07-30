<?php
namespace WebIM;
use Swoole;
use RuntimeException;
Swoole\Runtime::enableCoroutine();
class Pool
{
    /**
     * @var \Swoole\Coroutine\Channel
     */
    protected $pool;
    protected $config;

    /**
     * @param int $size 连接池的尺寸
     */
    function __construct($config, $size = 100)
    #public function Pool($config, $size = 100)
    {
	    $this->pool = new Swoole\Coroutine\Channel($size);
	     // v4.4+版本使用此方法。
	$this->config = $config;
	#throw new RuntimeException("========".$size);
        for ($i = 0; $i < $size; $i++)
        {
            $object = $this->create();
            if ($object == false)
            {
                throw new RuntimeException("failed to connect mysql server.");
            }
            else
            {
                $this->_put($object);
            }
        }
    }

    protected function _put($object)
    {
        $this->pool->push($object);
    }

    protected function _get()
    {
        return $this->pool->pop();
    }

    function __call($method, $args)
    {
        $object = $this->_get();#print($method.'  '.$args);
        $retval = $object->$method(...$args);
        $this->_put($object);
        return $retval;
    }
}
