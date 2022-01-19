<?php
namespace BeeMobile\Model;

abstract class Utility
{
    protected DatabaseManager $db;

    /**
     * @param DatabaseManager $db
     */
    protected function __construct()
    {
        $this->db = new DatabaseManager();
    }

}