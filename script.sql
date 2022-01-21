/*Sergio Matamoros Delgado*/

/*Inserción de datos*/
INSERT INTO empleados(DNI,Nombre,Correo,Tlfno) VALUES
('12345670A','Sergio', 'serg@oo.es', '663234300'),
('12345678B','Juan', 'juan@oo.es', '163234300'),
('12345678C','Maria', 'mar@oo.es', '263234300'),
('12345678D','Esperanza', 'esp@oo.es', '363234300'),
('12345678E','Pablo', 'pablo@oo.es', '463234300'),
('12345678F','Ines', 'inn@oo.es', '563234300')

/* CREAR USUARIO Y PERMISOS*/
CREATE USER "2daw04Pruebas"@"localhost" IDENTIFIED BY 'Clave04';

/*
    Dar permisos al usuario
    Se le conceden los permisos de seleccionar, insertar, eliminar y actualizar
    Unicamente los podrá utilizar en la base de datos creada.
*/
GRANT SELECT, INSERT, DELETE, UPDATE, CREATE VIEW ON 'sergiopdf'.'empleados' TO '2daw04Pruebas'@'localhost';