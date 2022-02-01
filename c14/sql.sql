/*
CREATE TABLE transactions (
	id int(11) NOT NULL AUTO_INCREMENT,
    transaction_number varchar(50) NOT NULL,
    `type` varchar(50) NOT NULL,
    `sum` bigint NOT NULL,
    date_created datetime DEFAULT CURRENT_TIMESTAMP,
    student_id int(11) NOT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT FK_transactions_studenti FOREIGN KEY (student_id) REFERENCES studenti (id) ON DELETE CASCADE
);
*/

https://www.w3schools.com/sql/sql_join.asp
INSERT INTO transactions ( id, transaction_number, type, sum, date_created, student_id)
VALUES
(1, '5454-3251-1476-5522', 'deposit', 35000, '2022-02-01 00:00:00', 1),
(2, '5454-1234-1476-5522', 'deposit', 29000, '2022-01-15 00:00:00', 2),
(3, '1234-1234-1476-5522', 'withdraw', 2500, '2022-01-16 00:00:00', 2),
(4, '4426-1234-1476-5522', 'withdraw', 5000, '2022-01-24 00:00:00', 2),
(5, '4426-1234-1234-5522', 'withdraw', 16000,'2022-02-02 00:00:00', 1),
(6, '4426-1234-5566-5522', 'withdraw', 1900, '2022-02-02 00:00:00', 1);

SELECT transactions.type, transactions.sum, transactions.date_created, studenti.name, studenti.lastname
FROM transactions
JOIN studenti ON studenti.id = transactions.student_id;


SELECT transactions.type, transactions.sum, transactions.date_created, studenti.name, studenti.lastname
FROM studenti
JOIN transactions ON studenti.id = transactions.student_id;

-- aliases tables
SELECT t.type, t.sum, t.date_created, s.name, s.lastname
FROM transactions t
JOIN studenti s ON s.id = t.student_id;

SELECT t.type, t.sum, t.date_created, s.name, s.lastname surname
FROM transactions t
INNER JOIN studenti s ON s.id = t.student_id;

-- WHERE deposit
SELECT t.type, t.sum, t.date_created, s.name, s.lastname
FROM transactions t
JOIN studenti s ON s.id = t.student_id
WHERE t.type = 'deposit';

SELECT t.type, t.sum, t.date_created, s.name, s.lastname
FROM transactions t
JOIN studenti s ON s.id = t.student_id
WHERE t.type = 'deposit' AND s.age > 25;

-- LEFT / RIGHT JOIN

SELECT s.id, s.name, s.lastname, t.type, t.sum
FROM transactions t
RIGHT JOIN studenti s ON s.id = t.student_id;

SELECT s.id, s.name, s.lastname, t.type, t.sum
FROM studenti s
LEFT JOIN transactions t ON s.id = t.student_id;

SELECT max(sum)
FROM transactions
WHERE type = 'deposit';


SELECT max(sum)
FROM transactions
WHERE type = 'withdraw';

--
## 
/* */

-- daj mi gi site korisnici i sumata sto ja imaat napraveno kako deposit

SELECT sum(t.sum) as suma
FROM transactions t
JOIN studenti s ON s.id = t.student_id
WHERE t.type = 'deposit';

-- daj mi gi site korisnici ( posebno po korisnik) i sumata sto ja imaat napraveno kako withdraw

SELECT sum(t.sum) as suma, s.name
FROM transactions t
JOIN studenti s ON s.id = t.student_id
WHERE t.type = 'withdraw'
GROUP BY s.name;

-- daj mi gi site korisnici ( posebno po korisnik) i sumata sto ja imaat napraveno kako withdraw i deposit

SELECT sum(t.sum) as suma, s.name, t.type
FROM transactions t
JOIN studenti s ON s.id = t.student_id
WHERE t.type = 'withdraw' OR t.type = 'deposit'
GROUP BY t.type, s.name;

SELECT 
(
	SELECT max(sum)
    FROM transactions
    WHERE type = 'deposit'
) as max_deposit,
(
	SELECT max(sum)
    FROM transactions
    WHERE type = 'withdraw'
) as max_withdraw;

SELECT max(sum), type
FROM transactions
GROUP BY type;


