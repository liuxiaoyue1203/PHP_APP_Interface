<?php
	$redis = new Redis();
	$redis->connect('127.0.0.1',6379);
	$redis->set('yue',123456);
	$redis->setex('yue2',15,12345);