CREATE DATABASE IF NOT EXISTS pizzaria_senac;
USE pizzaria_senac;

CREATE TABLE IF NOT EXISTS pizza (
   id INT AUTO_INCREMENT PRIMARY KEY,
	sabor VARCHAR(100) NOT NULL,
   	tamanho VARCHAR(10) NOT NULL,
   	preco DECIMAL(10, 2) NOT NULL
);

USE pizzaria_senac;
SELECT * FROM pizza;