create table `cf_bd_ejemplo`.`contactos`(
	`id` int not null auto_increment,
    `nombre` varchar(64) not null,
    `apellidos` varchar(64) not null,
    `direccion` varchar(255) not null,
    `telefono` varchar(11) not null,
    `correo` varchar(255) not null,
    `fecha_nacimiento` date default null,
    `familia` bit default null,
    primary key (`id`)
);