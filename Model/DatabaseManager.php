<?php

abstract class DatabaseManager
{
    static function ConnectDB()
    {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        return $client->BeeMobile;
    }
}