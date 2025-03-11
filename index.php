<?php
require_once 'config/database.php';
$db = Database::getDB();

if(isset($_POST['controller'])){
    $controller = $_POST['controller'];
}
elseif(isset($_GET['controller'])){
    $controller =$_GET['controller'];
}else{
    $controller = 'homecontroller';
}

if(isset($_POST['action'])){
    $action = $_POST['action'];
}
elseif(isset($_GET['action'])){
    $action =$_GET['action'];
}else{
    $action = 'index';
}
require_once 'view/layout.php';
?>