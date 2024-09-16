create database flatbuddy;
show databases;
use flatbuddy;
create table login(ID INT PRIMARY KEY AUTO_INCREMENT, Name varchar(30), Email varchar(30) UNIQUE, Password varchar(40), User_Type varchar(40), Gender varchar(40), City varchar(40), Profile_Picture varchar(40));
desc login;
drop table login;
