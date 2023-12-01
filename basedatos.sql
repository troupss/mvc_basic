
CREATE DATABASE notes_master;
use notes_master;

CREATE TABLE usuaris(
    id int(255) auto_increment not null,
    nom varchar(255) not null,
    cognom varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    data date not null,
    CONSTRAINT pk_usuaris PRIMARY KEY (id),
    CONSTRAINT u1_email UNIQUE (email)
)ENGINE=InnoDb;

CREATE TABLE notes(
    id int(255) auto_increment not null,
    usuari_id int(255) not null,
    titol varchar(255) not null,
    descripcio MEDIUMTEXT,
    data date not null,
    CONSTRAINT pk_entrada PRIMARY KEY (id),
    CONSTRAINT fk_entrada_usuari FOREIGN KEY (usuari_id) REFERENCES usuaris(id)
)ENGINE=InnoDb;
