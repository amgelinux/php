create table if not exists mvc.juegoswiicovers
(
    codigo    varchar(30)                      not null
        primary key,
    contenido longblob                         not null,
    tipo      varchar(30) default 'image/png' null,
    constraint juegoswiicovers_codigo_uindex
        unique (codigo)
);
