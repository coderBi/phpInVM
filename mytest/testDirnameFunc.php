<?php
//测试dirname函数的使用
var_dump(__file__); //魔术常量，代表当期的文件在服务器上路径
var_dump(dirname(__file__)); //dirname()返回的是文件所在目录的路径
var_dump(dirname('./hello/world/xx')); //其实dirname的操作原理很简单，就是正则匹配到最后一个 / 然后拿出前面的路径部分，如果不存在  / 那么路径就是 .
