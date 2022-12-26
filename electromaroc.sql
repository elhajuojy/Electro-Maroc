-- Active: 1671439187445@@localhost@3306@electromaroc

DROP  DATABASE electromaroc;
CREATE DATABASE electromaroc;
USE electromaroc;
DROP Table users;
CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    role varchar(255) NOT NULL  default 'client',
    PRIMARY KEY (id),
    UNIQUE KEY username (username),
    UNIQUE KEY email (email),
    check (role in ('admin', 'client', 'user'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELETE from users;
INSERT INTO users (username, password, email, role) 
VALUES ('admin', 'admin', 'admin@gmail.com', 'admin');
INSERT INTO users (username,password,email,role)
 VALUES ('user', 'user', 'user@gmail.com', 'client'),
('user1', 'user1', 'amina@gmail.com','client'),
('user2', 'user2', 'mohammed@gmail.com','client'),
('user3', 'user3', 'jamal@gmail.com','client'),
('user4', 'user4', 'ayoube@gmail.com','client');  

SELECT * FROM users;
DROP TABLE client;

CREATE Table Client (
    idClient int(11) NOT NULL AUTO_INCREMENT,
    nom_complet varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    telephone varchar(255) NOT NULL,
    adresse varchar(255) NOT NULL,
    ville varchar(255) NOT NULL,
    codePostal varchar(255) NOT NULL,
    pays varchar(255) NOT NULL,
    PRIMARY KEY (idClient),
    UNIQUE KEY email (email),
    Foreign Key (email) REFERENCES users(email)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELETE from client;

INSERT INTO Client (nom_complet, email, telephone, adresse, ville, codePostal, pays) 
VALUES ('mehdi elhjujy', 'user@gmail.com','0666666666','rue 1','casablanca','20000','maroc'),
("amina jaoudi", "amina@gmail.com ", "0666666666", "rue 2", "casablanca", "20000", "maroc"),
("mohamed elhjujy", "mohammed@gmail.com", "0666666666", "rue 3", "casablanca", "20000", "maroc"),
("jamal elhjujy", "jamal@gmail.com", "0666666666", "rue 4", "casablanca", "20000", "maroc"),
("ayoube elhjujy", "ayoube@gmail.com", "0666666666", "rue 5", "casablanca", "20000", "maroc");


SELECT * from client INNER JOIN users ON client.email = users.email;
SELECT * FROM client;

SELECT * FROM users WHERE role ='user';


CREATE TABLE admins (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    role varchar(255) NOT NULL  default 'admin',
    PRIMARY KEY (id),
    UNIQUE KEY username (username),
    UNIQUE KEY email (email),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE Table Produit (
    idProduit int(11) NOT NULL AUTO_INCREMENT,
    nom varchar(255) NOT NULL,
    code_barre varchar(255) NOT NULL,
    REFERENCE varchar(255) NOT NULL,
    prix_achat float(11) NOT NULL,
    prix_final float(11) NOT NULL,
    prix_offer float(11) NOT NULL,
    quantite int(11) NOT NULL,
    description varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    PRIMARY KEY (idProduit)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

// add rating colum to the produit table 


ALTER TABLE Produit ADD rating int(11) NOT NULL default 0;


CREATE TABLE images (
    id int(11) NOT NULL AUTO_INCREMENT,
    image_path varchar(255) NOT NULL,
    idProduit int(11) NOT NULL,
    Foreign Key (idProduit) REFERENCES Produit(idProduit),
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE cart;
CREATE TABLE cart ( 
    id int(11) NOT NULL AUTO_INCREMENT,
    idProduit int(11) NOT NULL,
    bought int(11) NOT NULL default 0,
    idClient int(11) NOT NULL,
    quantite int(11) NOT NULL,
    Foreign Key (idProduit) REFERENCES Produit(idProduit),
    Foreign Key (idClient) REFERENCES Client(idClient),
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO cart (idProduit, idClient, quantite, bought ) VALUES (1, 1, 1, 0);
INSERT INTO cart (idProduit, idClient, quantite, bought ) VALUES (2, 1, 1, 0);
INSERT INTO cart (idProduit, idClient, quantite, bought ) VALUES (3, 1, 1, 0);
INSERT INTO cart (idProduit, idClient, quantite, bought ) VALUES (4, 1, 1, 0);
INSERT INTO cart (idProduit, idClient, quantite, bought ) VALUES (5, 1, 1, 0);




INSERT into produit (nom, code_barre, REFERENCE, prix_achat, prix_final, prix_offer, quantite, description, image)
VALUES 
('produit 1', '123456789', '123456789', 100, 200, 150, 10, 'description produit 1', 'assets/products/image1.jpg'),
('produit 2', '123456789', '123456789', 100, 200, 150, 10, 'description produit 2', 'assets/products/image2.jpg'),
('produit 3', '123456789', '123456789', 100, 200, 150, 10, 'description produit 3', 'assets/products/image3.jpg'),
('produit 4', '123456789', '123456789', 100, 200, 150, 10, 'description produit 4', 'assets/products/image4.jpg'),
('produit 5', '123456789', '123456789', 100, 200, 150, 10, 'description produit 5', 'assets/products/image5.jpg');


CREATE Table Produit_Sous_Categorie (
    idProduit_Sous_Categorie int(11) NOT NULL AUTO_INCREMENT,
    idProduit int(11) NOT NULL,
    idSous_Categorie int(11) NOT NULL,
    PRIMARY KEY (idProduit_Sous_Categorie),
    Foreign Key (idProduit) REFERENCES Produit(idProduit),
    Foreign Key (idSous_Categorie) REFERENCES Sous_Categorie(idSous_Categorie)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT into produit_sous_categorie (idProduit, idSous_Categorie) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);
CREATE Table Categorie (
    idCategorie int(11) NOT NULL AUTO_INCREMENT,
    nom varchar(255) NOT NULL,
    description varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    PRIMARY KEY (idCategorie)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT into categorie (nom, description, image) VALUES
('categorie 1', 'description categorie 1', 'assets/category/image1.jpg'),
('categorie 2', 'description categorie 2', 'assets/category/image2.jpg'),
('categorie 3', 'description categorie 3', 'assets/category/image3.jpg'),
('categorie 4', 'description categorie 4', 'assets/category/image4.jpg'),
('categorie 5', 'description categorie 5', 'assets/category/image5.jpg');

CREATE Table Sous_Categorie (
    idSous_Categorie int(11) NOT NULL AUTO_INCREMENT,
    nom varchar(255) NOT NULL,
    description varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    idCategorie int(11) NOT NULL,
    PRIMARY KEY (idSous_Categorie),
    Foreign Key (idCategorie) REFERENCES Categorie(idCategorie)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT into sous_categorie (nom, description, image, idCategorie) VALUES
('sous categorie 1', 'description sous categorie 1', 'assets/category/sous/image1.jpg', 1),
('sous categorie 2', 'description sous categorie 2', 'assets/category/sous/image2.jpg', 2),
('sous categorie 3', 'description sous categorie 3', 'assets/category/sous/image3.jpg', 3),
('sous categorie 4', 'description sous categorie 4', 'assets/category/sous/image4.jpg', 4),
('sous categorie 5', 'description sous categorie 5', 'assets/category/sous/image5.jpg', 5);



CREATE Table Commande (
    idCommande int(11) NOT NULL AUTO_INCREMENT,
    dateCommande date ,
    dateLivraison date ,
    dateDenvoi date ,
    idClient int(11) NOT NULL,
    PRIMARY KEY (idCommande),
    Foreign Key (idClient) REFERENCES Client(idClient)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- status filed 

ALTER TABLE commande ADD status varchar(255) NOT NULL DEFAULT 'pending';

SELECT `idClient` FROM client;
INSERT INTO commande (dateCommande, dateLivraison, dateDenvoi, idClient) VALUES
('2020-01-01', '2020-01-01', '2020-01-01', 7),
('2020-01-01', '2020-01-01', '2020-01-01', 10),
('2020-01-01', '2020-01-01', '2020-01-01', 9),
('2020-01-01', '2020-01-01', '2020-01-01', 8),
('2020-01-01', '2020-01-01', '2020-01-01', 6);



SELECT * FROM commande;

CREATE Table Produit_Commande (
    idProduit_Commande int(11) NOT NULL AUTO_INCREMENT,
    idProduit int(11) NOT NULL,
    idCommande int(11) NOT NULL,
    quantite int(11) NOT NULL,
    PRIMARY KEY (idProduit_Commande),
    Foreign Key (idProduit) REFERENCES Produit(idProduit),
    Foreign Key (idCommande) REFERENCES Commande(idCommande)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO produit_commande (idProduit, idCommande, quantite) VALUES
(1, 6, 1),
(2, 7, 2),
(3, 8, 3),
(4, 9, 4),
(5, 10, 5),
(1, 6, 3),
(1, 7, 6),
(2, 8, 9),
(4, 9, 2),
(5, 6, 9),
(2, 7, 1),
(3, 8, 3),
(4, 9, 4),
(5, 10, 5);

--start creating queries 

--1.1
SELECT * FROM client;

SELECT * FROM commande;
SELECT * FROM produit_commande;
SELECT * FROM produit;
SELECT * FROM produit_sous_categorie;
SELECT * FROM sous_categorie;
SELECT * FROM categorie;

--1.2
SELECT * FROM client WHERE idClient = 7;
SELECT * FROM commande WHERE idClient = 7;
SELECT * FROM produit_commande WHERE idCommande = 6;
SELECT * FROM produit WHERE idProduit = 1;
SELECT * FROM produit_sous_categorie WHERE idProduit = 1;
SELECT * FROM sous_categorie WHERE idSous_Categorie = 1;
SELECT * FROM categorie WHERE idCategorie = 1;

--1.3 Join 

SELECT * FROM client INNER JOIN users ON client.email = users.email;
SELECT * from users WHERE role= "admin";
SELECT * FROM client INNER JOIN commande ON client.idClient = commande.idClient AND client.`idClient` =8;

--get all commande products 
SELECT * FROM produit_commande INNER JOIN produit ON produit_commande.idProduit = produit.idProduit;

--get all commande products of a client
SELECT  client.nom_complet,commande.`dateCommande`,commande.status  ,produit.nom, produit.prix_final from commande
INNER JOIN produit_commande ON commande.idCommande = produit_commande.idCommande 
INNER JOIN client ON commande.idClient = client.idClient
INNER JOIN produit ON produit_commande.idProduit = produit.idProduit;




-- get sum of commande did by client 
SELECT SUM(produit.prix_final) , commande.`dateCommande` 
FROM produit_commande INNER JOIN produit ON produit_commande.idProduit = produit.idProduit AND produit_commande.idCommande = 6
INNER JOIN commande ON produit_commande.idCommande = commande.idCommande AND commande.idClient = 7;


-- get total of commanes of a client
SELECT SUM() FROM commande WHERE idClient = 7;

-- get get product price 
SELECT prix_final FROM produit WHERE idProduit = 1;

-- get total of commande of a client


--1.5

SELECT * FROM commande INNER JOIN produit_commande 
ON commande.idCommande = produit_commande.idCommande 
INNER JOIN client ON commande.idClient = client.idClient

;