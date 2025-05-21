create DATABASE if not exists abdul;
use abdul;


-- drop table if exists users;





-- create table if not exists users (
--     id int auto_increment primary key,
--     fullname varchar(100),
--     username varchar(50) unique,
--     email varchar(100) unique,
--     password varchar(255),
--     created_at timestamp default current_timestamp,
--     updated_at timestamp default current_timestamp on update current_timestamp
-- );



-- Insert into users (fullname, username, email, password) values
-- ('Ali Khan', 'alikhan', 'bk@gmail.com', MD5('123456'));



-- create table if not exists students (
--     id int auto_increment primary key,
--     fullname varchar(100) not null,
--     username varchar(50) unique not null,
--     email varchar(100) unique,
--     password varchar(255),
--     date_of_birth date not null,
--     age int check (age >= 18),
--     city varchar(100) default 'Rawalakot' not null,
--     created_at timestamp default current_timestamp,
--     updated_at timestamp default current_timestamp on update current_timestamp
-- );

-- insert into students (fullname, username, email, password, date_of_birth, age) values
-- ('Ali Khan', lower(replace('Ali Khan11', ' ','')),'b43k@gmail.com', MD5('123456'), '1990-01-01', 24),
-- ('Ali Khan', lower(replace('Ali Khan2', ' ','')),'bewrewrk@gmail.com', MD5('123456'), '1990-01-01', 24),
-- ('Ali Khan', lower(replace('Ali Khafsd1', ' ','')),'b43er@gmail.com', MD5('123456'), '1990-01-01', 24),
-- ('Ali Khan', lower(replace('Ali Khasdfsd', ' ','')),'b43ewrk@gmail.com', MD5('123456'), '1990-01-01', 24);




-- create table if not exists classes (
--     id int auto_increment primary key,
--     class_name varchar(100),
--     class_code varchar(50) unique,
--     student_id int,
--     created_at timestamp default current_timestamp,
--     updated_at timestamp default current_timestamp on update current_timestamp,
--     foreign key (student_id) references students(id) on delete cascade
-- );

-- insert into classes (class_name, class_code, student_id) values
-- ('Class 1', 'C1', 5),
-- ('Class 2', 'C2', 6),
-- ('Class 3', 'C3', 7),
-- ('Class 4', 'C4', 8),
-- ('Class 5', 'C5', 6),
-- ('Class 6', 'C6', 8);


-- TRUNCATE TABLE classes;
-- TRUNCATE TABLE students;


-- SET FOREIGN_KEY_CHECKS = 0;

-- -- TRUNCATE TABLE classes;
-- TRUNCATE TABLE students;

-- SET FOREIGN_KEY_CHECKS = 1;
