<?php
//使用mysqli操作数据库 使用mysqli或者pdo是php推荐的方式

//连接数据库
//初始化mysqli对象
$mysqli = mysqli_init();

//设置超时时间为5s
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT,5);

//物理上连接mysql数据库
$mysqli->real_connect("localhost","root","123","tmp_4_test");

//设置编码
$mysqli->query("set names utf8");

$sql = 'select * from test1';

//查询数据库  返回一个result statement数据集
$rst = $mysqli->query($sql);

//一次获取所有数据集结果
$data = $rst->fetch_all(MYSQLI_ASSOC);

//遍历取到的数组
foreach($data as $key=>$value){
	echo $key."=><br>";
	foreach($value as $keyin=>$valuein){
		echo $keyin.":".$valuein.",";
	}
	echo "<br>";
}	

//释放结果集对象
$rst->free();

//释放数据库链接
$mysqli->close();
