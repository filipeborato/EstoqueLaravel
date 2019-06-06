use banco_exemplo;
show tables;
INSERT INTO pessoa(nome, senha) 
        VALUES("bumba", "bumbameuboi");
 select * from pessoa;
 SELECT nome, senha FROM PESSOA 
WHERE nome = bumba AND senha = bumbameuboi;
