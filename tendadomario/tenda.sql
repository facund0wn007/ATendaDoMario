create database tienda;
use tienda;

create table productos(
	idProd int primary key auto_increment,
    nomProd varchar(20) not null,
    descProd varchar(40) not null,
    precioProd int not null,
    imgProd longblob not null,
    cateProd int not null
);