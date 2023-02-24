
-- 
---Creating the mysqli db
--
CREATE DATABASE `CRUD_PROJECT` IF NOT EXISTS; 

--
--- Creating table for storing users
--
CREATE TABLE users(
    id int(11) NOT NULL UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    UserName varchar(38) NOT NULL, 
    Useremail varchar(38) NOT NULL,
    UserPhonenum int(10) NOT NULL,
    age int(3) NOT NULL, 
    uLocation varchar(60), 
    status varchar(35), 
    date TIMESTAMP,
)