use  basit_sabrii;

drop table if exists students;
-- drop table if exists students;
create table if not exists students (
    id int auto_increment primary key,
    fullname varchar(100),
    username varchar(50) unique,
    email varchar(100) unique,
    password varchar(255),
    date_of_birth date  not null,
    age int check (age >= 18),
    city varchar(255) default 'Rawalakot',
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp
);



Insert into students (fullname, username, email, password, date_of_birth, age)
VALUES
('Ali Khan', 'alikhan', 'bk83835@gmail.com', MD5('123456'), '1990-01-01', 33),
('Sara Malik', 'saram', 'bk453@gmail.com', MD5('abcdef'), '1995-05-15', 28);
