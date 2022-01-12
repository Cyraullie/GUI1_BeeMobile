<?php
require 'vendor/autoload.php';
session_start();
$action = null;

include "Controller/StatsController.php";
include "Controller/AuthController.php";

$StatsController = new StatsController();
$AuthController = new AuthController();

if (isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action) {
    case "Login" :
        $AuthController->indexLogin();
        break;
    case "CheckLogin" :
        $AuthController->checkLogin();
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
        require "View/Welcome.php";
        break;
}



