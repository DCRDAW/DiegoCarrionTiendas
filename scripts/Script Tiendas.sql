create database BDTiendas;

use BDTiendas;

create table Usuarios(
    idUsario int unsigned AUTO_INCREMENT not null primary key,
    pw varchar(60) not null,
    correo varchar(200) not null,
    nombre varchar(200) not null,
    FechaInicioSesion datetime not null,
    FechaRegistro datetime not null
);
create table Pedidos(
    idPedido int unsigned AUTO_INCREMENT not null primary key,
    Fecha datetime not null,
    idUsario int unsigned not null,
    CONSTRAINT FK_Pedido FOREIGN KEY (idUsario) REFERENCES Usuarios(idUsario)
);
