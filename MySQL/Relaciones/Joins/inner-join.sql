-- Todos los contactos con sus reuniones
select c.id as contacto_id, r.id as reunion_id, c.nombre, c.apellidos, c.telefono, c.correo, r.fecha_hora, r.lugar, r.anotaciones
from contactos c
inner join reuniones r
on c.id = r.contacto_id
order by c.id;