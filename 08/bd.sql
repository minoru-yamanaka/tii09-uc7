DROP TABLE IF EXISTS contatos;

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    endereco VARCHAR(255) DEFAULT NULL
);

INSERT INTO contatos (nome, telefone, email, endereco) VALUES 
    ('Mickey', '11999887766', 'mickey@mail.com', 'Rua X, Disney'),
    ('Donald', '11988881155', 'donald@mail.com', 'Ladeira Z, Disney'),
    ('Margarida', '11955887711', 'margarida@mail.com', 'Avenida Y, Disney');

INSERT INTO contatos (nome, telefone, email, endereco) VALUES 
    ('Batman', '11955557766', 'batman@mail.com', NULL);

INSERT INTO contatos (nome, telefone, email) VALUES 
    ('Superman', '11933553366', 'superman@mail.com');

// Se não quiser apagar a tabela, você pode verificar se a coluna existe com:
DESCRIBE contatos;

// Se o campo telefone não estiver listado, você pode adicioná-lo com:
ALTER TABLE contatos ADD telefone VARCHAR(15) NOT NULL AFTER nome;