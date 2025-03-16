-- Eliminar espacios en blanco innecesarios
select trim(nombre) as nombre, apellidos, correo, fecha_nacimiento
from contactos;