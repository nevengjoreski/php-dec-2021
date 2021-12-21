/*
CREATE SCHEMA `php` ;

CREATE TABLE `php`.`studenti` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `age` INT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));
  
  
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Viktor', 'Trajkovski', '22', 'v.t@gmail.com', '070777888');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('David', 'Nikolovski', '29', 'd.n@hotmail.com', '071222333');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Biljana', 'Murdjevska', '33', 'b.m@yahoo.com', '076555666');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('David', 'Stojkovski', '53', 'd.s@gmail.com', '070444555');
*/


-- SELECT
# SELECT ... FROM ..... ;

-- daj mi gi site studenti
SELECT * FROM studenti;
-- daj mi go imeto i prezimeto na site studenti
SELECT name, lastname FROM studenti;

-- WHERE
-- SELECT .... FROM ..... WHERE ....
-- daj mi gi site studenti koi imaat nad 30 godini
SELECT *
FROM studenti
WHERE age > 30;

-- daj mi gi imeto i prezimeto na site studenti koi se vikaat David
SELECT name , lastname
FROM studenti
WHERE name = 'David';

-- AND / OR
-- daj mi gi site studenti koi imaat pod 23 ili nad 40 godini
SELECT *
FROM studenti
WHERE age > 40 OR age < 23;

-- daj mi gi site studenti koi imaat nad 30 god , i se vikaat david
SELECT *
FROM studenti
WHERE age > 30 AND name = 'David';

-- daj mi gi site studenti , po ime i prezime kako surname 
SELECT name, lastname as surname
FROM studenti;

-- LIKE
-- % zamenuva nula, eden, ili poveke karekteri 
-- _ zamenuva samo eden karakter

-- daj mi gi site studenti koj go korist gmail
SELECT *
FROM studenti
WHERE email LIKE '%@gmail.com';

-- daj mi gi site studenti koi imaat telefonski broj 07 nesto 444555
SELECT *
FROM studenti
WHERE phone LIKE '07_444555';

-- daj mi gi site studenti po ime i prezime koi imat telefon so 070
SELECT name, lastname
FROM studenti
WHERE phone LIKE '070%';

-- NOT !
SELECT *
FROM studenti
WHERE name != 'David';

-- IN
-- daj mi gi site studenti koi se vikaat viktor ili biljana
SELECT * 
FROM studenti
WHERE name = 'Viktor' OR name = 'Biljana';

SELECT *
FROM studenti
WHERE name IN ('Viktor','Biljana');

-- NOT IN
SELECT *
FROM studenti
WHERE name NOT IN ('Viktor', 'Biljana');

-- daj mi gi site Unikatni iminja koi sto postojat vo studenti
SELECT DISTINCT name
FROM studenti;

-- count
-- kolku studenti ima vo tablata
SELECT count(*) as broj_na_studenti
FROM studenti;


-- GROUP BY
-- daj mi go brojot na site studenti po ime

SELECT name , count(*) as broj_po_ime
FROM studenti
GROUP BY name;

-- ORDER BY ASC / DESC
-- default ASC

SELECT name , count(*) as broj_po_ime
FROM studenti
GROUP BY name
ORDER BY broj_po_ime DESC;

SELECT *
FROM studenti
ORDER BY age DESC;

