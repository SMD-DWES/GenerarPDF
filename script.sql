/*Sergio Matamoros Delgado*/

CREATE DATABASE sergiopdf;

USE sergiopdf;


CREATE TABLE accounts (
  idCuenta smallint(6) NOT NULL,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  correo varchar(50) NOT NULL,
  pw varchar(70) NOT NULL
);

CREATE TABLE empleados (
  IdEmpleado tinyint(4) NOT NULL,
  DNI char(9) NOT NULL,
  Nombre varchar(100) NOT NULL,
  Correo varchar(150) DEFAULT NULL,
  Tlfno char(9) NOT NULL
)


/*Inserción de datos*/
INSERT INTO empleados(DNI,Nombre,Correo,Tlfno) VALUES
('12345670A','Sergio', 'serg@oo.es', '663234300'),
('12345678B','Juan', 'juan@oo.es', '163234300'),
('12345678C','Maria', 'mar@oo.es', '263234300'),
('12345678D','Esperanza', 'esp@oo.es', '363234300'),
('12345678E','Pablo', 'pablo@oo.es', '463234300'),
('12345678F','Ines', 'inn@oo.es', '563234300');

INSERT INTO accounts(nombre,apellido, correo, pw) VALUES
('Sergio','mat', 'serg@oo.es', '1234'),
('Juan', 'mot', 'juan@oo.es', 'qwerty'),
('Maria','jet', 'mar@oo.es', 'password'),
('Esperanza', 'sat','esp@oo.es', 'contrasenia'),
('Pablo','pot', 'pablo@oo.es', '321'),
('Ines','mett', 'inn@oo.es', '123456789');

ALTER TABLE accounts ADD FOREIGN KEY (idCuenta) REFERENCES empleados(IdEmpleado)

/* CREAR USUARIO Y PERMISOS*/
CREATE USER "2daw04Pruebas"@"localhost" IDENTIFIED BY 'Clave04';

/*
    Dar permisos al usuario
    Se le conceden los permisos de seleccionar, insertar, eliminar y actualizar
    Unicamente tendrá estos permisos en las tablas de empleados y cuentas, que son las que el 
    programa hace gestiones.
*/
GRANT SELECT, INSERT, DELETE, UPDATE, CREATE VIEW ON 'sergiopdf'.'empleados' TO '2daw04Pruebas'@'localhost';
GRANT SELECT, INSERT, DELETE, UPDATE, CREATE VIEW ON 'sergiopdf'.'accounts' TO '2daw04Pruebas'@'localhost';