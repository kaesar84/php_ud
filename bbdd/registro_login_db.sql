DROP DATABASE IF EXISTS registro_login_db;                   
CREATE DATABASE registro_login_db;
show databases;
USE registro_login_db;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT,
    usuario VARCHAR(50) NOT NULL, 
    pass VARCHAR(200) NOT NULL, 
    PRIMARY KEY(id)
);