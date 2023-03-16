<?php

namespace app;

use PDO;

class Model {
    protected $table = "";

    private $pdo;
    
    public function __construct() {
        $this->pdo = DB::getConnection();
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM $this->table");
        $models = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $models;
    }

    public function get($pk) {
        $stmt = $this->pdo->prepare("SELECT * FROM $this->table WHERE sku = ?");
        $stmt->bindValue(1, $pk);
        $stmt->execute();
        $model = $stmt->fetch(PDO::FETCH_OBJ);
        return $model;
    }

    public function store($data) {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table (".implode(",", array_keys($data)).") VALUES (".implode(",", array_fill(0, count($data), "?")).")");
        $i = 1;
        foreach ($data as $key => $value) {
            $stmt->bindValue($i, $value);
            $i++;
        }
        $stmt->execute();
        
    }

    public function delete($pk) {
        $stmt = $this->pdo->prepare("DELETE FROM $this->table WHERE sku = ?");
        $stmt->bindValue(1, $pk);
        $stmt->execute();
    }
}