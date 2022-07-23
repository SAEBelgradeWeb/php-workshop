<?php

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

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}
