CREATE TABLE coffee_shop.payment_types
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    created_at timestamp NOT NULL
);
INSERT INTO coffee_shop.payment_types (id, name, created_at) VALUES (1, 'Cash', '2017-12-15 14:56:50');
INSERT INTO coffee_shop.payment_types (id, name, created_at) VALUES (2, 'Credit Card', '2017-12-15 14:56:58');