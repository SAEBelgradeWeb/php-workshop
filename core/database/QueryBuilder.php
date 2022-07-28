<?php

namespace App\Core\Database;

class QueryBuilder
{

    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($tablename, $tablename2 = "", $fields = [], $foreignKey = "")
    {

        $sql = "";
        if (!$tablename2) {
            $sql = "SELECT * FROM {$tablename}";
        } else {
            $sql = sprintf("SELECT %s FROM {$tablename} LEFT JOIN {$tablename2} ON {$tablename2}.id = {$tablename}.{$foreignKey}",
                implode(', ', $fields));
        }


        $query = $this->pdo->prepare($sql);

        $query->execute();

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }

    public function selectFitered($filter)
    {

    }

    public function insert($tablename, $parameters)
    {
        // insert into tasks (task, completed) VALUES (:task, :completed)
        $sql = sprintf("INSERT INTO %s (%s) VALUES(%s)",
            $tablename,
            implode(", ", array_keys($parameters)),
            ":" . implode(", :", array_keys($parameters))
        );

        try {
            $query = $this->pdo->prepare($sql);
            $query->execute($parameters);
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }

    }

    public function update()
    {

    }

    public function delete($tablename, $id)
    {
        $sql = "DELETE FROM {$tablename} WHERE id = {$id}";
        $query = $this->pdo->prepare($sql);
        $query->execute();
    }


}
