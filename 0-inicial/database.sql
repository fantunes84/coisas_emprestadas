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

/*
Realizar o cadastro dos usuários e dos itens.
• Realizar o login do usuário. OK
• Permitir ao usuário acessar/configurar seus dados, que ficam salvos.
• Realizar o cadastro do item emprestado, data e contato do destinatário. OK
• Opcionalmente, pode haver a data de devolução combinada. OK
• Na tela inicial, mostrar lista dos itens emprestados e permitir clicar em botão para cadastrar um novo empréstimo. OK
• Após a data combinada, o item deve ficar destacado na lista de empréstimo; se não houver data determinada, deve-se destacar também.
• Quando algo for devolvido, deve ser marcado no sistema, que irá salvar a data.
• Opcionalmente, pode gerar relatórios de itens emprestados pendentes