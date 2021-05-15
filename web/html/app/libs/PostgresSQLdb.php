<?php

/**
 * Manejo de PostgrSQL mediante PDO
 */

class PostgresSQLdb
{
    private $host = 'db';
    private $user = 'kepler';
    private $pass = 'Albertico.147';
    private $dbname = 'solarplant';

    private static $instancia = null;
    private $db = null;

    private function __construct()
    {
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];

        try {
            $this->db = new PDO(
                'pgsql:host=' . $this->host . ';dbname=' . $this->dbname,
                $this->user,
                $this->pass,
                $options
            );
        } catch (PDOException $e) {
            exit('ERROR: La base de datos es inalcanzable');
        }
    }

    public static function getInstance()
    {
        if (is_null(self::$instancia)) {
            self::$instancia = new PostgresSQLdb();
        }

        return self::$instancia;
    }

    public function getDatabase()
    {
        return $this->db;
    }
}
