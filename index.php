<?php
require 'vendor/autoload.php';

require "Model/DatabaseManager.php";

require "Controller/AuthController.php";
require "Controller/StatsController.php";

/*

require "Controller/LogsController.php";

require "Controller/HiveController.php";
*/

session_start();


$AuthController = new AuthController();
$StatsController = new StatsController();

/*

$HiveController = new HiveController();
$LogsController = new LogsController();
*/
$action = null;

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
        $AuthController->indexRegister();
        break;
    case "CheckRegister" :
        $AuthController->checkRegister();
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
    case "EditStats" :
        $StatsController->edit();
        break;
    case "UpdateStats" :
        $StatsController->update();
        break;
    case "JDB" :
        $LogsController->index();
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
    case "CreateHive" :
        $HiveController->create();
        break;
    case "SaveHive" :
        $HiveController->save();
        break;
    default :
        $AuthController->indexGuest();
        break;
}



