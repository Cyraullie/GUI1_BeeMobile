
 <?php

class DatabaseManager
{
    private $db;
    public function __construct()
    {
        $this->ConnectDB();
    }
    function ConnectDB()
    {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $this->db = $client->BeeMobile;

    }
}
