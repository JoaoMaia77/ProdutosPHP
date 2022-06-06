create database atividade30_05;
use atividade30_05;

create table produto(
	codigo int unsigned auto_increment not null primary key,
	Nome char(40),
	Quantidade integer,
	precoCompra decimal(9,2),
	precoVenda decimal(9,2),
	Validade date
)engine=innodb;