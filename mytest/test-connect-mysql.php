<?php
$link = mysql_connect("localhost","root","123");
mysql_select_db("tmp_4_test",$link);
$sql = 'select *from test1';
mysql_query('set names utf8');
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
	echo 'name:'.$row['name'].',weight:'.$row['weight'].'<br>';
}
mysql_free_result($result);
mysql_close($link);
