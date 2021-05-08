<?php

class SolarPlant
{
    private $db;

    public function __construct()
    {
        $this->db = PostgresSQLdb::getInstance()->getDatabase();
    }

    public function addApiData($date, $net_consumption)
    {
        $sql = 'INSERT INTO charts(date, net_consumption) 
                VALUES(:date, :net_consumption)';
        $params = [
            ':date' => $date,
            ':net_consumption' => $net_consumption,
            //':total_consumption' => $total_consumption,
            //':auto_consumption' => $auto_consumption
        ];
        $query = $this->db->prepare($sql);
        $response = $query->execute($params);
        return $response;
    }

    public function getAllData()
    {
        $sql = 'SELECT * FROM "charts" ORDER BY id DESC;';
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}
