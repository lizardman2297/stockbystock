DROP DATABASE IF EXISTS stockbystock;
CREATE DATABASE stockbystock;
USE stockbystock;

CREATE TABLE Listetag(
    id INT UNSIGNED AUTO_INCREMENT,
    libelle VARCHAR(255),
    description TEXT,

    CONSTRAINT pk_listeTag PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE tags(
    produit INT UNSIGNED,
    tag INT UNSIGNED,

    CONSTRAINT pk_tags PRIMARY KEY (produit, tag)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE LogPrix(
    id INT UNSIGNED AUTO_INCREMENT,
    produit INT UNSIGNED,
    prix DECIMAL(6,2) UNSIGNED,
    dateChangement DATE,

    CONSTRAINT pk_logPrix PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;


CREATE TABLE logStock(
    id INT UNSIGNED AUTO_INCREMENT,
    produit INT UNSIGNED,
    oldQuantite INT UNSIGNED,
    newQuantite INT UNSIGNED,
    date DATE,
    utilisateur INT UNSIGNED,

    CONSTRAINT pk_logStock PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE produit(
    id INT UNSIGNED AUTO_INCREMENT,
    refFournisseur VARCHAR(255),
    refInterne VARCHAR(255),
    visuel VARCHAR(255),
    libelle VARCHAR(255),
    prixHT DECIMAL(6,2),
    TVA DECIMAL(4,2),
    remise DECIMAL(4,2),
    quantiteMin INT,
    quantiteMax INT,
    quantite INT,
    fournisseur INT UNSIGNED,
    entite TINYINT UNSIGNED,
    site TINYINT UNSIGNED,

    CONSTRAINT pk_produit PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE fournisseur(
    id INT UNSIGNED AUTO_INCREMENT,
    nom VARCHAR(255),
    telephone VARCHAR(255),
    email VARCHAR(255),
    notes TEXT,
    francoDePort DECIMAL(6,2),
    fraisDePort DECIMAL(6,2),
    visuel VARCHAR(255),

    CONSTRAINT pk_fournisseur PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE commandes(
    id INT UNSIGNED AUTO_INCREMENT,
    refCommande VARCHAR(255),
    dateCommande date,
    produit INT UNSIGNED,
    prixHT DECIMAL(6,2) UNSIGNED,
    quantite INT UNSIGNED,
    fournisseur INT UNSIGNED,
    commentaire TEXT,
    statut TINYINT UNSIGNED,
    dateEstimer DATE,
    dateReception DATE,
    remise DECIMAL(4,2) UNSIGNED,
    relicat INT UNSIGNED,

    CONSTRAINT pk_commandes PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE statutCommande(
    id TINYINT UNSIGNED AUTO_INCREMENT,
    libelle VARCHAR(255),

    CONSTRAINT pk_statutCommande PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;


CREATE TABLE utilisateur(
    id INT UNSIGNED AUTO_INCREMENT,
    prenom VARCHAR(255),
    nom VARCHAR(255),
    mail VARCHAR(255),
    imageProfil VARCHAR(255),
    dateCreation DATE,
    role TINYINT UNSIGNED,

    CONSTRAINT pk_utilisateur PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE role(
    id TINYINT UNSIGNED AUTO_INCREMENT,
    libelle VARCHAR(255),
    description TEXT,

    CONSTRAINT pk_role PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8; 

ALTER TABLE tags ADD CONSTRAINT fk_listeTag FOREIGN KEY(tag) REFERENCES Listetag(id);
ALTER TABLE tags ADD CONSTRAINT fk_tagProduit FOREIGN KEY(produit) REFERENCES produit(id);

ALTER TABLE LogPrix ADD CONSTRAINT fk_logPrix FOREIGN KEY(produit) REFERENCES produit(id);


ALTER TABLE commandes ADD CONSTRAINT fk_fournisseurCommande FOREIGN KEY(fournisseur) REFERENCES fournisseur(id);
ALTER TABLE commandes ADD CONSTRAINT fk_statutCommande FOREIGN KEY(statut) REFERENCES statutCommande(id);
ALTER TABLE commandes ADD CONSTRAINT fk_produitCommande FOREIGN KEY(produit) REFERENCES produit(id);

ALTER TABLE produit ADD CONSTRAINT fk_produitFournisseur FOREIGN KEY(fournisseur) REFERENCES fournisseur(id);

ALTER TABLE logStock ADD CONSTRAINT fk_logStockProduit FOREIGN KEY(produit) REFERENCES produit(id);
ALTER TABLE logStock ADD CONSTRAINT fk_logStockutilisateur FOREIGN KEY(utilisateur) REFERENCES utilisateur(id);

ALTER TABLE utilisateur ADD CONSTRAINT fk_utilisateurRole FOREIGN KEY(role) REFERENCES role(id);


