use flatbuddy;
create table flatdata(ID INT PRIMARY KEY AUTO_INCREMENT, Name varchar(30), Email varchar(30), Password varchar(40), Profile_img varchar(30), Location varchar(60), Looking_for varchar(20), Rent varchar(20), Occupancy varchar(20),Amenities varchar(30), Flat_photos varchar(40), Highlights varchar(40));
select * from flatdata;
drop table flatdata;
drop database flat_data;