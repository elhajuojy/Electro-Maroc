<?php 

namespace Model;
use Core\Model;
use Core\Database;
use Core\App;
use DateTime;


class commande_info extends Model {

        private $db;
        public int $id;
        public string $nom_complet;
        public string $email;
        public string $telephone;
        public string $adresse;
        public string $ville;
        public string $codePostal;
        public string $pays;
        public int $commande_id;
    
        public function __construct() {

            parent::__construct(get_class($this));
            $this->db = App::getInstance()->getDatabase();
        }

        public function insertCommandeInfo(array $data) {
            $db = $this->db;
            $sql = "INSERT INTO commande_info (nom_complet, email, telephone, adresse, ville, codePostal, pays, commande_id) VALUES (:nom_complet, :email, :telephone, :adresse, :ville, :codePostal, :pays, :commande_id)";
            $stmt = $db->query($sql,[
                ':nom_complet' => $data['nom_complet'],
                ':email' => $data['email'],
                ':telephone' => $data['telephone'],
                ':adresse' => $data['adresse'],
                ':ville' => $data['ville'],
                ':codePostal' => $data['codePostal'],
                ':pays' => $data['pays'],
                ':commande_id' => $data['commande_id']
            ])->get();
            return $stmt;
        }

        public function getThisCommandeInfoId(int $commande_id) {
            $db = $this->db;   
            $sql = "SELECT id FROM commande_info WHERE commande_id = :commande_id";
            $stmt = $db->query($sql,[
                ':commande_id' => $commande_id
            ])->get();
            return $stmt;
        }

        public function getAll(){
            $db = $this->db;
            $sql = "Select * from commande_info ";
            $stmt = $db->query($sql)->get();
            return $stmt;
        }


        public function getCommandAndInfo(){
            $db = $this->db;
            $sql = "SELECT * FROM commande_info inner join commande on commande_info.commande_id = commande.idCommande";
            $stmt = $db->query($sql)->get();
            return $stmt;
        }

        public function getCommandeInfoAndCommandeProduct(){
            $db = $this->db;
            $sql = "SELECT * FROM commande_info inner join commande on commande_info.commande_id = commande.idCommande inner join produit_commande on commande.idCommande = produit_commande.IdCommande
            
            ";
            $stmt = $db->query($sql)->get();
            return $stmt;
        }

        public function getOneCommandeInfo(int $id){
            $db = $this->db;
            $sql = "SELECT *, produit_commande.quantite as pc_quantite  FROM commande_info inner join commande on commande_info.commande_id = commande.idCommande inner join produit_commande on commande.idCommande = produit_commande.IdCommande inner join users on commande.iduser = users.id inner join produit on produit_commande.idProduit = produit.idProduit
            WHERE commande.idCommande = :id
            
            ";
            $stmt = $db->query($sql,[
                ':id' => $id
            ])->get();
            return $stmt;
        }

}




