<?php
date_default_timezone_set("Asia/Shanghai"); //设置中国时区
require __DIR__.'/../vendor/autoload.php';

use MyGreeter\Client;
$obj = new Client();
echo "<hr>";
//require 'MyGreeter_Client_Test.php';
//$test_obj = new MyGreeter_Client_Test();
//$test_obj->setUp();
//$test_obj->test_Instance();
//$test_obj->test_getGreeting();

