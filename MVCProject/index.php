<?php
    require_once './Core/Database.php';
    require_once './Models/BaseModel.php';
    require_once './Controllers/BaseController.php';

    $controllerName = ucfirst((strtolower($_REQUEST['controller'] ?? 'Home' )  ).'Controller');

    $actionName = $_REQUEST['action'] ?? 'index';

    require_once "./Controllers/${controllerName}.php";

    $controllerObject = new $controllerName;
    $controllerObject-> $actionName();
?>