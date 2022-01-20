<?php

class HiveController
{

    private $db;

    public function __construct()
    {

        $NewDb = new DatabaseManager();
        $this->db = $NewDb->ConnectDB();
    }

    function create()
    {
        require "View/CreateHive.php";
    }

    function save()
    {
        $user = $this->db->users->findOne(['name' => $_SESSION['user']]);
        $hives = $this->db->hives->find(['userid' => $user->id]);
        foreach ($hives as $hive) {
            if ($hive['name'] == $_POST['hiveName']) {
                $message = "Vous avez déjà une ruche avec ce nom";
                $type_message = "error";
                require "View/CreateHive.php";
            }
        }
        $hives = $this->db->hives->find();
        foreach ($hives as $hive) {
            $id++;
        }

        $this->db->hives->insertOne(['userid' => intval($user->userid), 'hiveid' => $id, 'name' => $_POST['hiveName']]);

        header('Location: ?action=Stats');
        /*require_once "Controller/StatsController.php";
        $StatsController = new StatsController();
        $StatsController->index();*/

    }

    function edit()
    {

    }

    function update()
    {

    }
}
