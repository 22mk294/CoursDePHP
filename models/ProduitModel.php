<?php

class ProduitModel
{
    protected $db;
    public function __construct()
    {
        $config = require 'config.php';
        $this->db = new Database($config["database"]);
    }

    public function all()
    {
        $config = require 'config.php';
        $db = new Database($config["database"]);
        //recuper l'information
        return $this->db->query("SELECT * FROM produits")->fetchAll();
    }
    public function filterByEtudiantId($etudiant_id)
    {
        $produits = $this->db->query("SELECT * FROM produits WHERE etudiant_id = :etudiant_id", [
            "etudiant_id" => $etudiant_id
        ])->fetchAll();
        return $produits;
    }
}
