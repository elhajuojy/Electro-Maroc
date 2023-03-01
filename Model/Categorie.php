<?php

namespace Model;

use Core\Model;
use Core\App;
use Core\Database;

class Categorie 
{

    private Database $db ;

    public int $idCategorie;
    public string $nom;
    public string $description;
    public string $image;

    public function __construct()
    {
        $this->db =  App::getInstance()->getDatabase();
    }

    public function getCategories(){
        return $this->db->query("SELECT * FROM categorie")->find(get_class($this));
    }

    public function getCategorieById(int $id){
        return $this->db->query("SELECT * FROM categorie WHERE idCategorie = :id",['id'=>$id])->findOne(get_class($this));
    }

    public function removeCategorieById(int $id): Database
    {
        return $this->db->query("DELETE FROM categorie WHERE idCategorie = :id",['id'=>$id]);
    }
    
    public function insert(array $data): Database
    {
        return $this->db->query("INSERT INTO categorie (nom, description) VALUES (:nom, :description)", $data);
    }
    public function updateCategorieById(int $id, string $nom, string $description): Database
    {
        return $this->db->query("UPDATE categorie SET nom = :nom, description = :description WHERE idCategorie = :id", ['id' => $id, 'nom' => $nom, 'description' => $description]);
    }



}

//idCategorie int(11) NOT NULL AUTO_INCREMENT,
//    nom varchar(255) NOT NULL,
//    description varchar(255) NOT NULL,
//    image varchar(255) NOT NULL,
//    PRIMARY KEY (idCategorie)