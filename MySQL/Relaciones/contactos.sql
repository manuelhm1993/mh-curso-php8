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
