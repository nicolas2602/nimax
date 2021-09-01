create database nimax;

create table cadastro (
    IdCadastro int primary key AUTO_INCREMENT,
    nomeCad varchar(50) not null,
    dataN varchar(50) not null,
    genero varchar(50) not null,
    cpf varchar(50) not null,
    cep varchar(50) not null,
    endereco varchar(50) not null,
    cidade varchar(50) not null,
    estado varchar(50) not null,
    tel1 varchar(50) not null,
    tel2 varchar(50) not null,  
    email varchar(50) not null, 
    senha varchar(50) not null
)

 CREATE TABLE empresa_cliente(
 IdEmpresa int PRIMARY KEY AUTO_INCREMENT,
 cnpj varchar(50) not null,
 nomeEmpresa varchar(50) not null,
 tservico varchar(50) not null,
 endEmpresa varchar(50) not null,
 cidade_empresa varchar(50) not null,
 estado_empresa varchar(50) not null,
 parceria varchar(50) not null,
 fk_IdCadastro int,
 FOREIGN KEY (fk_IdCadastro) references cadastro(IdCadastro)
 );


CREATE TABLE pacote( 
IdPacote int PRIMARY KEY AUTO_INCREMENT, 
nomePacote varchar(50) not null,
preco decimal(10,2) not null
);

insert into pacote(nomePacote, preco) values ('Standart', '60'), ('Prime', '120'), ('Premium', '200');

CREATE TABLE paga_pacote(
IdPagamento int PRIMARY KEY AUTO_INCREMENT,
data_pagamento DATETIME DEFAULT NOW(), 
formaPag varchar(50) not null,
fk_IdPacote int,
fk_IdCadastro int,
foreign key(fk_IdPacote) references pacote(IdPacote),
foreign key(fk_IdCadastro) references cadastro(IdCadastro)
);


Create table logging(
IdLogging int primary key AUTO_INCREMENT,
dateLogging datetime default now(),
level varchar(100),
msg varchar(100) not null,
fk_registro int not null,
FOREIGN key (fk_cadastro) references cadastro (IdCadastro)   
);

create table problema(
    IdProblema int primary key AUTO_INCREMENT,
    dataProblema datetime default now(),
    descProblema varchar(50) not null,
    msgProblema longtext not null,
    fk_cadastro int not null,
    FOREIGN key (fk_cadastro) references cadastro (IdCadastro)   
)

create table agenda(
    IdAgenda not null int AUTO_INCREMENT,
    fk_cadastro int not null,
    fk_IdProblema int not null,
    dataAgenda varchar(50) not null,
    PRIMARY KEY (IdAgenda, fk_cadastro, fk_IdProblema),
	FOREIGN KEY(fk_cadastro) REFERENCES cadastro(IdCadastro),
	FOREIGN KEY(fk_IdProblema) REFERENCES problema(IdProblema)
)

insert into agenda (fk_cadastro,fk_IdProblema,dataAgenda) values ("7","2","2021-08-01 19:02:02")