create database vdsb;
create table object (
	id serial primary key,
	creation timestamp default current_timestamp
);
create table news (
	id integer not null primary key references object(id),
	title varchar(255) not null,
	details text
);
