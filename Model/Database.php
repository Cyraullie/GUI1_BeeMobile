<?php

class Database
{

    function ConnectDB()
    {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $db = $client->BeeMobile;
        return $collection = $db->users;
    }

}