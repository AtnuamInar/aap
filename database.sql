create table users
(
    id int auto_increment primary key,
    username varchar(50),
    password varchar(50),
    user_role varchar(50),
    email varchar(50)
);



create table events
(
    name varchar(50),
    date varchar(50),
    description varchar(50),
    location varchar(50)
);


create table production
(
    email varchar(50),
    description varchar(50)
);


create table outsource
(

);


CREATE TABLE comments
(
    name varchar(50),
    description varchar(50);
);