<?php
include 'model/DB.php';
include 'model/User.php';
if(isset($_GET["action"]))
    $action=$_GET["action"];
elseif(isset($_POST['action'])){
    $action=$_POST["action"];
}
else $action="home";
include "controller/index/$action.php";
?>