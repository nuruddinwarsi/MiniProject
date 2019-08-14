CREATE TABLE users
(
    uid INT NOT null
    AUTO_INCREMENT PRIMARY KEY,
    uname varchar
    (10) NOT null UNIQUE,
    email varchar
    (20) NOT null,
    pw char
    (60) NOT null,
    role varchar
    (10) DEFAULT 'customer'
)

    ALTER TABLE `users`
    ADD `fname` VARCHAR
    (20) NOT NULL AFTER `role`,
    ADD `lname` VARCHAR
    (20) NOT NULL AFTER `fname`,
    ADD `tcode` VARCHAR
    (20) NOT NULL AFTER `lname`,
    ADD `h_phone` INT
    (10) NOT NULL AFTER `tcode`;

    ALTER TABLE `users`
    ADD `addr_id` INT NOT NULL  AFTER `h_phone`,
    ADD `sec_id` INT NOT NULL  AFTER `addr_id`;

    create table address
    (
        addr_id int not null
        AUTO_INCREMENT PRIMARY KEY,
    building varchar
        (20),
    street varchar
        (30),
    city varchar
        (25),
    state varchar
        (20),
    zip int,
    sec_id int
)

        CREATE TABLE secondary(
	sec_id int PRIMARY KEY AUTO_INCREMENT NOT null,
    sec_fname varchar
        (20),
    sec_lname varchar
        (20),
    sec_reln varchar
        (20),
    sec_email varchar
        (30),
    sec_phone int
        (10),
    sec_street varchar
        (30),
    sec_city varchar
        (20),
    sec_state varchar
        (20),
    sec_zip int
);