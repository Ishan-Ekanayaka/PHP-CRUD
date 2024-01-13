
--create DB as task

create table table1(
   ID Int primary key auto_increment,
   First_Name VARCHAR(200) NOT NULL,
   Last_Name VARCHAR(200) NOT NULL, 
   Email_Address VARCHAR(200) NOT NULL,
   Postal_Address VARCHAR(200),
   City VARCHAR(200), 
   Country VARCHAR(200), 
   Postal_Code INT  , 
   Telephone_Number VARCHAR(50),
   Comment1 VARCHAR(300)
);

create table table2(
  ID Int primary key auto_increment,
  UName VARCHAR(100) NOT NULL,
  Pword VARCHAR(100) NOT NULL
);

insert into table2(UName,Pword) values(`admin`,`admin`);
