-- Concatena varios campos usando un separador indicado al principio
select concat_ws(" ", nombre, apellidos, correo) as nombre, telefono, correo 
from contactos;