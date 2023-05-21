-- MySQL Script generated by MySQL Workbench
-- Sun May 21 10:27:19 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema dbappwebinv
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dbappwebinv
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbappwebinv` DEFAULT CHARACTER SET utf8 ;
USE `dbappwebinv` ;

-- -----------------------------------------------------
-- Table `dbappwebinv`.`ROLES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`ROLES` (
  `rol_code` INT NOT NULL AUTO_INCREMENT,
  `rol_name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`rol_code`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`USERS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`USERS` (
  `rol_code` INT NOT NULL,
  `user_code` VARCHAR(100) NOT NULL,
  `user_name` VARCHAR(50) NOT NULL,
  `user_lastname` VARCHAR(50) NOT NULL,
  `user_email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`user_code`),
  INDEX `ind_user_rol` (`rol_code` ASC) INVISIBLE,
  CONSTRAINT `fk_user_rol`
    FOREIGN KEY (`rol_code`)
    REFERENCES `dbappwebinv`.`ROLES` (`rol_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`CREDENTIALS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`CREDENTIALS` (
  `credential_code` VARCHAR(100) NOT NULL,
  `credential_photo` LONGBLOB NULL,
  `credential_id` VARCHAR(30) NULL,
  `credential_startdate` DATE NOT NULL,
  `credential_pass` VARCHAR(150) NOT NULL,
  `credential_status` TINYINT NOT NULL,
  INDEX `ind_credential_user` (`credential_code` ASC) INVISIBLE,
  PRIMARY KEY (`credential_code`),
  UNIQUE INDEX `uq_credential_id` (`credential_id` ASC) INVISIBLE,
  CONSTRAINT `fk_credential_user`
    FOREIGN KEY (`credential_code`)
    REFERENCES `dbappwebinv`.`USERS` (`user_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`MESSAGES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`MESSAGES` (
  `user_code` VARCHAR(10) NOT NULL,
  `message_date` DATE NOT NULL,
  `message_to` VARCHAR(100) NOT NULL,
  `message_subject` VARCHAR(50) NOT NULL,
  `message_description` VARCHAR(300) NOT NULL,
  INDEX `ind_message_user` (`user_code` ASC) INVISIBLE,
  CONSTRAINT `fk_message_user`
    FOREIGN KEY (`user_code`)
    REFERENCES `dbappwebinv`.`USERS` (`user_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`CATEGORIES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`CATEGORIES` (
  `category_code` INT NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`category_code`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`PRODUCTS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`PRODUCTS` (
  `category_code` INT NOT NULL,
  `product_code` VARCHAR(100) NOT NULL,
  `product_name` VARCHAR(50) NOT NULL,
  `product_price_sale` DECIMAL(10,2) NOT NULL,
  `product_iva_sale` DECIMAL(10,2) NOT NULL,
  `product_unit` DECIMAL(5,2) NOT NULL,
  `product_measure` VARCHAR(20) NOT NULL,
  `product_stock` INT NOT NULL,
  PRIMARY KEY (`product_code`),
  INDEX `ind_producto_categoria` (`category_code` ASC) INVISIBLE,
  CONSTRAINT `fk_producto_categoria`
    FOREIGN KEY (`category_code`)
    REFERENCES `dbappwebinv`.`CATEGORIES` (`category_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`CUSTOMERS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`CUSTOMERS` (
  `customer_code` VARCHAR(100) NOT NULL,
  `customer_birthdate` DATE NULL,
  PRIMARY KEY (`customer_code`),
  INDEX `ind_cliente_credencial` (`customer_code` ASC) VISIBLE,
  CONSTRAINT `fk_cliente_credencial`
    FOREIGN KEY (`customer_code`)
    REFERENCES `dbappwebinv`.`CREDENTIALS` (`credential_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`ORDERS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`ORDERS` (
  `customer_code` VARCHAR(100) NOT NULL,
  `order_code` VARCHAR(100) NOT NULL,
  `order_date` DATE NOT NULL,
  `order_city` VARCHAR(50) NOT NULL,
  `order_address` VARCHAR(100) NOT NULL,
  `order_partial` DECIMAL(10,2) NOT NULL,
  `order_iva` DECIMAL(10,2) NOT NULL,
  `order_total` DECIMAL(10,2) NOT NULL,
  `order_status` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`order_code`),
  INDEX `ind_pedido_cliente` (`customer_code` ASC) VISIBLE,
  CONSTRAINT `fk_pedido_cliente`
    FOREIGN KEY (`customer_code`)
    REFERENCES `dbappwebinv`.`CUSTOMERS` (`customer_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`LIST_PRODUCTS_ORDERS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`LIST_PRODUCTS_ORDERS` (
  `order_code` VARCHAR(100) NOT NULL,
  `product_cod` VARCHAR(100) NOT NULL,
  `product_quantity_order` INT NOT NULL,
  INDEX `ind_lista_productos_pedido` (`order_code` ASC) INVISIBLE,
  INDEX `ind_lista_producto_producto` (`product_cod` ASC) INVISIBLE,
  CONSTRAINT `fk_lista_productos_pedido`
    FOREIGN KEY (`order_code`)
    REFERENCES `dbappwebinv`.`ORDERS` (`order_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_lista_productos_producto`
    FOREIGN KEY (`product_cod`)
    REFERENCES `dbappwebinv`.`PRODUCTS` (`product_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`EMPLOYEES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`EMPLOYEES` (
  `employee_code` VARCHAR(100) NOT NULL,
  `employee_salary` DECIMAL(15,2) NOT NULL,
  PRIMARY KEY (`employee_code`),
  INDEX `ind_vendedor_credencial` (`employee_code` ASC) INVISIBLE,
  CONSTRAINT `fk_vendedor_credencial`
    FOREIGN KEY (`employee_code`)
    REFERENCES `dbappwebinv`.`CREDENTIALS` (`credential_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`SELLERS_ORDERS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`SELLERS_ORDERS` (
  `seller_code` VARCHAR(100) NOT NULL,
  `order_code` VARCHAR(100) NOT NULL,
  INDEX `ind_sellerorder_employee` (`seller_code` ASC) INVISIBLE,
  INDEX `ind_sellerorder_order` (`order_code` ASC) INVISIBLE,
  PRIMARY KEY (`order_code`),
  CONSTRAINT `fk_sellerorder_employee`
    FOREIGN KEY (`seller_code`)
    REFERENCES `dbappwebinv`.`EMPLOYEES` (`employee_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_sellerorder_order`
    FOREIGN KEY (`order_code`)
    REFERENCES `dbappwebinv`.`ORDERS` (`order_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`BUYS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`BUYS` (
  `buy_code` VARCHAR(100) NOT NULL,
  `buy_date` DATE NOT NULL,
  `buy_partial` DECIMAL(10,2) NOT NULL,
  `buy_iva` DECIMAL(10,2) NOT NULL,
  `buy_total` DECIMAL(10,2) NOT NULL,
  `buy_invoice` BLOB NOT NULL,
  PRIMARY KEY (`buy_code`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbappwebinv`.`LIST_PRODUCTS_BUYS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbappwebinv`.`LIST_PRODUCTS_BUYS` (
  `buy_code` VARCHAR(100) NOT NULL,
  `product_code` VARCHAR(100) NOT NULL,
  `product_price_buy` DECIMAL(10,2) NOT NULL,
  `product_iva_buy` DECIMAL(10,2) NOT NULL,
  `product_quantity_buy` INT NOT NULL,
  INDEX `ind_lista_prod_comp_productos` (`product_code` ASC) INVISIBLE,
  INDEX `ind_lista_prod_comp_compra` (`buy_code` ASC) VISIBLE,
  CONSTRAINT `fk_lista_prod_comp_productos`
    FOREIGN KEY (`product_code`)
    REFERENCES `dbappwebinv`.`PRODUCTS` (`product_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_lista_prod_comp_compra`
    FOREIGN KEY (`buy_code`)
    REFERENCES `dbappwebinv`.`BUYS` (`buy_code`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
