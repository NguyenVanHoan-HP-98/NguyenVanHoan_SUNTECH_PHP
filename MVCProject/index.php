<?php
    require_once './Controllers/BaseController.php';
    $controllerName = ucfirst((strtolower($_REQUEST['controller'])  ?? 'welcome').'Controller');
    $actionName =strtolower($_REQUEST['action']) ?? 'index';
    require_once "./Controllers/${controllerName}.php";

    $controllerObject = new $controllerName;
    $controllerObject-> $actionName();
?>