-- untuk membuat database ketikkan perintah di terminal 
-- mysql -u root -p < create.sql

-- jika sudah punya database hapus perintah 1 dibawah lalu ketikkan perintah
-- mysql -u root -p nama_database < create.sql

-- CREATE DATABASE data_santri;

-- CREATE TABLE `contacts` ( 
--     `id` INT AUTO_INCREMENT PRIMARY KEY, 
--     `fname` VARCHAR(150)  , 
--     `lname` VARCHAR(150)  , 
--     `email` VARCHAR(175)  , 
--     `phone1` VARCHAR(50)  , 
--     `phone2` VARCHAR(50)  , 
--     `phone3` VARCHAR(50)  , 
--     `address` VARCHAR(255)  , 
--     `address2` VARCHAR(255)  , 
--     `city` VARCHAR(255)) ;

-- ALTER TABLE 
--     `contacts` ADD `state` VARCHAR(155) NOT NULL AFTER 
--     `city`, ADD `zip_code` VARCHAR(50) NOT NULL AFTER 
--     `state`, ADD `country` VARCHAR(155) NOT NULL AFTER 
--     `zip_code`, ADD `user_id` INT NOT NULL AFTER `country`;

-- CREATE TABLE `users` ( 
--     `id` INT AUTO_INCREMENT PRIMARY KEY, 
--     `username` VARCHAR(150)  , 
--     `email` VARCHAR(150)  , 
--     `password` VARCHAR(150)  , 
--     `fname` VARCHAR(150)  , 
--     `lname` VARCHAR(150)  , 
--     `acl` TEXT );

-- CREATE TABLE `user_sessions` ( 
--     `id` INT AUTO_INCREMENT PRIMARY KEY, 
--     `user_id` VARCHAR(150)  , 
--     `session` VARCHAR(255)  , 
--     `user_agent` VARCHAR(255));

-- ALTER TABLE `users` ADD `delete` TINYINT NOT NULL DEFAULT '0' AFTER `acl`;
