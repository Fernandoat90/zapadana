/*drop database zapa_desarrollo;*/
create database zapa_desarrollo;
use zapa_desarrollo;

create table roles(
rol_id int(1)primary key,
rol_desc varchar(30)
);

insert into roles values(1,"administrador"),(2,"usuario");

create table tipos(
tipo_id int(2) primary key,
tipo_desc varchar(30)
);

select* from tipos;
insert into tipos(tipo_id,tipo_desc) values (1,"deportivo"),(2,"De vestir");
/*
create table marcas(
marc_id int(2) primary key,
marc_desc varchar(40)
);
*/
create table colores(
color_id int(2) primary key,
color_nom varchar(40)
);
select * from colores;
insert into colores(color_id, color_nom) values (1,"rojo"),(2,"verde"),(3,"azul");


/*
create table respuestas(
resp_id int(1)primary key,
resp_preg varchar(40),
usu_id int(3),
foreign key (usu_id) references usuarios(usu_id)
);*/


create table estado(
estado_id int(1) PRIMARY KEY,
estado_desc varchar(20)
);

select *from estado;
insert into estado(estado_id,estado_desc) values (1,"Disponible"),(2,"No disponible");

create table calzados(
cal_id int(3) primary key,
cal_desc varchar(40),
cal_precio float(5,2),
cal_gen char(1),
tipo_id int(2),
/*marc_id int(2),*/
foreign key(tipo_id) references tipos(tipo_id)
/*foreign key (marc_id) references marcas(marc_id)*/ 
);

create table stock_masc(
estado_id int(1),
cal_id int(3),
color_id int(2),
n_39 int(2),
n_40 int(2),
n_41 int(2),
n_42 int(2),
n_43 int(2),
n_44 int(2),
n_45 int(2),
primary key(cal_id,color_id),
foreign key (cal_id)references calzados(cal_id),
foreign key (color_id) references colores(color_id),
foreign key(estado_id) references estado(estado_id)
);

create table stock_fem(
estado_id int(1),
cal_id int(3),
color_id int(2),
n_35 int(2),
n_36 int(2),
n_37 int(2),
n_38 int(2),
n_39 int(2),
n_40 int(2),
n_41 int(2),
primary key(cal_id,color_id),
foreign key (cal_id)references calzados(cal_id),
foreign key (color_id) references colores(color_id),
foreign key(estado_id) references estado(estado_id)
);

create table usuarios(
usu_id int(3) primary key AUTO_INCREMENT,
usu_nombre varchar(30),
usu_apellido varchar(30),
/*usu_dni int(11),*/
usu_dir varchar(40),
usu_mail varchar(50),
usu_pass varchar(30),
rol_id int(1),
foreign key(rol_id) references roles(rol_id)
);

select * from usuarios;

create table reserva(
reser_id int(4) primary key,
usu_id int(3),
cal_id int(3),
foreign key (usu_id) references usuarios(usu_id),
foreign key (cal_id) references calzados(cal_id)
);