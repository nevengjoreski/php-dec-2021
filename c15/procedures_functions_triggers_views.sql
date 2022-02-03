
DELIMITER ////

CREATE FUNCTION sobiranje ( i1 INT, i2 INT )
RETURNS INT

BEGIN
	DECLARE i3 INT;
    DECLARE i4 INT;
    DECLARE result INT;
    
    SET i3 = 23;
    SET i4 = 33;
    SET result = i1 + i2 + i3 + i4;
    
    RETURN result;
END ////

DELIMITER ;

drop function sobiranje;

SELECT sobiranje( 7 , 17 ) as result;
SELECT sobiranje( 13 , 22 ) as result;

DELIMITER $$
CREATE FUNCTION godina_na_transakcija(id INT)
RETURNS INT
BEGIN
	DECLARE godina INT;
    
    SET godina = ( SELECT year(t.date_created) FROM transactions t WHERE t.id = id );
    
    RETURN godina;
END $$
DELIMITER ;

select godina_na_transakcija(1);

drop function godina_na_transakcija;

DELIMITER ////
CREATE PROCEDURE sobiranje ( IN i1 INT, IN i2 INT, OUT result INT )
BEGIN
	DECLARE i3 INT;
    DECLARE i4 INT;
    
    SET i3 = 17;
    SET i4 = 23;
    
    SET result = i1 + i2 + i3 + i4;
END ////
DELIMITER ;

call sobiranje( 3, 13, @izlezen);
SELECT @izlezen as rezultat;

DELIMITER ////
CREATE PROCEDURE godina_i_nedela_na_transakcija( IN id INT, OUT godina INT, OUT nedela INT)
BEGIN
	SET godina = ( SELECT YEAR(t.date_created) FROM transactions t WHERE t.id = id );
    SET nedela = ( SELECT EXTRACT( WEEK FROM t.date_created) FROM transactions t WHERE t.id = id );
END ////
DELIMITER ;

drop procedure godina_i_nedela_na_transakcija;
call godina_i_nedela_na_transakcija(1, @godina, @nedela);
select @godina, @nedela;

-- TRIGGERS
/*
	CREATE TRIGGER event_name
    BEFORE / AFTER 
    INSERT / UPDATE / DELETE
    ON table_name
    FOR EACH ROW
    BEGIN
		-- TRIGGER BODY
    END 
*/

CREATE TABLE transactions_audit (
	id INT AUTO_INCREMENT PRIMARY KEY,
    date_created DATETIME DEFAULT CURRENT_TIMESTAMP,
    old_value bigint,
    new_value bigint
);

-- NEW , OLD

DELIMITER ////
CREATE TRIGGER before_transactions_update
BEFORE UPDATE ON transactions
FOR EACH ROW
BEGIN
	INSERT INTO transactions_audit ( old_value, new_value ) VALUES ( OLD.sum, NEW.sum);
END ////
DELIMITER ;

UPDATE transactions SET sum = 35000 WHERE id = 1;

select * from transactions;
SELECT * FROM transactions_audit;


CREATE VIEW max_withdraw_and_deposit
AS
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

select max_deposit, max_withdraw from max_withdraw_and_deposit;



