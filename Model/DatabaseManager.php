<?php

class DatabaseManager
{
    private static $_instance = null;

    private $db;
    public function __construct()
    {
    }

    public static function getInstance()
    {

        if (is_null(self::$_instance)) {
            self::$_instance = new DatabaseManager();
        }

        return self::$_instance;
    }

    function ConnectDB()
    {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $this->db = $client->BeeMobile;
        $collection = $this->db->users;
        return $collection;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     */
    public function setDb($db): void
    {
        $this->db = $db;
    }

}