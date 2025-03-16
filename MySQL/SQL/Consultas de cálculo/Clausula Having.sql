select count(contactos.id) as total_direcciones, contactos.direccion 
from cf_bd_ejemplo.contactos 
group by contactos.direccion
having total_direcciones > 1