CREATE DATABASE php_pdo;

USE php_pdo;

CREATE TABLE alunos(
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	nome varchar(255), 
	nota int	
);

INSERT INTO alunos (nome, nota) VALUES ("Cintia", 8);
INSERT INTO alunos (nome, nota) VALUES ("Cissa", 10);
INSERT INTO alunos (nome, nota) VALUES ("Neto", 9);
INSERT INTO alunos (nome, nota) VALUES ("Marcos", 7);
INSERT INTO alunos (nome, nota) VALUES ("Aline", 8);
INSERT INTO alunos (nome, nota) VALUES ("Jorgito", 8);
INSERT INTO alunos (nome, nota) VALUES ("Chico", 7);
INSERT INTO alunos (nome, nota) VALUES ("Adriele", 8);
INSERT INTO alunos (nome, nota) VALUES ("Tatiane", 7);
INSERT INTO alunos (nome, nota) VALUES ("Laura", 9);
INSERT INTO alunos (nome, nota) VALUES ("Vinicius", 7);
INSERT INTO alunos (nome, nota) VALUES ("João", 8);
INSERT INTO alunos (nome, nota) VALUES ("Maria", 10);
INSERT INTO alunos (nome, nota) VALUES ("Pedro", 6);
INSERT INTO alunos (nome, nota) VALUES ("Gabriel", 9);
INSERT INTO alunos (nome, nota) VALUES ("Sergio", 8);
INSERT INTO alunos (nome, nota) VALUES ("Mauricio", 6);
INSERT INTO alunos (nome, nota) VALUES ("Lorenzo", 10);
INSERT INTO alunos (nome, nota) VALUES ("Fabiana", 7);
INSERT INTO alunos (nome, nota) VALUES ("Leonardo", 6);

SHOW tables;
