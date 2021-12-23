create table if not exists mvc.juegoswii
(
    codigo varchar(30)  not null
        primary key,
    nombre varchar(255) not null,
    constraint juegoswii_codigo_uindex
        unique (codigo)
);

