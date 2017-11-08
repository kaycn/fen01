<?php
define('ROUS','./application/rous');
require './fens/Base.php';  //导入框架基础类
session_start();
$app = new Base();   //实例化框架
$app->run();  //运行框架




