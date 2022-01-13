<?php
require 'vendor/autoload.php';

$action = null;


include "Controller/StatsController.php";

$StatsController = new StatsController();

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
        require "View/Photo.php";
        break;
    case "Stats" :
        $StatsController->index();
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
        //$h = new Hive();
        //$h->getUserHives(1);
        require "View/phpinfo.php";
        break;
}



