<?php

include_once "Channel.php";
include_once "Subscriber.php";

$channel = new Channel();
$user1 = new Subscriber(1);
$user2 = new Subscriber(2);
$user3 = new Subscriber(3);
$user4 = new Subscriber(4);
$user5 = new Subscriber(5);

$channel->subscribe($user1);
$channel->subscribe($user2);
$channel->subscribe($user3);
$channel->subscribe($user4);
$channel->subscribe($user5);
$channel->notifyAll("hello this is first message");

echo "------------------". PHP_EOL;
$channel->unsubscribe($user2);
$channel->unsubscribe($user4);
$channel->notifyAll("hello this is second message");
?>