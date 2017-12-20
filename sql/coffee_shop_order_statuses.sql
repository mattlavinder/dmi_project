CREATE TABLE coffee_shop.order_statuses
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(16) NOT NULL,
    create_at timestamp NOT NULL
);
INSERT INTO coffee_shop.order_statuses (id, name, create_at) VALUES (1, 'pending', '2017-12-15 14:54:35');
INSERT INTO coffee_shop.order_statuses (id, name, create_at) VALUES (2, 'started', '2017-12-15 14:54:50');
INSERT INTO coffee_shop.order_statuses (id, name, create_at) VALUES (3, 'completed', '2017-12-15 14:55:11');
INSERT INTO coffee_shop.order_statuses (id, name, create_at) VALUES (4, 'canceled', '2017-12-15 14:55:23');