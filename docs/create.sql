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
    identites json default '{}',
    photo varchar(100),
    etat varchar(100) default 'En attente',
    dat_creat datetime default current_timestamp,
    dat_edit datetime default current_timestamp on update current_timestamp
);
drop table if exists identite_lib;
create table identite_lib(
    id int auto_increment primary key,
    lib varchar(100)
);
drop table if exists voyage;
create table voyage(
    id int auto_increment primary key,
    id_vuser int,
    lib_identite varchar(100),
    num_identite varchar(100),
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
    adresse text,
    lang varchar(100),
    id_valid int,
    date_valid datetime,
    etat_valid boolean default false,
    id_verif int,
    date_verif datetime,
    etat_verif boolean default false,
    id_annul int,
    date_annul datetime,
    etat_annul boolean default false,
    date_creat datetime default current_timestamp,
    token_code text,
    token_exp datetime,
    etat varchar(100) default 'En attende'
);

-- USER TABLES
drop table if exists user;
create table user(
    id int auto_increment primary key,
    nom varchar(100),
    email varchar(100),
    pwd varchar(100),
    telephone varchar(100),
    id_poste int,
    id_ets int,
    stategies json default '{}',
    profil varchar(100),
    etat varchar(100)
);
drop table if exists poste;
create table poste(
    id int auto_increment primary key,
    lib varchar(100),
    province varchar(100),
    po varchar(100),
    flux varchar(100)
);
drop table if exists ets;
create table ets(
    id int auto_increment primary key,
    lib varchar(100)
);
drop table if exists ville;
create table ville(
    id int auto_increment primary key,
    lib varchar(100),
    province varchar(100)
);
drop table if exists strategie_lib;
create table strategie_lib(
    code varchar(100) primary key,
    lib varchar(100)
);
drop table if exists archive_photo;
create table archive_photo(
    id int auto_increment primary key,
    id_vuser int references vuser(id),
    photo varchar(100),
    date_creat datetime default current_timestamp
);
drop table if exists archive_info;
create table archive_info(
    id int auto_increment primary key,
    id_vuser int references vuser(id),
    info json default '{}',
    date_creat datetime default current_timestamp
);
drop table if exists target;
create table target(
    id int auto_increment primary key,
    id_vuser int,
    id_target int,
    date_target datetime,
    id_untarget int,
    date_untarget datetime,
    id_link int,
    date_link datetime,
    nom varchar(100),
    sexe varchar(100),
    email varchar(100),
    telephone varchar(100),
    date_nais date,
    identite json default '{}',
    etat varchar(100) default'Actif',
    date_creat datetime default current_timestamp
);
create table target(
    id int auto_increment primary key,
    id_vuser int,
    nom varchar(100),
    postnom varchar(100),
    prenom varchar(100),
    telephone varchar(100),
    date_nais date,
    num_identite varchar(100),
    qualite varchar(100),
    employeur varchar(100),
    demandeur varchar(100),
    id_targeter int,
    date_target datetime default current_timestamp,
    id_untargeter int,
    date_untarget datetime,
    procedure text

)
