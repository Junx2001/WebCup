-- creation de tables

CREATE TABLE lieu(
     id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
     nom varchar(100),
     longitude float,
     latitude float
);

CREATE TABLE forfait(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    type varchar(100),
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

ALTER TABLE forfait ADD FOREIGN KEY (idLieu) REFERENCES lieu(id);

-- insertion de données
INSERT INTO administrateur VALUES (1,'admin@gmail.com',sha1('motdepasse123'));

INSERT INTO lieu VALUES (1,'Madagascar',46.869107,-18.766947);
INSERT INTO lieu VALUES (2,'Maurice',57.552152,-20.348404);
INSERT INTO lieu VALUES (3,'La Reunion',55.536384,-21.115141);
INSERT INTO lieu VALUES (4,'Comore',43.368079,-11.716734);
INSERT INTO lieu VALUES (5,'Mayotte',45.166244,-12.827500);
INSERT INTO lieu VALUES (6,'Océan Indien',55.45475403515597,-22.372624095043715);
INSERT INTO lieu VALUES (7,'Océan Atlantique',-1.3225897148440247,-28.866028191398378);
INSERT INTO lieu VALUES (8,'Lune',null,null);
INSERT INTO lieu VALUES (9,'Mars',null,null);

INSERT INTO forfait VALUES (null,'surface',25,20,'abonnement mensuel',5,1,'normal');
INSERT INTO forfait VALUES (null,'surface',25,20,'abonnement mensuel',5,3,'normal');
INSERT INTO forfait VALUES (null,'surface',50,150,'abonnement mensuel',10,1,'normal');
INSERT INTO forfait VALUES (null,'surface',50,150,'abonnement mensuel',10,2,'normal');
INSERT INTO forfait VALUES (null,'sous-terre',65,150,'abonnement mensuel',10,4,'medium');
INSERT INTO forfait VALUES (null,'sous-terre',35,20,'abonnement mensuel',5,1,'medium');

INSERT INTO forfait VALUES (null,'eau',530,90,'payement à vie',12,6,'high');
INSERT INTO forfait VALUES (null,'eau',600,100,'payement à vie',10,6,'high');
INSERT INTO forfait VALUES (null,'eau',550,95,'payement à vie',10,7,'high');
INSERT INTO forfait VALUES (null,'eau',200,50,'payement à vie',5,7,'high');

INSERT INTO forfait VALUES (null,'espace',999,50,'payement à vie',20,8,'premium');
INSERT INTO forfait VALUES (null,'espace',750,35,'payement à vie',20,8,'premium');
INSERT INTO forfait VALUES (null,'espace',1500,80,'payement à vie',20,9,'premium');
INSERT INTO forfait VALUES (null,'espace',999,30,'payement à vie',20,9,'premium');


