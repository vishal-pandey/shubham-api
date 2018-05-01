create table users (userid varchar(10), username varchar(200), position text, contact varchar(20));
create table projects (pid varchar(10), pname text, startdate date, enddate date, inchargename text, inchargecontact text, images varchar(10), tasks varchar(10), notask int(3));
create table images (pid varchar(10), link text);
create table task (pid varchar(10), tname text, progress int(3));
create table assignment (userid varchar(10), pid varchar(10));
create table comment (userid varchar(10), pid varchar(10), comment text);