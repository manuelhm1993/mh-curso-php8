-- Pasar a minúsculas los nombres 
select lower(concat_ws(" ", nombre, apellidos)) as nombre, telefono, length(telefono) as long_telefono, correo 
from contactos;