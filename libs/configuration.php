<?php
//Configuration


require 'libs/Config.php';
$config = Config::singleton();
$config->set('controllerFolder', 'controller/'); //Nombre del folder , nombre del archivo
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'view/');

$config->set('dbhost', '163.178.107.10');
$config->set('dbname', 'bkrj');
$config->set('dbuser', 'laboratorios');
$config->set('dbpass', 'UCRSA.118');

?>