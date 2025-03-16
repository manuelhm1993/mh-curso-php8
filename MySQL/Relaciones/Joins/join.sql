-- Todos los contactos con sus reuniones, si no se especifica que join usa, se sobreentiende que es inner join
select c.id as contacto_id, r.id as reunion_id, c.nombre, c.apellidos, c.telefono, c.correo, r.fecha_hora, r.lugar, r.anotaciones
from contactos c
join reuniones r
on c.id = r.contacto_id
order by c.id;