-- Concatenar campos y agregar alias
select concat(nombre, " ", apellidos) as nombre, telefono, correo 
from contactos;