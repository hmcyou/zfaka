<?php
header('content-Type:text/html;charset=utf-8;');
define('APP_PATH',  realpath(dirname(__FILE__) . '/../'));
\Yaf\Loader::import(APP_PATH.'/application/init.php');
$app = new Yaf\Application(APP_PATH.'/conf/application.ini');
$app->getDispatcher()->throwException(TRUE);
$app->bootstrap()->run();
var_dump($app);exit();
//测试