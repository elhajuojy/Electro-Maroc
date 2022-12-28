<?php 

namespace  Model;

use Core\App;
use Core\Database;
use Core\Model;

class Cart extends Model{


    public int $id;
    public int $idUser;
    public int $idProduit;
    public int $bought;
    public int $quantite;


    public function __construct()
    {
        parent::__construct(get_class($this));
    }
    

    public function create(): bool
    {
        $sql = "INSERT INTO ".$this->table." (idUser,idProduit,bought,quantite) VALUES (:idUser,:idProduit,:bought,:quantite)";
        $params = [
            'idUser' => $this->idClient,
            'idProduit' => $this->idProduit,
            'bought' => $this->bought,
            'quantite' => $this->quantite
        ];
        $this->db->query($sql,$params);
        return true;
    }

    
    public function updateCart(int $id, int $idProduit,int $newQuntity): Database
    {
        $db = App::getInstance()->getDatabase();
        $sql = "UPDATE ".$this->table." SET quantite = :quantite WHERE idUser = :idUser AND idProduit = :idProduit";
        $params = [
            'idUser' => $id,
            'idProduit' => $idProduit,
            'quantite' => $newQuntity
        ];
        return $db->query($sql,$params);
    }
}