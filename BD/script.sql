create table usuarios(
    nome varchar(25) not null,
    email varchar(100) not null,
    cpf char(11) unique not null,
    cep char(9) not null,
    endereco varchar(100) not null,
    cidade varchar(25) not null,
    uf varchar(10) not null,
    senha varchar(50) not null,
    PRIMARY KEY (cpf)
);