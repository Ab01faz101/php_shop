<?php

namespace App\Models;

use Core\ConnectionDatabase;
use PDO;
use PDOException;

class BaseModel
{
    protected $table;
    protected $pdo;

    public function __construct()
    {
        $this->pdo = ConnectionDatabase::getInstance();
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function where($conditions)
    {
        $query = "SELECT * FROM {$this->table} WHERE ";
        $params = [];
        $clauses = [];

        foreach ($conditions as $column => $value) {
            $clauses[] = "{$column} = :{$column}";
            $params[$column] = $value;
        }

        $query .= implode(' AND ', $clauses);
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function find($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $keys = implode(',', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        $stmt = $this->pdo->prepare("INSERT INTO {$this->table} ($keys) VALUES ($values)");

        if ($stmt->execute($data)) {
            $lastId = $this->pdo->lastInsertId();
            return $this->find($lastId);
        }

        return false;
    }


    public function update($id, $data)
    {
        $fields = implode(' = ?, ', array_keys($data)) . ' = ?';
        $sql = "UPDATE {$this->table} SET {$fields} WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(array_merge(array_values($data), [$id]));
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
