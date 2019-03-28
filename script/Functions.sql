/*FUNCTIONS*/
DROP FUNCTION	E_VALE.EV_FUNC_ENTRAR;

USE	E_VALE;

DELIMITER $$
CREATE 	FUNCTION	E_VALE.EV_FUNC_ENTRAR
(
IN_USER		VARCHAR(20),
IN_PASS		VARCHAR(20)
)
RETURNS INT

DETERMINISTIC
BEGIN

DECLARE FLG_DEVUELTA	INT;
DECLARE	COMPARE_PASS	VARCHAR(20);

SELECT CAST(AES_DECRYPT(pass, 'SQL') AS CHAR(50)) pass 
INTO	COMPARE_PASS
FROM   	EV_USUARIO   US
WHERE	US.USUARIO=IN_USER;

IF(COMPARE_PASS=IN_PASS) THEN
	SET	FLG_DEVUELTA	=	1;
ELSE
	SET	FLG_DEVUELTA	=	0;
END IF;    

RETURN FLG_DEVUELTA;   

END$$
DELIMITER ;


    