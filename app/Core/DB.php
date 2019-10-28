<?php


namespace App\Core;
use \PDO;
use \Exception;

require_once __DIR__."/../../config/db.php";

class DB
{

    private $pdo;

    public function __construct()
    {
        try {
            $dsn = sprintf("mysql:host=%s;dbname=%s;port=%s;charset=utf8",
                DB_HOST, DB_NAME, DB_PORT);
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function query($sql, array $params = [])
    {
        $result = [];
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
    }

    public function all($table)
    {
        return $this->query('SELECT * FROM '.$table);
    }

    public function insert($table, array $columns, array $values)
    {
        if (count($columns) != count($values)) {
            throw new Exception('Count passed column names not equals to values');
        }
        $sql = 'INSERT INTO '.$table.'('.implode(',', $columns).')';
        $sql .= ' VALUES (?'.str_repeat(',?', count($columns) - 1).')';
        return $this->query($sql, $values);
    }

}