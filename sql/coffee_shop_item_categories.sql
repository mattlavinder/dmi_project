CREATE TABLE coffee_shop.item_categories
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(16) NOT NULL,
    created_at timestamp NOT NULL
);
INSERT INTO coffee_shop.item_categories (id, name, created_at) VALUES (1, 'Hot', '2017-12-12 22:03:40');
INSERT INTO coffee_shop.item_categories (id, name, created_at) VALUES (2, 'Cold', '2017-12-12 22:05:30');