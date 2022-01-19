<?php


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

    function GetUsers(){
        if($this->db->users == null){$this->db->createCollection("users");}
        return $this->db->users;
    }

    function GetHives(){
        if($this->db->hives == null){$this->db->createCollection("hives");}
        return $this->db->hives;
    }

    function GetLogs(){
        if($this->db->logs == null){$this->db->createCollection("logs");}
        return $this->db->logs;
    }

    function GetStats(){
        if($this->db->stats == null){$this->db->createCollection("stats");}
        return $this->db->stats;
    }

    function GetCalendars(){
        if($this->db->calendars == null){$this->db->createCollection("calendars");}
        return $this->db->calendars;
    }


}