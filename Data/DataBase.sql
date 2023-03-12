
-- 
---Creating the mysqli db
--
DROP DATABASE IF EXISTS `CRUD_PROJECT`;
CREATE DATABASE `CRUD_PROJECT`; 

--
--- Creating table for storing users
--
DROP TABLE IF EXISTS `users`; 
CREATE TABLE users(
    id int(11) NOT NULL,
    UserName varchar(38) NOT NULL, 
    Useremail varchar(38) NOT NULL,
    UserPhonenum int(10) NOT NULL,
    age int(3) NOT NULL, 
    uLocation varchar(60), 
    status varchar(35), 
    date TIMESTAMP
)

ALTER TABLE `users`
ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
