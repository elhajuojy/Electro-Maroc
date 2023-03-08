<?php 

namespace Model;

use Core\Model;

class Produit extends Model{
    public int $idProduit ;
    public string $nom ;
    public string $code_barre;
    public string $REFERENCE;
    public float $prix_achat;
    public float $prix_final;
    public float $prix_offer;
    public int $quantite;
    public string $description;
    public string $image;
    public string $status;
    public string $created_at;
    public string $updated_at;

    public function getEmptyProduct(){
        $produit = new Produit();
        $produit->idProduit = 0;
        $produit->nom = "";
        $produit->code_barre = "";
        $produit->REFERENCE = "";
        $produit->prix_achat = 0;
        $produit->prix_final = 0;
        $produit->prix_offer = 0;
        $produit->quantite = 0;
        $produit->description = "";
        $produit->image = "";
        $produit->status = "";
        $produit->created_at = "";
        $produit->updated_at = "";
        return $produit;
        
    }




    public function __construct()
    {
        parent::__construct(get_class($this));
    }

    public function getFive(){
        return $this->getByLimit(5);
    }

    public function getActive(){
        return $this->query("SELECT * FROM produit WHERE status = 'active'")->get();
    }

    public function getNewProduct(){
        
        return $this->findAll();
    }

    public function updateQuantity($id, $quantity){
        $sql = "UPDATE produit SET quantite = quantite-:quantite WHERE idProduit = :id";
        $this->query($sql,[
            'quantite' => $quantity,
            'id' => $id
        ]);
    }
    public function getAllWithCategory(){
        $sql = "SELECT * FROM produit INNER JOIN produit_sous_categorie ON produit.idProduit = produit_sous_categorie.idProduit
                INNER JOIN sous_categorie ON produit_sous_categorie.idSous_Categorie = sous_categorie.idSous_Categorie
                INNER JOIN categorie ON sous_categorie.idCategorie = categorie.idCategorie";
        return $this->query($sql)->get();
    }

    public function updateStatus($id, $status){
        
        $sql = "UPDATE produit SET status = :status WHERE idProduit = :id";
        $this->query($sql,[
            'status' => $status,
            'id' => $id
        ]);
        
    }
    public function updateProduit($data){
        $sql = "UPDATE produit SET 
        nom = :nom,  
        REFERENCE = :reference, 
        prix_achat = :prix_achat,
        prix_final = :prix_final, 
        prix_offer = :prix_offer,
        quantite = :quantite, 
        status = :status,
        code_barre = :code_barre,
        description = :description, 
        image = :image
        WHERE idProduit = :id";
        $this->query($sql,$data);
    }

    


    public function getProductsByCategory($nom){
        $sql = "SELECT produit.*,categorie.nom As 'categorieNom'  FROM produit INNER JOIN produit_sous_categorie ON produit.idProduit = produit_sous_categorie.idProduit
                INNER JOIN sous_categorie ON produit_sous_categorie.idSous_Categorie = sous_categorie.idSous_Categorie
                INNER JOIN categorie ON sous_categorie.idCategorie = categorie.idCategorie WHERE categorie.nom = :nom AND produit.status = 'active'";
        return $this->query($sql,[
            'nom' => $nom
        ])->get();
    }




}

// idProduit int(11) NOT NULL AUTO_INCREMENT,
//     nom varchar(255) NOT NULL,
//     code_barre varchar(255) NOT NULL,
//     REFERENCE varchar(255) NOT NULL,
//     prix_achat float(11) NOT NULL,
//     prix_final float(11) NOT NULL,
//     prix_offer float(11) NOT NULL,
//     quantite int(11) NOT NULL,
//     description varchar(255) NOT NULL,
//     image varchar(255) NOT NULL,
//     PRIMARY KEY (idProduit)