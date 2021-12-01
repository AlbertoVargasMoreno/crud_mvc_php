CREATE database empleados;

USE empleados;

CREATE TABLE empleados( 
	id INT(11) NOT NULL AUTO_INCREMENT, 
	nombre VARCHAR(255) NOT NULL, 
	correo VARCHAR(255) NOT NULL, 
	PRIMARY KEY(id) 
);

SHOW tables;
-- +---------------------+
-- | Tables_in_empleados |
-- +---------------------+
-- | empleados           |
-- +---------------------+
-- 1 row in set (0.001 sec)

DESCRIBE empleados;
-- +--------+--------------+------+-----+---------+----------------+
-- | Field  | Type         | Null | Key | Default | Extra          |
-- +--------+--------------+------+-----+---------+----------------+
-- | id     | int(11)      | NO   | PRI | NULL    | auto_increment |
-- | nombre | varchar(255) | NO   |     | NULL    |                |
-- | correo | varchar(255) | NO   |     | NULL    |                |
-- +--------+--------------+------+-----+---------+----------------+
-- 3 rows in set (0.008 sec)

INSERT INTO empleados (id, nombre, correo) VALUES (NULL, 'Pedro', 'pedro@gmail.com');

INSERT INTO empleados (id, nombre, correo) VALUES (NULL, 'Maria Sharapova', 'awesome@player.com'), (NULL, 'Eduard Norton', 'hulk@movies.fox'), (NULL, 'Olivia', 'girl@popeye.net');

