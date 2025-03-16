-- Cantidad de caracteres de un campo
select concat_ws(" ", nombre, apellidos) as nombre, telefono, length(telefono) as long_telefono, correo 
from contactos;