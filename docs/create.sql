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
    etat varchar(100) default 'En attente',
    dat_creat datetime default current_timestamp,
    dat_edit datetime default current_timestamp on update current_timestamp
);
drop table if exists piece_identite;
create table piece_identite(
    id int auto_increment primary key,
    lib varchar(100)
);
drop table if exists ident_vuser;
create table ident_vuser(
    id int references piece_identite(id),
    id_vuser int references vuser(id),
    numero varchar(100),
    date_creat datetime default current_timestamp,
    primary key(id,id_vuser)
);
drop table if exists voyage;
create table voyage(
    id int auto_increment primary key,
    id_vuser int,
    lib_ident varchar(100),
    numero_ident varchar(100),
    mvt varchar(100),
    date_voyage date,
    moyen_transport varchar(100),
    compagnie varchar(100),
    n_voyage varchar(100),
    n_siege varchar(100),
    pays_provenance varchar(100),
    pays_destination varchar(100),
    province_actuelle varchar(100),
    ville_actuelle varchar(100),
    province_destination varchar(100),
    ville_destination varchar(100),
    fievre boolean,
    grippe boolean,
    toux boolean,
    difficulte_respiratoire boolean,
    assurance_maladie boolean,
    autres_symptomes text,
    contact_nom varchar(100),
    contact_telephone varchar(100),
    acdresse text,
    lang varchar(100),
    id_valid int,
    date_valid datetime,
    etat_valid varchar(100) default '',
    id_verif int,
    date_verif datetime,
    etat_verif varchar(100) default '',
    date_creat datetime default current_timestamp,
    token_code text,
    token_exp datetime,
    etat varchar(100) default 'En attende'
);