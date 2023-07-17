<?php
    $table_candies="CREATE TABLE candies (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) UNIQUE,
        descripcion TEXT,
        img DATE,
        price FLOAT,
        link VARCHAR(300),
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL,
    )";


    $table_keychains="CREATE TABLE keychains (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) UNIQUE,
        descripcion TEXT,
        img DATE,
        price FLOAT,
        link VARCHAR(300),
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL,
    )";

    $table_clothes="CREATE TABLE clothes (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) UNIQUE,
        descripcion TEXT,
        img DATE,
        price FLOAT,
        link VARCHAR(300),
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL,
    )";

    $table_other="CREATE TABLE other (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) UNIQUE,
        descripcion TEXT,
        img DATE,
        price FLOAT,
        link VARCHAR(300),
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL,
    )";

    $table_teddies="CREATE TABLE teddies (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) UNIQUE,
        descripcion TEXT,
        img DATE,
        price FLOAT,
        link VARCHAR(300),
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL,
    )";

    $table_watches="CREATE TABLE watches (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) UNIQUE,
        descripcion TEXT,
        img DATE,
        price FLOAT,
        link VARCHAR(300),
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL,
    )";
?>