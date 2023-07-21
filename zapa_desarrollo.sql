/*drop database zapa_desarrollo;*/
create database zapa_desarrollo;

use zapa_desarrollo;




create table roles(
rol_id int(1)primary key,
rol_desc varchar(30)
);

insert into roles values(1,"administrador"),(2,"usuario");
select * from roles;
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
insert into colores(color_id, color_nom) values (1,"rojo"),(2,"verde"),(3,"azul"),(4,"negro"),(5,"violeta"),(6,"marron");


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
select * from tipos;

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
drop table calzados;

select * from usuarios;
select  s.stock_img, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, s.stock_id,s.estado_id,s.cal_id,s.color_id,s.n_35,s.n_36,s.n_37,s.n_38,s.n_39,s.n_40,s.n_41,s.n_42,s.n_43,s.n_44,s.n_45 from calzados c right join stock s on c.cal_id = s.cal_id having c.cal_gen="M";
select * from tipos;
select c.cal_id, c.cal_desc, c.cal_precio, c.cal_gen, c.tipo_id, t.tipo_desc from calzados c left join tipos t on c.tipo_id = t.tipo_id;
select *from calzados;
create table stock(
stock_id int(3) auto_increment,
stock_img varchar(4000),
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
n_42 int(2),
n_43 int(2),
n_44 int(2),
n_45 int(2),
primary key(stock_id,cal_id,color_id),
foreign key (cal_id)references calzados(cal_id),
foreign key (color_id) references colores(color_id),
foreign key(estado_id) references estado(estado_id)
);
drop table stock;
select * from stock;







select * from stock;

select s.stock_id, s.estado_id, s.color_id,c.cal_id as idCalzado, c.cal_desc, c.cal_gen from stock s  left join calzados c on c.cal_id = s.cal_id where s.color_id=1;

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

update stock set n_37=53 where stock_id=1;

select count(u.usu_id),u.usu_nombre,u.usu_apellido, r.reser_id as reserva_numero, r.stock_id as Numero_de_Stock from usuarios u right join reserva r on u.usu_id= r.usu_id group by u.usu_id having count(u.usu_id)>=5; 


insert into usuarios(usu_nombre,usu_Apellido,usu_dir,usu_mail,usu_pass,rol_id) values("Admin","Dinamita","calle123","admin@gmail.com",12345678,1);

create table reserva(
reser_id int(4) primary key auto_increment,
usu_id int(3),
stock_id int(3),
foreign key (usu_id) references usuarios(usu_id),
foreign key (stock_id) references stock(stock_id)
);
drop table reserva;
select * from reserva;
insert into reserva(reser_id,usu_id,stock_id) values(1,1,2),(2,1,3),(3,1,4),(4,1,2),(5,1,6);
insert into reserva(reser_id,usu_id,stock_id) values(6,2,2),(7,2,6);
insert into reserva(reser_id,usu_id,stock_id) values(8,3,2),(9,3,3),(10,3,4),(11,3,2),(12,3,6),(13,3,1);

select count(u.usu_id) as numero_de_reservas,u.usu_nombre,u.usu_apellido, r.reser_id as reserva_numero, r.stock_id as Numero_de_Stock from usuarios u right join reserva r on u.usu_id= r.usu_id group by u.usu_id having count(u.usu_id)>=5;

