CREATE TABLE users(
	uid INT NOT null AUTO_INCREMENT PRIMARY KEY,
    uname varchar(10) NOT null UNIQUE,
    email varchar(20) NOT null,
    pw char(60) NOT null,
    role varchar(10) NOT null
)