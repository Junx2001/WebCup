-- creation de tables
CREATE TABLE typeForfait(
     id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
     nom varchar(100)
);

CREATE TABLE lieu(
     id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
     nom varchar(100),
     longitude float,
     latitude float
);

CREATE TABLE forfait(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idType int,
    prix float,
    tailleMin float,
    typePayement varchar(100),
    prixAdd float,
    idLieu int,
    nom varchar(100)
);

CREATE TABLE administrateur(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email varchar(100),
    mdp varchar(250)
);


CREATE TABLE typeDonne(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100)
);

CREATE TABLE forfaitDetails(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idForfait int,
    idTypeDonne int
);


CREATE TABLE user(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email varchar(100),
    mdp varchar(100)
);

CREATE TABLE commande (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    qte int,
    idForfait int,
    dateHeureCommande timestamp,
    idUser int
);



CREATE TABLE paiement (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idCommande int,
    dateHeurePaiement timestamp,
    type varchar(100)
);



    ALTER TABLE forfait ADD CONSTRAINT `forfait_fk`   
    FOREIGN KEY(idType) REFERENCES typeForfait (id) ON DELETE  CASCADE;  
    ALTER TABLE forfait ADD CONSTRAINT `forfait1_fk`   
    FOREIGN KEY(idType) REFERENCES typeForfait (id) ON UPDATE CASCADE;  

    
    ALTER TABLE forfait ADD CONSTRAINT `forfait2_fk`   
    FOREIGN KEY(idLieu) REFERENCES lieu (id) ON DELETE  CASCADE;  
    ALTER TABLE forfait ADD CONSTRAINT `forfait3_fk`   
    FOREIGN KEY(idLieu) REFERENCES lieu (id) ON UPDATE CASCADE;  


    ALTER TABLE forfaitDetails ADD CONSTRAINT `forfaitDetails_fk`   
    FOREIGN KEY(idForfait) REFERENCES forfait (id) ON DELETE  CASCADE;  
    ALTER TABLE forfaitDetails ADD CONSTRAINT `forfaitDetails1_fk`   
    FOREIGN KEY(idTypeDonne) REFERENCES typeDonne (id) ON UPDATE CASCADE;  

    ALTER TABLE commande ADD CONSTRAINT `commande_fk`   
    FOREIGN KEY(idForfait) REFERENCES forfait (id) ON DELETE  CASCADE;  

ALTER TABLE commande ADD CONSTRAINT `commande1_fk`   
    FOREIGN KEY(idUser) REFERENCES user (id) ON DELETE  CASCADE;  

    
ALTER TABLE paiement ADD CONSTRAINT `paiement_fk`   
    FOREIGN KEY(idCommande) REFERENCES commande (id) ON DELETE  CASCADE;  


-- insertion de données
INSERT INTO administrateur VALUES (1,'admin@gmail.com',sha1('motdepasse123'));

INSERT INTO typeForfait VALUES(1,'surface');
INSERT INTO typeForfait VALUES(2,'sous-terre');
INSERT INTO typeForfait VALUES(3,'eau');
INSERT INTO typeForfait VALUES(4,'espace');

INSERT INTO lieu VALUES (1,'Madagascar',46.869107,-18.766947);
INSERT INTO lieu VALUES (2,'Maurice',57.552152,-20.348404);
INSERT INTO lieu VALUES (3,'La Reunion',55.536384,-21.115141);
INSERT INTO lieu VALUES (4,'Comore',43.368079,-11.716734);
INSERT INTO lieu VALUES (5,'Mayotte',45.166244,-12.827500);
INSERT INTO lieu VALUES (6,'Océan Indien',55.45475403515597,-22.372624095043715);
INSERT INTO lieu VALUES (7,'Océan Atlantique',-1.3225897148440247,-28.866028191398378);
INSERT INTO lieu VALUES (8,'Lune',null,null);
INSERT INTO lieu VALUES (9,'Mars',null,null);


INSERT INTO forfait VALUES (null,1,25,20,'abonnement mensuel',5,1,'normal');
INSERT INTO forfait VALUES (null,1,25,20,'abonnement mensuel',5,3,'normal');
INSERT INTO forfait VALUES (null,1,50,150,'abonnement mensuel',10,1,'normal');
INSERT INTO forfait VALUES (null,1,50,150,'abonnement mensuel',10,2,'normal');
INSERT INTO forfait VALUES (null,2,65,150,'abonnement mensuel',10,4,'medium');
INSERT INTO forfait VALUES (null,2,35,20,'abonnement mensuel',5,1,'medium');

