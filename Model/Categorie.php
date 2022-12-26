<?php

namespace Model;

use Core\Model;

class Categoriee extends Model
{

    public int $idCategorie;
    public string $nom;
    public string $description;
    public string $image;

    public function __construct()
    {
        parent::__construct(get_class($this));
    }


}

//idCategorie int(11) NOT NULL AUTO_INCREMENT,
//    nom varchar(255) NOT NULL,
//    description varchar(255) NOT NULL,
//    image varchar(255) NOT NULL,
//    PRIMARY KEY (idCategorie)