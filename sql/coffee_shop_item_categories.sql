CREATE TABLE coffee_shop.item_categories
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(16) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO coffee_shop.item_categories (name) VALUES ('Hot');
INSERT INTO coffee_shop.item_categories (name) VALUES ('Cold');
