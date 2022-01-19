<?php
namespace BeeMobile\Model;

include "Model/Utility.php";
class Hive extends Utility
{
    private string $name;
    private Log $logs;
    //private Stat $stats;

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserHives($userId){

    $collection = $this->db->ConnectDB();
    $user = $collection->find(['userid' => $userId]);
    }


}