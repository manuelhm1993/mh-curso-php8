CREATE TABLE `cf_bd_ejemplo`.`reuniones` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `contacto_id` INT NOT NULL , 
    `fecha_hora` DATETIME NOT NULL , 
    `lugar` VARCHAR(255) NOT NULL , 
    `anotaciones` VARCHAR(255) NULL DEFAULT NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB;