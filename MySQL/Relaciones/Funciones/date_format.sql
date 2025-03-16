-- Darle formato a la fecha
select trim(nombre) as nombre, apellidos, correo, date_format(fecha_nacimiento, "%d/%m/%Y") as fecha_nacimiento
from contactos;