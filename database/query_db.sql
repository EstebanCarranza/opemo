-- create database db_opemo;
/*
use db_opemo;
create table tbl_pais
(
    idPais int not null primary key auto_increment,
    titulo varchar(100) not null
);
create table tbl_estado
(
    idEstado int not null primary key auto_increment,
    titulo varchar(100) not null,
    idPais int not null,

    foreign key (idPais) references tbl_pais(idPais)
);
create table tbl_ciudad
(
    idCiudad int not null primary key auto_increment,
    titulo varchar(100) not null,
    idEstado int not null,

    foreign key (idEstado) references tbl_estado(idEstado)
);
create table tbl_usuario
(
	idUsuario int not null primary key auto_increment,
    alias text,
    nombre text,
    apellido_pat text,
    correo text,
    contrasenia text,
    pathAvatar text,
    pathPortada text,
    bio text,
    fechaNacimiento date,
    tokenRecuperacion text,
    fechaRegistro timestamp default current_timestamp,
    bloqueado boolean
);
create table tbl_ubicacion
(
    idUbicacion int not null primary key auto_increment,
    titulo varchar(100) not null,
    descripcion text,
    idCiudad int not null,

    foregin key (idCiudad) references tbl_ciudad(idCiudad)
);
create table tbl_publicacionEstado
(
    idPublicacionEstado int not null primary key auto_increment,
    titulo text
--  estado enum('BORRADOR','PUBLICADO','REPORTADO', 'RECLAMADO', 'FINALIZADO-CORRECTO', 'FINALIZADO-INCORRECTO','CANCELADO')

);
create table tbl_publicacion
(
    idPublicacion int not null primary key auto_increment,
    titulo varchar(100) not null,
    pathImgVideo text,
    fecha date default now(),
    hora time default now(),
    idUbicacion int not null,
    idMunicipio int not null,
    descripcion text,
    idPublicacionEstado int not null,
    
    foreign key (idUbicacion) references tbl_ubicacion (idUbicacion),
    foreign key (idMunicipio) references tbl_municipio (idMunicipio),
    foreign key (idPublicacionEstado) references tbl_publicacionEstado (idPublicacionEstado)
    
);
create table tbl_puntuacion
(
    idPuntuacion int not null primary key auto_increment,
    idPublicacion int not null,
    idUsuario int not null,
    puntuacion enum(1,2,3,4,5),

    foreign key (idPublicacion) references tbl_publicacion(idPublicacion)
    foreign key (idUsuario) references tbl_usuario(idUsuario)
);
create table tbl_recuperado
(
    idRecuperado int not null primary key auto_increment,
    idUsuario int not null,
    titulo varchar(100) not null,
    pathImgVideo text,
    fecha date default now(),
    hora time default now(),
    idUbicacion int not null,
    idMunicipio int not null,
    descripcion text,

    foreign key (idUbicacion) references tbl_ubicacion (idUbicacion),
    foreign key (idMunicipio) references tbl_municipio (idMunicipio)
);
create table tbl_mensajes
(
    idMensajes int not null primary key auto_increment,
    idUsuario int not null,
    idPublicacion int not null,
    mensaje text,
    fecha timestamp default current_timestamp,

    foreign key (idUsuario) references tbl_usuario(idUsuario),
    foregin key (idPublicacion) references tbl_publicacion(idPublicacion)
);
create table tbl_razonReporte
(
    idRazonReporte int not null primary key auto_increment,
    titulo text
);
create table tbl_publicacionReportada
(
    idPublicacionReportada int not null primary key auto_increment,
    idPublicacion int not null,
    fecha timestamp default current_timestam,
    idRazonReporte int not null
);
create table tbl_comentario
(
    idComentario int not null primary key auto_increment,
    idUsuario int not null,
    idPublicacion int not null,
    fecha timestamp default current_timestamp
);
*/