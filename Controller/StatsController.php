<?php
namespace BeeMobile\Controller;
use BeeMobile\Model\DatabaseManager;

class StatsController{

    private $collection;

    public function __construct()
    {
        $DB = new DatabaseManager();
        $this->collection = $DB->ConnectDB();
    }

    function index() {
        $user = $this->collection->find(['name'=>$_SESSION['user']]);
        require "View/Stat.php";
    }
}