CREATE TABLE product_types (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    percentage DECIMAL NOT NULL,
    created TIMESTAMP,
    modified TIMESTAMP
);

CREATE TABLE products (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    value DECIMAL NOT NULL,
    product_type_id INT NOT NULL REFERENCES product_types,
    created TIMESTAMP,
    modified TIMESTAMP
);

CREATE TABLE sales (
    id SERIAL PRIMARY KEY,
    created TIMESTAMP,
    modified TIMESTAMP
);

CREATE TABLE products_sales (
    id SERIAL PRIMARY KEY,
    product_id INT NOT NULL REFERENCES products,
    sale_id INT NOT NULL REFERENCES sales,
    amount INT NOT NULL DEFAULT 1
);