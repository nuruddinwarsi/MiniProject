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