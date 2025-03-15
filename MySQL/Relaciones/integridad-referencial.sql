ALTER TABLE `reuniones` 
ADD CONSTRAINT `fk_reuniones_contactos` 
FOREIGN KEY (`contacto_id`) 
REFERENCES `contactos`(`id`) 
ON DELETE CASCADE 
ON UPDATE CASCADE;