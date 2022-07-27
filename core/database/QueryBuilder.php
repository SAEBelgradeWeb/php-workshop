<?php
namespace App\Core\Database;

class QueryBuilder
{

    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($tablename)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$tablename}");

        $query->execute();

        return $query->fetchAll(\PDO::FETCH_OBJ);
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
        } catch(\PDOException $exception) {
           die($exception->getMessage());
        }

        header("Location: /");

    }

}
