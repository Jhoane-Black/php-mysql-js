--crear base de datos más CRUD de una libreria "booktore" con PHP y MYSQL

drop table if exists book cascade;
drop table if exists genere cascade;
drop table if exists book_genere cascade;
drop table if exists author cascade;
drop table if exists book_author cascade;

-- crear las tablas de la base de datos
create table if not exists book( 
  book_id varchar(10) primary key,
  book_title varchar(50),
  book_editorial varchar(50),
  book_saga varchar(50),
  book_price float,
  book_price_dis float);

create table if not exists genere(
  gen_id varchar(10) primary key,
  gen_title varchar(50));

create table if not exists book_genere(
  bxg_gen_id varchar(10),
  bxg_book_id varchar(10),
  primary key (bxg_gen_id, bxg_book_id),
  foreign key (bxg_gen_id) references genere (gen_id),
  foreign key (bxg_book_id) references book (book_id));

create table if not exists author(
  aut_id varchar(10) primary key,
  aut_title varchar(50));

create table if not exists book_author(
  bxa_aut_id varchar(10),
  bxa_book_id varchar(10),
  primary key (bxa_aut_id, bxa_book_id),
  foreign key (bxa_aut_id) references author (aut_id),
  foreign key (bxa_aut_id) references book (book_id));


INSERT INTO book (book_id,book_title,book_editorial,book_saga,book_price)
VALUES ('11','Harry Potter Y El Caliz de Fuego','Salamandra','Harry Potter',220000),
 ('9','Harry Potter Y La Camara Secreta','Salamandra','Harry Potter',200000),
 ('8','Harry Potter Y La Piedra Filosofal','Salamandra','Harry Potter',199000),
 ('10','Harry Potter Y El Prisionero de Azkaban','Salamandra','Harry Potter',210000),
 ('12','Harry Potter Y La Orden Del Fenix','Salamandra','Harry Potter',230000),
 ('13','Harry Potter Y Las Reliquias De La Muerte Parte 1','Salamandra','Harry Potter',240000),
 ('14','Harry Potter Y Las Reliquias De La Muerte Parte 2','Salamandra','Harry Potter',240000),
 ('1','Cien años de soledad','Sudamericana',null,200000), 
 ('2','El código Da Vinci','Random House','Robert Langdon',190000),
 ('3','El principito','Reynal & Hitchcock',null,180000),
 ('4','El ingenioso hidalgo Don Quijote de la Mancha','Francisco de Robles',null,180000),
 ('5','El alquimista ','Paulo Coelho',null,60000),
 ('6','El Perfume','Seix Barral',null,180000),
 ('7','El amor en los tiempos del cólera','Sudamericana',null,180000);

select * from book where book_price_dis != 0;
