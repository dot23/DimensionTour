set names gbk;
create database dimensiontour;
use dimensiontour;
create table dt_user(
	id int(8) key auto_increment,
	email char(50) not null unique,
	username char(20) not null unique,
	password char(32) not null,
	regtime int(10)
);
create table dt_product(
	id int(8) key auto_increment,
	title char(30) not null,
	content text,
	price varchar(10) default '0',
	cateid int(5),
	pubtime int(10)
);
create table dt_productimage(
	id int(9) key auto_increment,
	imagename char(35) not null,
	productid int(8) not null
);
insert into tour_user(username,password) values('dot23','123');