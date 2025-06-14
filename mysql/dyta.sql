-- create  DATABASE abc;
-- drop database if exists abc;

 use abc;
create table if not exists users (
    id int auto_increment primary key,
    fullname varchar(100),
    username varchar(50) unique,
    email varchar(100) unique,
    password varchar(255),
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp
);


drop table if exists users;