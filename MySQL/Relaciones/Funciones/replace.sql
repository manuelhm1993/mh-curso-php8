-- Reemplazar un texto por otro manipulando su contenido
select upper(concat_ws(" ", nombre, apellidos)) as nombre, telefono, length(telefono) as long_telefono, REPLACE(correo, "prueba", "hotmail") as correo
from contactos;