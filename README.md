# PHP-Examples
Examples with database connection codes in PHP

## Arquivos - RegistrarNovaAtividade.php e SalvarNovaAtividade.php
1. Vai ser necessário criar um banco de nome: "suporte" (OBS: Caso deseje colocar outro nome, lembrar de alterar no código fonte SalvarNovaAtividade.php);
2. A tabela dentro do banco foi nominada de "atividade", então será necessário criar essa tabela dentro do banco "suporte";
3. Os atributos dentro da tabela, vai ser necessário criar "Titulo" e "Descricao" - Lembrando que os valores de entrada vão ser VARCHAR (Texto);
4. Ao realizar a criação do banco, testem a aplicação "RegistrarNovaAtividade.php", verifiquem se ao cadastrar a nova atividade, os dados vão ser inseridos no banco de dados.

## Arquivo - DatabaseQuery.php
1. Criar um banco de dados chamado suporte (CREATE DATABASE suporte;)
2. Solicitar a utilização do banco recém-criado: (USE suporte;)
3. Criar a tabela Atividade:
* CREATE TABLE Atividade (ID INTEGER NOT NULL AUTO_INCREMENT, Titulo VARCHAR(50) NOT NULL, Descricao VARCHAR(2048) NOT NULL, DtCriacao DATETIME DEFAULT NOW(), Responsavel VARCHAR(80), Progresso TINYINT NOT NULL DEFAULT '0', Situacao TINYINT NOT NULL DEFAULT '1', CONSTRAINT PK_ATIVIDADE PRIMARY KEY (ID) );
4. Adicionar algumas atividades de exemplo:
* INSERT INTO Atividade (Titulo, Descricao) VALUES ('Atividade 1', 'Descrição 1'), ('Atividade 2', 'Descrição 2');
