CREATE DATABASE opep CHARACTER SET utf8 COLLATE utf8_general_ci;

-- CREATE TABLE utilisateur
-- (
--    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
--     nom VARCHAR(100),
--     prenom VARCHAR(100),
--     email VARCHAR(255),
--     pass VARCHAR(255),
--     FOREIGN KEY(id_role) REFERENCES role (id)
-- )

CREATE TABLE users
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Fullname VARCHAR(50),
    Username VARCHAR(50),
    Email VARCHAR(50),
    Pwd VARCHAR(100),
    FOREIGN KEY(id_role) REFERENCES role (id)
)

CREATE TABLE role
(
   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    rl VARCHAR(50)
)


CREATE TABLE categorie
(
   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50)
)


CREATE TABLE plante
(
   id INT  NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    Origine VARCHAR(50),
    Taille  VARCHAR(255),
    Température  VARCHAR(255),
    Prix float,
    id_cat int,
    PRIMARY KEY(id),
    FOREIGN KEY (id_cat) REFERENCES categorie (id)
)

CREATE TABLE panier(
    id int PRIMARY KEY AUTO_INCREMENT,
    id_user int,
    FOREIGN KEY (id_user) REFERENCES users(id)
)

CREATE TABLE info 
(
    id int PRIMARY KEY AUTO_INCREMENT,
    id_user int,
    id_p int,
    quanite int,
    FOREIGN KEY(id_user) REFERENCES users (id),
    FOREIGN KEY(id_p) REFERENCES plante(id)
)

CREATE TABLE plante_panier
(
id int AUTO_INCREMENT,
id_plante int,
id_panier int,
qtt int,
 PRIMARY KEY(id),
 FOREIGN KEY (id_plante) REFERENCES plante(id),
FOREIGN KEY (id_panier) REFERENCES panier(id)
)

ALTER TABLE `plante` ADD `img` VARCHAR(255) NOT NULL AFTER `id_cat`;

ALTER TABLE `plante_panier` ADD `status` INT NOT NULL AFTER `qtt`;




-- Remarque importante

-- Décoration == 1
-- Médicinale == 2
-- Agricole == 3

-- ****************************




INSERT INTO role ( )




INSERT INTO categorie (id, nom)
VALUES

(1, 'Décoration'),
(2, 'Médicinale'),
(3, 'Agricole')

SELECT * FROM categorie;







INSERT INTO plante (id, nom, Origine, Taille, Température, prix, id_cat)
VALUES

(1, 'Rose', 'Europe', '30-60 cm', '15-25°C', 10, 1),
(2, 'Orchidée', 'Asie', '15-30 cm', '18-24°C', 20, 1),
(3, 'Tulipe', 'Turquie', '20-40 cm', '10-20°C', 8, 1),
(4, 'Fougère', 'Amérique du Sud', '50-100 cm', '20-30°C', 15, 1),
(5, 'Cactus', 'Amérique du Nord', '10-30 cm', '25-40°C', 12, 1),
(6, 'Lys', 'Afrique du Sud', '60-90 cm', '20-30°C', 18, 1),




(1, 'Aloe Vera', 'Afrique', '20-60 cm', '25-35°C', 13, 2),
(2, 'Sauge', 'Méditerranée', '30-90 cm', '20-30°C', 16, 2),
(3, 'Lavande', 'Méditerranée', '30-60 cm', '15-25°C', 14, 2),
(4, 'Camomille', 'Europe', '20-50 cm', '15-25°C', 11, 2),
(5, 'Ginseng', 'Asie', '20-60 cm', '20-30°C', 30, 2),
(6, 'Echinacée', 'Amérique du Nord', '40-80 cm', '15-25°C', 25, 2),




(1, 'Blé', 'Monde', '10-30 cm', '10-30°C', 5, 3),
(2, 'Pomme de terre', 'Amérique du Sud', '15-25 cm', '15-25°C', 3, 3),
(3, 'Riz', 'Asie', '25-35 cm', '25-35°C', 4, 3),
(4, 'Maïs', 'Amérique du Nord', '20-30 cm', '20-30°C', 6, 3),
(5, 'Canne à sucre', 'Asie', '25-35 cm', '25-35°C', 8, 3),
(6, 'Caféier', 'Amérique du Sud', '20-30 cm', '20-30°C', 10, 3);



SELECT * FROM plante;

