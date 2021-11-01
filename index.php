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
        //TODO à refaire
    case "Home" :
        require "View/Home.php";
        break;
    case "AgendaDay" :
        require "View/CalendarDay.php";
        break;
    case "AgendaWeek" :
        require "View/CalendarWeek.php";
        break;
    case "AgendaMonth" :
        require "View/CalendarMonth.php";
        break;




    default :
        require "View/Welcome.php";
        break;
}



