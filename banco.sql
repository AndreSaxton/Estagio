Create database  if not exists teste DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

Use teste;

drop table if exists mercadoria;
Create table mercadoria
(	
	codigo int not null auto_increment,  
	codmer int not null,  
	tipo varchar (45) not null,
	nome varchar (40) not null,
    quant int not null,
	preco float(9,2) not null,
    negocio int not null,
	constraint pk_mercadoria
		primary key(codigo)
);
