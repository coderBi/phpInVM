<?php
 $redis = new Redis();
 //连接
 if($connect = $redis->connect("localhost",6379)){
	//操作set
	$redis->sadd("myset",'bww','edwin','root');
	$myset = $redis->smembers('myset');
	print_r($myset);
	
	echo "<br>";
	//操作list 像一个list中添加一个array类型的元素，这里不应该理解为添加了多个元素。
	$redis->lpush("mylist", array('a','b','c'));
	$mylist = $redis->lrange('mylist',0,-1);
	print_r($mylist);
}

 //关闭连接
if($connect)
	$redis->close();
