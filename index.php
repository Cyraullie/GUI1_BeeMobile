<?php
require 'vendor/autoload.php';


require "Model/DatabaseManager.php";

require "Controller/AuthController.php";
require "Controller/StatsController.php";
require "Controller/HiveController.php";
require "Controller/LogsController.php";

session_start();


$AuthController = new AuthController();
$StatsController = new StatsController();
$HiveController = new HiveController();
$LogsController = new LogsController();

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
    case "CreateStat" :
        $StatsController->create();
        break;
    case "SaveStat" :
        $StatsController->save();
        break;
    case "EditStats" :
        $StatsController->edit();
        break;
    case "UpdateStats" :
        $StatsController->update();
        break;
    case "DeleteStat" :
        $StatsController->delete();
        break;
    case "JDB" :

        if(isset($_POST['hive'])){
            $LogsController->show($_POST["hive"]);
        }else{
            if(isset($_GET['postSave'])){
                $LogsController->show($_GET['postSave']);
            }else{
                $LogsController->show(null);
            }

        }

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
    case "EditHive" :
        $HiveController->edit();
        break;
    case "UpdateHive" :
        $HiveController->update();
        break;
    case "DeleteHive" :
        $HiveController->delete();
        break;
    case "CreateLog" :
        $LogsController->create();
        break;
    case "EditLog" :
        $LogsController->edit($_GET['logDate'],$_GET['oldHour']);
        break;
    case "UpdateLog" :
        $LogsController->update($_GET['logDate'],$_POST['logHour'],$_POST['logName']);
        break;
    case "DeleteLog" :
        $LogsController->delete($_GET['logDate'],$_GET['oldHour']);
        break;
    case "SaveHive" :
        $HiveController->save();
        break;
    case "SaveLog" :
        $LogsController->save();
        break;
    default :
        $AuthController->indexGuest();
        break;
}



