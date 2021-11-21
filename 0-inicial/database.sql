CREATE DATABASE emprestimos;

CREATE TABLE emprestimos.usuario(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80),
    email VARCHAR(60) NOT NULL UNIQUE,
    senha VARCHAR(34) NOT NULL
);

CREATE TABLE emprestimos.emprestimo(
    id INT NOT NULL AUTO_INCREMENT,
    item VARCHAR(100) NOT NULL,
    data_emprestimo DATE NOT NULL,
    previsao_entrega DATE NOT NULL,
    data_entrega DATE,
    nome VARCHAR(100) NOT NULL,
    contato VARCHAR(20) NOT NULL,
    usuario_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES emprestimos.usuario(id)
);