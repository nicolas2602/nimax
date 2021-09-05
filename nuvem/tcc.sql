Create Database tcc;
------------------------------------------------------------------------
CREATE TABLE registro( 
IdRegistro int PRIMARY KEY AUTO_INCREMENT, 
nomeCadastro varchar(50) not null, 
dataN varchar(50) not null,
genero varchar(50) not null,
endereco varchar(50) not null,
cidade varchar(50) not null,
estado varchar(50) not null,
cep varchar(50) not null,
tel1 varchar(50) not null,
tel2 varchar(50) not null,
cpf varchar(50) not null,
emailCadastro varchar(50) not null, 
senhaCadastro varchar(50) not null,
imagem varchar(50) not null,
status_user boolean not null
);

 CREATE TABLE empresa(
 IdEmpresa int PRIMARY KEY AUTO_INCREMENT,
 empresa varchar(50) not null,
 cnpj varchar(50) not null,
 nomeEmpresa varchar(50) not null,
 tservico varchar(50) not null,
 endEmpresa varchar(50) not null,
 parceria varchar(50) not null,
 fk_IdRegistro int,
 FOREIGN KEY (fk_IdRegistro) references registro(IdRegistro)
 );

 alter table registro
 ADD fk_IdEmpresa int,
 ADD FOREIGN KEY (fk_IdEmpresa) references empresa(IdEmpresa);


-- Perfil Administrador ou Usuário --
create table profile_reg(
idProfile INT PRIMARY KEY AUTO_INCREMENT,
nameProfile varchar(50)
);

insert into profile_reg(nameProfile) values ('Admin'), ('User');

alter table registro
ADD fk_idProfile int,
ADD FOREIGN KEY(fk_idProfile) REFERENCES profile_reg(idProfile);


------------------------------------------------------------------------

CREATE TABLE pacote( 
IdPacote int PRIMARY KEY AUTO_INCREMENT, 
nomePacote varchar(50) not null,
preco decimal(10,2) not null
);

insert into pacote(nomePacote, preco) values ('Standart', 'FREE'), ('Prime', '200'), ('MEGA ULTRA PREMIUM DELUXE', '400');

CREATE TABLE paga_pacote(
IdPagamento int PRIMARY KEY AUTO_INCREMENT,
data_pagamento DATETIME DEFAULT NOW(), 
enderecoPag varchar(50) not null, 
cepPag varchar(50) not null, 
formaPag varchar(50) not null,
fk_IdPacote int,
fk_IdRegistro int,
foreign key(fk_IdPacote) references pacote(IdPacote),
foreign key(fk_IdRegistro) references registro(IdRegistro)
);

--- Log de acesso ---
Create table logging(
IdLogging int primary key AUTO_INCREMENT,
dateLogging datetime default now(),
level varchar(100),
msg varchar(100) not null,
fk_registro int not null,
FOREIGN key (fk_registro) references registro (IdRegistro)   
);

insert into logging (dateLogging, level, msg, fk_registro) VALUES (now(), 'INFO', 'Teste', 1);

--- Carrinho de compra ---
CREATE TABLE PRODUTO(
	ID_PRODUTO INT PRIMARY KEY AUTO_INCREMENT,
	NOME_PRODUTO VARCHAR(30) NOT NULL,
    preco decimal(10,2) not null,
	foto_produto varchar(50) not null
);


CREATE TABLE COMPRA(
	ID_COMPRA INT PRIMARY KEY AUTO_INCREMENT,
	DATA_COMPRA DATETIME DEFAULT NOW(),
    TOTAL_PRECO FLOAT,
	fk_IdRegistro int not null,
	FOREIGN key (fk_IdRegistro) references registro (IdRegistro)  
);


CREATE TABLE COMPRA_PRODUTO(
    ID INT NOT NULL AUTO_INCREMENT,
	FK_PRODUTO INT NOT NULL,
	FK_COMPRA INT NOT NULL,
    QTD_PRODUTO INT NOT NULL,
	PRIMARY KEY (ID, FK_PRODUTO, FK_COMPRA),
	FOREIGN KEY(FK_PRODUTO) REFERENCES PRODUTO(ID_PRODUTO),
	FOREIGN KEY(FK_COMPRA) REFERENCES COMPRA(ID_COMPRA)
);



INSERT INTO PRODUTO (NOME_PRODUTO, preco) VALUES ('TECLADO x13', '50'), ('MONITOR 39', '800');

INSERT INTO COMPRA (TOTAL_PRECO, fk_IdRegistro) VALUES ('0', '1');