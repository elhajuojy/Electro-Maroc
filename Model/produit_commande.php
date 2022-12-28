<?php 

namespace Model;
use Core\Model;
use Core\App;


class Produit_Commande extends Model {

    public int $idProduit;
    public int $idCommande;
    public int $quantite;

    public function __construct() {
        parent::__construct(get_class($this));
    }
    
    public function insertProduitCommande(array $data) {
        $db = App::getInstance()->getDatabase();
        $sql = "INSERT INTO produit_commande (idProduit, idCommande, quantite) VALUES (:idProduit, :idCommande, :quantite)";
        $stmt = $db->query($sql,[
            ':idProduit' => $data['idProduit'],
            ':idCommande' => $data['idCommande'],
            ':quantite' => $data['quantite']
        ])->get();
        return $stmt;
    }

}

