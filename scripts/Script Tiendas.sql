create database BDTiendas;

use BDTiendas;

create table Usuarios(
    idUsuario int unsigned AUTO_INCREMENT not null primary key,
    pw varchar(60) not null,
    correo varchar(200) not null,
    nombre varchar(200) not null,
    FechaInicioSesion datetime not null,
    FechaRegistro datetime not null
);
create table Pedidos(
    idPedido int unsigned AUTO_INCREMENT not null primary key,
    Fecha datetime not null,
    idUsuario int unsigned not null,
    CONSTRAINT FK_Pedido FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario)
);


INSERT INTO usuarios(pw, correo, nombre, FechaInicioSesion, FechaRegistro) VALUES 
('1233','asd@OLA','cthulhu',NOW(),NOW()),
('1233123','sdf@OLA','asdasd',NOW(),NOW()),
('1232','df@OLA','luisa',NOW(),NOW()),
('123','OsdfsLA@OLA','ana',NOW(),NOW()),
('12312','fsdf@OLA','marta',NOW(),NOW()),
('1232','sdfs@OLA','ignacio',NOW(),NOW()),
('123233','sdf@OLA','tomas',NOW(),NOW()),
('12312','sdf@OLA','francisco',NOW(),NOW());
