drop database if exists usuarios;
create database usuarios;
use usuarios;
create table pessoas(
    id_pessoa integer not null auto_increment,
    nome varchar(40) not null, 
    primary key (id_pessoa)
);
create table telefones(
    id_pessoa integer not null,
    telefone varchar(15) not null,
    constraint fk_tel_pess
    foreign key (id_pessoa)
    references pessoas(id_pessoa)
);
create table usuarios(
    id_pessoa integer not null,
    login varchar(10) not null,
    senha varchar(50) not null,
    constraint fk_possui
    foreign key (id_pessoa)
    references pessoas(id_pessoa)
);

describe pessoas;
describe telefones;
describe usuarios;
show tables;

insert into pessoas(nome) values
("Leonardo"),
("Rodolpho"),
("Jurema");
insert into pessoas(nome) values ("Marcia Souza");
insert into pessoas(nome) values ("Rodrigo Vieira");
insert into pessoas values (default,"Maria Silva");

select * from pessoas;

insert into telefones(id_pessoa,telefone) values 
(1,"19 45677-7897"),
(1,"19 9879-0986");
insert into telefones values (3,"19 7070-7070");

select * from telefones;