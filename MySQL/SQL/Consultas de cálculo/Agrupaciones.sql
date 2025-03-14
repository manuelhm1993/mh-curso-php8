select count(contactos.id) as total_direcciones, contactos.direccion 
from cf_bd_ejemplo.contactos 
group by contactos.direccion