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
    case "Photo" :
        // TODO a faire
        require "View/Home.php";
        break;
    case "Stats" :
        // TODO a faire
        require "View/Home.php";
        break;
    case "JDB" :
        require "View/JDB.php";
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



