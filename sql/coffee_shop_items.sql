CREATE TABLE coffee_shop.items
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    item_category_id int(11) NOT NULL,
    name varchar(16) NOT NULL,
    cost decimal(13,2) NOT NULL,
    created_at timestamp NOT NULL
);
CREATE INDEX item_category_id ON coffee_shop.items (item_category_id);
INSERT INTO coffee_shop.items (id, item_category_id, name, cost, created_at) VALUES (1, 1, 'Cappuccino', 7.99, '2017-12-16 00:43:00');
INSERT INTO coffee_shop.items (id, item_category_id, name, cost, created_at) VALUES (2, 1, 'Mocha', 6.99, '2017-12-16 00:43:47');
INSERT INTO coffee_shop.items (id, item_category_id, name, cost, created_at) VALUES (3, 1, 'Latte', 8.49, '2017-12-16 00:44:18');
INSERT INTO coffee_shop.items (id, item_category_id, name, cost, created_at) VALUES (4, 1, 'Espresso', 7.29, '2017-12-16 00:44:43');
INSERT INTO coffee_shop.items (id, item_category_id, name, cost, created_at) VALUES (5, 2, 'Cold Brew', 5.50, '2017-12-16 00:46:30');
INSERT INTO coffee_shop.items (id, item_category_id, name, cost, created_at) VALUES (6, 2, 'Iced Coffee', 6.00, '2017-12-16 00:48:10');
INSERT INTO coffee_shop.items (id, item_category_id, name, cost, created_at) VALUES (7, 2, 'Smoothie', 4.39, '2017-12-16 00:49:12');
INSERT INTO coffee_shop.items (id, item_category_id, name, cost, created_at) VALUES (8, 2, 'Iced Tea', 2.49, '2017-12-16 00:49:35');