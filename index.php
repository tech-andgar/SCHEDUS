<?php
/*
require_once('core/core.php');
$c = isset($_REQUEST['c']) ? $_REQUEST['c'] : 'index';
$m = isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';
$c = $c.'Controller.php';
require_once('controller/'. $c);
call_user_func([$c, $m]);*/ 
require_once('core/core.php');
if (!isset($_REQUEST['c'])) {
    $controller = 'Index';
    require_once('controller/'.$controller.'Controller.php'); 
    $controller = $controller.'Controller';
    $controller = new $controller();
    $controller->index();
}else{
    $controller = $_REQUEST['c'];
    require_once('controller/'.$controller.'Controller.php');
    $controller = $controller.'Controller';
    $controller = new $controller();
    $metodo = isset($_REQUEST['m']) ? $_REQUEST['m']: 'Index';
    call_user_func(array($controller, $metodo));
}