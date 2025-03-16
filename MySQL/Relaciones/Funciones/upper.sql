-- Pasar a mayúsculas los nombres 
select upper(concat_ws(" ", nombre, apellidos)) as nombre, telefono, length(telefono) as long_telefono, correo 
from contactos;