INSERT INTO forfait VALUES (null,3,530,90,'payement à vie',12,6,'high');
INSERT INTO forfait VALUES (null,3,600,100,'payement à vie',10,6,'high');
INSERT INTO forfait VALUES (null,3,550,95,'payement à vie',10,7,'high');
INSERT INTO forfait VALUES (null,3,200,50,'payement à vie',5,7,'high');

INSERT INTO forfait VALUES (null,4,999,50,'payement à vie',20,8,'premium');
INSERT INTO forfait VALUES (null,4,750,35,'payement à vie',20,8,'premium');
INSERT INTO forfait VALUES (null,4,1500,80,'payement à vie',20,9,'premium');
INSERT INTO forfait VALUES (null,4,999,30,'payement à vie',20,9,'premium');

create view vueForfait as (
select f.id,f.prix,f.tailleMin, t.nom as nomType,l.nom as nomLieu,f.prixAdd,f.nom as nomForfait, f.idType,
f.idLieu,l.longitude,l.latitude
from forfait f join lieu l on f.idLieu = l.id join typeForfait t on t.id = f.idType
);





INSERT INTO typeDonne VALUES (null,'vidéo');
INSERT INTO typeDonne VALUES (null,'photo');
INSERT INTO typeDonne VALUES (null,'son');
INSERT INTO typeDonne VALUES (null,'3D');

INSERT INTO forfaitDetails VALUES (null, 2 ,1);
INSERT INTO forfaitDetails VALUES (null, 3 ,1);
INSERT INTO forfaitDetails VALUES (null, 4 ,1);
INSERT INTO forfaitDetails VALUES (null, 5 ,1);
INSERT INTO forfaitDetails VALUES (null, 6 ,1);
INSERT INTO forfaitDetails VALUES (null, 7 ,1);
INSERT INTO forfaitDetails VALUES (null, 8 ,1);
INSERT INTO forfaitDetails VALUES (null, 9 ,1);
INSERT INTO forfaitDetails VALUES (null, 10 ,1);
INSERT INTO forfaitDetails VALUES (null, 11 ,1);
INSERT INTO forfaitDetails VALUES (null, 12 ,1);
INSERT INTO forfaitDetails VALUES (null, 13 ,1);
INSERT INTO forfaitDetails VALUES (null, 14 ,1);
INSERT INTO forfaitDetails VALUES (null, 15 ,1);


INSERT INTO forfaitDetails VALUES (null, 2 ,2);
INSERT INTO forfaitDetails VALUES (null, 3 ,2);
INSERT INTO forfaitDetails VALUES (null, 4 ,2);
INSERT INTO forfaitDetails VALUES (null, 5 ,2);
INSERT INTO forfaitDetails VALUES (null, 6 ,2);
INSERT INTO forfaitDetails VALUES (null, 7 ,2);
INSERT INTO forfaitDetails VALUES (null, 8 ,2);
INSERT INTO forfaitDetails VALUES (null, 9 ,2);
INSERT INTO forfaitDetails VALUES (null, 10 ,2);
INSERT INTO forfaitDetails VALUES (null, 11 ,2);
INSERT INTO forfaitDetails VALUES (null, 12 ,2);
INSERT INTO forfaitDetails VALUES (null, 13 ,2);
INSERT INTO forfaitDetails VALUES (null, 14 ,2);
INSERT INTO forfaitDetails VALUES (null, 15 ,2);


INSERT INTO forfaitDetails VALUES (null, 2 ,3);
INSERT INTO forfaitDetails VALUES (null, 3 ,3);
INSERT INTO forfaitDetails VALUES (null, 4 ,3);
INSERT INTO forfaitDetails VALUES (null, 5 ,3);
INSERT INTO forfaitDetails VALUES (null, 6 ,3);
INSERT INTO forfaitDetails VALUES (null, 7 ,3);
INSERT INTO forfaitDetails VALUES (null, 8 ,3);
INSERT INTO forfaitDetails VALUES (null, 9 ,3);
INSERT INTO forfaitDetails VALUES (null, 10 ,3);
INSERT INTO forfaitDetails VALUES (null, 11 ,3);
INSERT INTO forfaitDetails VALUES (null, 12 ,3);
INSERT INTO forfaitDetails VALUES (null, 13 ,3);
INSERT INTO forfaitDetails VALUES (null, 14 ,3);
INSERT INTO forfaitDetails VALUES (null, 15 ,3);

INSERT INTO forfaitDetails VALUES (null, 12 ,4);
INSERT INTO forfaitDetails VALUES (null, 13 ,4);
INSERT INTO forfaitDetails VALUES (null, 14 ,4);
INSERT INTO forfaitDetails VALUES (null, 15 ,4);




INSERT INTO user VALUES (null,'rabe@gmail.com',sha1('motdepasse'));