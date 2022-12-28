<?php
namespace  Model;

use Core\Model;

class  Client extends  Model{

    public int $idClient ; 
    public string $nom_complet ;
    public string $email ;
    public string $telephone ;
    public string $adresse ;
    public string $ville ;
    public string $codePostal; 
    public string $pays ;
    
    public function __construct()
    {
        parent::__construct(get_class($this));
    }

    
    


}