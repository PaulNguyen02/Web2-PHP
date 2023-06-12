<?php 
    //Là một bridge nối Database, BaseModel, Base Controller, biến controllername thành lớp controller tương ứng và action thành các hàm tương ứng
    require './Core/config.php';
    require './Model/BaseModel.php';
    require './Controller/BaseController.php';
    $controllerName = ucfirst((strtolower($_REQUEST['controller'])?? 'Error').'Controller');    
    $actionName = $_REQUEST['action'] ?? 'error404';
    require "./Controller/".$controllerName.".php";
    $controllerObj = new $controllerName;
    $controllerObj->$actionName();
    
    //index.php?controller=product&action=insert&id=$row['MASP']
