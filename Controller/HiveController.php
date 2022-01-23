<?php

class HiveController
{
    private User $users;
    private Hive $hives;
    private Stat $stats;

    public function __construct()
    {

        $this->users = new User();
        $this->hives = new Hive();
        $this->stats = new Stat();

    }

    function create()
    {
        require "View/CreateHive.php";
    }

    function save()
    {
        $hives = $this->hives->GetHives()->find();
        $notExist = true;
        foreach ($hives as $hive) {
            if ($hive['userid'] === intval($_SESSION['user'])) {
                if ($hive['name'] == $_POST['hiveName']) {
                    $message = "Vous avez déjà une ruche avec ce nom";
                    $type_message = "error";
                    $notExist = false;
                    require "View/CreateHive.php";
                }
            }
        }
        if($notExist) {
            $hives = $this->hives->GetHives()->find();
            foreach ($hives as $hive) {
                $id++;
            }

            $this->hives->GetHives()->insertOne(['userid' => $_SESSION['user'], 'hiveid' => $id, 'name' => $_POST['hiveName']]);

            header('Location: ?action=Stats');
        }
    }

    function edit()
    {
        $hives = $this->hives->GetHives()->find(['hiveid' => intval($_GET['hive'])]);
        require "View/EditHive.php";
    }

    function update()
    {
        $this->hives->GetHives()->updateOne(
            ['hiveid' => intval($_POST['hive'])],
            ['$set' => ["name" => $_POST['hiveName']]]
        );
        header('Location: ?action=Stats');
    }

    function delete(){
        $this->hives->GetHives()->deleteOne(['hiveid' => intval($_GET['hive'])]);
        $this->stats->GetStats()->deleteMany(['hiveid' => intval($_GET['hive'])]);
        header('Location: ?action=Stats');
    }
}
