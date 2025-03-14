CREATE TABLE `cf_bd_ejemplo`.`contactos` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nombre` VARCHAR(64) NOT NULL , 
    `apellidos` VARCHAR(64) NOT NULL , 
    `direccion` VARCHAR(255) NOT NULL , 
    `telefono` VARCHAR(11) NOT NULL , 
    `correo` VARCHAR(255) NOT NULL , 
    `fecha_nacimiento` DATE NOT NULL , 
    `familia` BOOLEAN NOT NULL DEFAULT FALSE , 
    PRIMARY KEY (`id`), 
    UNIQUE (`correo`)) ENGINE = InnoDB;

CREATE TABLE `cf_bd_ejemplo`.`reuniones` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `contacto_id` INT NOT NULL , 
    `fecha_hora` DATETIME NOT NULL , 
    `lugar` VARCHAR(255) NOT NULL , 
    `anotaciones` VARCHAR(255) NULL DEFAULT NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB;