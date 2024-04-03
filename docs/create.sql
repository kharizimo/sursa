drop database if exists sursa;
create database sursa;
use sursa;

drop table if exists vuser;
create table vuser(
    id int auto_increment primary key,
    email varchar(100) unique,
    pwd varchar(100),
    nom varchar(100),
    prenom varchar(100),
    postnom varchar(100),
    nationalite varchar(100),
    sexe varchar(100),
    groupe_sanguin varchar(100),
    taille varchar(100),
    poids varchar(100),
    date_nais date,
    telephone varchar(100),
    passeport varchar(100),
    identite varchar(100),
    t_identite varchar(100),
    photo varchar(100),
    dat_creat datetime default current_timestamp,
    dat_edit datetime default current_timestamp on update current_timestamp
);
drop table if exists piece_identite;
create table piece_identite(
    id int auto_increment primary key,
    lib varchar(100)
);
drop table if exists identite_vuser;
create table identite_vuser(
    id int(10) auto_increment primary key,
    lib varchar(100),
    id_vuser int references vuser(id),
    id_identite int references piece_identite(id)
);