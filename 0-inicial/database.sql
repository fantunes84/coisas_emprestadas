CREATE TABLE item(
    id INT PRIMARY KEY AUTO_INCREMENT,
    item VARCHAR(100),
    data_emprestimo DATE,
    previsao_entrega DATE,
    data_entrega DATE
    usuario_id FOREIGN KEY
);

CREATE TABLE usuario(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80),
    contato VARCHAR(20),
    email VARCHAR(60) NOT NULL,
    senha VARCHAR(128) NOT NULL
);