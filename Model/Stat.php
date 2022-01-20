<?php
require_once 'Model/Utility.php';

class Stat extends Utility
{
    private string $hiveid;
    private string $date;
    private int $weight;
    private int $humidity;
    private int $temperature;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getHiveid()
    {
        return $this->hiveid;
    }

    /**
     * @param mixed $hiveid
     */
    public function setHiveid($hiveid): void
    {
        $this->hiveid = $hiveid;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @param mixed $humidity
     */
    public function setHumidity($humidity): void
    {
        $this->humidity = $humidity;
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     */
    public function setTemperature($temperature): void
    {
        $this->temperature = $temperature;
    }


}