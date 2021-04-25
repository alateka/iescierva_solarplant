<?php

class Generic
{
    private $db;

    public function __construct()
    {
        $this->db = MySQLdb::getInstance()->getDatabase();
    }

    /* Ejemplo de consulta SQL con BIND PARAM.
    private function existsEmail($email)
    {
        $sql = 'SELECT * FROM users WHERE email=:email';
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();
        return $query->rowCount();
    }*/

}
