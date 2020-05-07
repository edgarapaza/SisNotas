CREATE DATABASE pedagogico;
use pedagogico;

CREATE TABLE login(
idlogin int not null auto_increment,
idpersonal int not null,
nameuser varchar(30) not null,
passuser varchar(255) not null,
niveuser int default 2,
stateuser boolean default true;
PRIMARY KEY(idlogin)
);

CREATE TABLE personal(
idpersonal int not null auto_increment,
per_nombres varchar(45) not null,
per_apellidos varchar(60) not null,
per_email varchar(60) not null,
PRIMARY KEY(idpersonal)
);

CREATE TABLE estudiante(
idstudent int not null auto_increment,
alu_nombre varchar(45) not null,
alu_apellidos varchar(60) not null,
alu_dni  varchar(8) not null,
alu_telefono varchar(45) not null,
alu_especialidad  varchar(45) not null,
alu_sexo varchar(10) not null,
alu_direccion  varchar(45) not null,
alu_distrito  varchar(45) not null,
PRIMARY KEY(idestudiante)
);

CREATE TABLE docente(
iddoc int not null auto_increment,
doc_nombres varchar(45) not null,
doc_apellidos varchar(60) not null,
doc_dni  varchar(8) not null,
doc_direccion  varchar(45) not null,
doc_telefono varchar(45) not null,
doc_especialidad  varchar(45) not null,
doc_distrito  varchar(45) not null,
PRIMARY KEY(iddoc)
);

CREATE TABLE asignatura(
idasignatura int not null auto_increment,
nivel varchar(20) not null,
horassemana varchar(20) not null,
PRIMARY KEY(idasignatura)
);

CREATE TABLE carrera(
idcarrera int not null auto_increment,
carrera varchar(100) not null,
);

//tabla que une
CREATE TABLE calificaciones(
idcalificaciones int not null auto_increment,
idperiodo int not null,
idnivel int not null,
idcarrera int not null,
iddocente int not null,
semestre int not null,
idalumno int not null,
n1 int,
n2 int,
n3 int,
n4 int,
n5 int,
n6 int,
n7 int,
n8 int,
n9 int,
n10 int,
n11 int,
n12 int,
promedio int,
PRIMARY KEY(idcalificaciones)
);

CREATE TABLE curso(
idcurso int not null auto_increment,
curso varchar(45) not null,
nivel varchar(45) not null,
PRIMARY KEY(idcurso)
);

