<?php
include "Model/DatabaseManager.php";

abstract class Utility
{
    protected DatabaseManager $db;

    /**
     * @param Database $db
     */
    protected function __construct()
    {
        $this->db = new DatabaseManager();
    }

}