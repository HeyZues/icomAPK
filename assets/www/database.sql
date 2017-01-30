  CREATE DATABASE iicom;
  use iicom;

DROP TABLE IF EXISTS site_settings;
CREATE TABLE site_settings (
  idSitio int(11) NOT NULL AUTO_INCREMENT,
  site_name varchar(500) NOT NULL,
  site_desc varchar(500) NOT NULL,
  site_email varchar(500) NOT NULL,
  site_logo varchar(1000) NOT NULL DEFAULT 'logo.svg',
  direccion varchar(500) NOT NULL,
  telefono varchar(20) NOT NULL,
  PRIMARY KEY (idSitio)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS direccion;
CREATE TABLE IF NOT EXISTS seccions ( 
idSeccion int(11) NOT NULL AUTO_INCREMENT,
idSitio int(11) NOT NULL, 
descripcion varchar(45) NOT NULL,
PRIMARY KEY (idSeccion)) ENGINE=InnoDB;

DROP TABLE IF EXISTS seccions;
CREATE TABLE IF NOT EXISTS seccions ( 
idSeccion int(11) NOT NULL AUTO_INCREMENT,
idSitio int(11) NOT NULL, 
descripcion varchar(45) NOT NULL,
PRIMARY KEY (idSeccion)) ENGINE=InnoDB;

DROP TABLE IF EXISTS carousel;
CREATE TABLE IF NOT EXISTS carousel (  
idCarousel int(11) NOT NULL AUTO_INCREMENT,
idSitio int(11) NOT NULL,
descripcion varchar(45) NOT NULL,
imagen varchar(45) NOT NULL,
PRIMARY KEY (idCarousel)) ENGINE=InnoDB;

DROP TABLE IF EXISTS servicios;
CREATE TABLE IF NOT EXISTS servicios (  
idServicio int(11) NOT NULL AUTO_INCREMENT,
idSitio int(11) NOT NULL,
descripcion varchar(45) NOT NULL,
imagen varchar(45) NOT NULL,
PRIMARY KEY (idCarousel)) ENGINE=InnoDB;



