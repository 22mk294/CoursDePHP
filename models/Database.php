<?php
class Database
{
    protected $pdo;

    public function __construct($config)
    {

        $dsn = "mysql:" . http_build_query($config, "", ";");
        $this->pdo = new PDO($dsn);
        //$this->pdo = new PDO("mysql:host=localhost;user=root;password=;port=3306;dbname=trucs_pas_chers");

    }

    public function query($query, $params = [])
    {
        // seconnect à la bdd

        //executer une requette sql
        //preparer la requête 
        $pdoStatement = $this->pdo->prepare($query);

        //ecxecuter la requête 
        $pdoStatement->execute($params);

        //recuper l'information

        return $pdoStatement;
    }
}
