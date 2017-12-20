CREATE TABLE coffee_shop.users
(
    user_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login varchar(50) NOT NULL,
    password varchar(64) NOT NULL,
    email varchar(64) NOT NULL,
    date_added datetime NOT NULL,
    date_modified datetime NOT NULL
);
CREATE UNIQUE INDEX users_login_uindex ON coffee_shop.users (login);