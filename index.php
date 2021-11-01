<?php
$action = null;

if (isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action) {
    case "Login" :
        require "View/Login.php";
        break;
    case "Register" :
        require "View/Register.php";
        break;
    case "Home" :
        require "View/Home.php";
        break;
    case "Agenda" :
        require "View/CalendarDay.php";
        break;




    default :
        require "View/Welcome.php";
        break;
}



