
-- USE basit_sabrii;


-- -- CREATE TABLE IF NOT EXISTS students (
-- --     id INT AUTO_INCREMENT PRIMARY KEY,
-- --     fullname VARCHAR(100),
-- --     username VARCHAR(50) UNIQUE,
-- --     email VARCHAR(100)  UNIQUE,
-- --     password VARCHAR(255) NOT NULL,
-- --     date_of_birth DATE NOT NULL,
-- --     age INT check (age >= 18),
-- --     city VARCHAR(100) default 'Rawalakot' NOT NULL,
-- --     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
-- --      updated_at timestamp default current_timestamp on update current_timestamp
-- -- );







-- -- CREATE TABLE IF NOT EXISTS classes (
-- --     id INT AUTO_INCREMENT PRIMARY KEY,
-- --     class_name VARCHAR(100),
-- --     class_code VARCHAR(50),
-- --     student_id INT,
-- --     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
-- --     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
-- --     FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE
-- -- );


-- INSERT INTO students (fullname, username, email, password, date_of_birth, age) VALUES
-- ('Ali Khan', lower(replace('Ali Khan', ' ','')), 'bk2@gmail.com', MD5('123456'), '1990-01-01', 33);

-- -- Insert into students (fullname, username, email, password, date_of_birth, age,city) VALUES
-- -- ('Sara Malik', 'saram2', 'sk@gmail.com', MD5('abcdef'), '1995-05-15', 28, 'Islamabad'),
-- -- ('Ali lKhan', 'aaalikhan2', 'dd@gmail.com', MD5('123456'), '1990-01-01', 33, 'Rawalakot');




-- -- INSERT INTO classes (class_name, class_code, student_id) VALUES
-- -- ('Class 1', 'C1', 1),
-- -- ('Class 2', 'C2', 2),
-- -- ('Class 3', 'C3', 3),
-- -- ('Class 4', 'C4', 1),
-- -- ('Class 5', 'C5', 2),
-- -- ('Class 6', 'C6', 3);



-- -- create table if not exists classes (
-- --     id int auto_increment primary key,
-- --     class_name varchar(100),
-- --     class_code varchar(50) unique,
-- --     student_id int,
-- --     created_at timestamp default current_timestamp,
-- --     updated_at timestamp default current_timestamp on update current_timestamp,
-- --     foreign key (student_id) references students(id) on delete cascade
-- -- );


-- -- SET FOREIGN_KEY_CHECKS = 0;

-- -- TRUNCATE TABLE classes;
-- -- TRUNCATE TABLE students;

-- -- SET FOREIGN_KEY_CHECKS = 1;




use abdul;


alter table students
add column age int check (age >= 18) after date_of_birth;