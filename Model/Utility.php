<?php


abstract class Utility
{
    public DatabaseManager $db;

    /**
     * @param Database $db
     */
    protected function __construct()
    {
        $this->db = new DatabaseManager();
    }

}