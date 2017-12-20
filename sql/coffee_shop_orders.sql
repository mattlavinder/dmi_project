CREATE TABLE coffee_shop.orders
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    payment_types_id int(11) DEFAULT '1' NOT NULL,
    phone_number int(11) NOT NULL,
    order_status_id int(11) DEFAULT '1' NOT NULL,
    pickup_datetime datetime NOT NULL,
    total decimal(13,2) DEFAULT '0.00' NOT NULL,
    is_paid int(11) DEFAULT '0' NOT NULL,
    created_at timestamp NOT NULL
);
CREATE INDEX payment_types_id ON coffee_shop.orders (payment_types_id);
CREATE INDEX order_status_id ON coffee_shop.orders (order_status_id);