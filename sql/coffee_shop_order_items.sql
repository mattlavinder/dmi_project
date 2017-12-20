CREATE TABLE coffee_shop.order_items
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    order_id int(11) NOT NULL,
    item_id int(11) NOT NULL,
    note varchar(100),
    created_at timestamp NOT NULL
);
CREATE INDEX order_id ON coffee_shop.order_items (order_id);
CREATE INDEX item_id ON coffee_shop.order_items (item_id);
INSERT INTO coffee_shop.order_items (id, order_id, item_id, note, created_at) VALUES (75, 22, 1, null, '2017-12-20 03:52:34');
INSERT INTO coffee_shop.order_items (id, order_id, item_id, note, created_at) VALUES (74, 22, 3, null, '2017-12-20 01:14:20');
INSERT INTO coffee_shop.order_items (id, order_id, item_id, note, created_at) VALUES (67, 20, 1, null, '2017-12-20 00:46:53');
INSERT INTO coffee_shop.order_items (id, order_id, item_id, note, created_at) VALUES (69, 21, 2, null, '2017-12-20 01:13:24');
INSERT INTO coffee_shop.order_items (id, order_id, item_id, note, created_at) VALUES (68, 21, 1, null, '2017-12-20 01:13:20');
INSERT INTO coffee_shop.order_items (id, order_id, item_id, note, created_at) VALUES (70, 22, 1, null, '2017-12-20 01:14:12');
INSERT INTO coffee_shop.order_items (id, order_id, item_id, note, created_at) VALUES (71, 22, 2, null, '2017-12-20 01:14:14');
INSERT INTO coffee_shop.order_items (id, order_id, item_id, note, created_at) VALUES (87, 25, 3, null, '2017-12-20 05:29:54');