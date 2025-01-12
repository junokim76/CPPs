/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  mpisc
 * Created: 14 de mar. de 2023
 */
CREATE DATABASE IF NOT EXISTS db_livros_23;
USE db_livros_23;

DROP TABLE IF EXISTS livro;
CREATE TABLE livro (
  id int NOT NULL AUTO_INCREMENT,
  titulo varchar(45) DEFAULT NULL,
  autor varchar(45) DEFAULT NULL,
  CONSTRAINT pc_livro PRIMARY KEY (id)
);

INSERT INTO livro VALUES (1,'Java: Como Programar','Deitel & Deitel'),(2,'Use a Cabeça: Java','Bert Bates e Katy Sierra'),(3,'Conceitos de Linguagens de Programação','Robert Sebesta'),(4,'10 anos no Mar','Heloísa Shurmann');

