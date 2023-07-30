<?php 

require  './Chat.php';

use Helloweba\Swoole\Chat;

$opt = [
    'daemonize' => true
];
$ws = new Chat($opt);
$ws->start();
