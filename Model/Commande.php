<?php 

namespace Model;
use Core\Model;
use Core\Database;
use Core\App;
use DateTime;


class Commande extends Model {

    public int $idCommande;
    public DateTime $dateCommande;
    public DateTime $dateLivraison;
    public DateTime $dateDenvoi;
    public int $iduser ;
    public string $status ;


    public function __construct() {
        parent::__construct(get_class($this));
    }

    public function insertCommande(array $data) {
        $db = App::getInstance()->getDatabase();
        $sql = "INSERT INTO commande (dateCommande, dateLivraison, dateDenvoi, iduser, status) VALUES (:dateCommande, :dateLivraison, :dateDenvoi, :iduser, :status)";
        $stmt = $db->query($sql,[
            ':dateCommande' => $data['dateCommande'],
            ':dateLivraison' => $data['dateLivraison'],
            ':dateDenvoi' => $data['dateDenvoi'],
            ':iduser' => $data['iduser'],
            ':status' => $data['status']
        ])->get();
        return $stmt;
    }

    public function getThisCommandeId(int $iduser) {
        $db = App::getInstance()->getDatabase();
        $sql = "SELECT idCommande FROM commande WHERE iduser = :iduser";
        $stmt = $db->query($sql,[
            ':iduser' => $iduser
        ])->get();
        return $stmt;
    }

    public function updateCommandeStatus($id,$status){
        $db = App::getInstance()->getDatabase();
        $newStatus = $status =="pending"?"en cours":"pending";
        $sql = "UPDATE COMMANDE SET status = 'pending' WHERE idCommande = :id";
        $stmt = $db->query($sql,[
            ':id'=>$id,
            //':newStatus'=>$newStatus
        ]);

    }

    public function getInvoices() {
        $db = App::getInstance()->getDatabase();
        $sql = "SELECT * FROM commande inner join users on commande.iduser = users.id inner join client on users.email = client.email";
        $stmt = $db->query($sql)->get();
        return $stmt;
    }

    public function getAll(){
        $db = App::getInstance()->getDatabase();
        $sql = "Select * from commande ";
        $stmt = $db->query($sql)->get();
        return $stmt;
    }




}