CREATE DATABASE HChocontaP01; 
USE HChocontaP01; 

CREATE TABLE tipoEntrada
(
	idTipoEntrada INT AUTO_INCREMENT, 
    nombreTipoEntrada VARCHAR(50) NOT NULL,
    descripcionTipoEntrada VARCHAR(50) NOT NULL, 
    urlImagTipoEntrada VARCHAR(50) NOT NULL, 
    PRIMARY KEY (idTipoEntrada)
);	

CREATE TABLE entradas
(
	idEntrada INT AUTO_INCREMENT,
    fechaEntrada DATE NOT NULL, 
	tituloEntrada VARCHAR(50) NOT NULL,
    descripcionEntrada VARCHAR(500) NOT NULL, 
    urlImagenEntrada VARCHAR(100) NULL,
    urlDocumentoEntrada VARCHAR(100) NULL,
    estadoEntrada VARCHAR(40) NOT NULL,
    idTipoEntrada INT,
    PRIMARY KEY (idEntrada), 
	FOREIGN KEY (idTipoEntrada) 
    REFERENCES tipoEntrada (idTipoEntrada)
);  