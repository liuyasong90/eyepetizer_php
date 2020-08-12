<?php



$client = new swoole_client(SWOOLE_SOCK_TCP, SWOOLE_SOCK_ASYNC);




$client->on("test",function ($data){
    echo "Received: ".$data."\n";
});