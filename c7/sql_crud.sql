-- daj mi gi najstarite dvajca studenti

SELECT * 
FROM studenti
ORDER BY age DESC
LIMIT 3;

/*
	INSERT INTO table_name
    ( col1, col2, col3 )
    VALUES
    ( colValue1, colValue2, colValue3 )
*/

INSERT INTO studenti
(name, lastname, age, email, phone )
VALUES
('Stavre', 'Stavreski', 89, 's.s@gmail.com', '050014444');


select * from studenti;

/*
	UPDATE table_name
    SET
		col1 = val1,
        col2 = val2,
        col3 = val3
	WHERE condition
*/

UPDATE studenti
SET
	name = 'Stavrikis',
    lastname = 'Stavrikolandis',
    age = 101
WHERE id = 5;

/*
	DELETE FROM table_name
    WHERE col = val
*/

DELETE FROM studenti
where id = 6;






