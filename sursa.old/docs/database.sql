-- sursax
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
drop table if exists user;
create table user(
    id int auto_increment primary key,
    nom varchar(100),
    email varchar(100),
    pwd varchar(100),
    profil varchar(100),
    telephone varchar(100),
    id_poste int,
    id_ets int,
    etat varchar(100),
    date_creat datetime default current_timestamp
);
drop table if EXISTS v_user;
create TABLE v_user(
    id int auto_increment primary key,
    nom varchar(100),
    postnom varchar(100),
    prenom varchar(100),
    sexe varchar(100),
    groupe_sanguin varchar(100),
    taille int,
    poids int,
    date_nais date,
    photo varchar(100),
    nationalite varchar(100),
    num_passeport varchar(100),
    autre_piece varchar(100),
    type_piece varchar(100),
    telephone varchar(100),
    email varchar(100),
    pwd varchar(100),
    etat varchar(100),
    date_creat datetime default current_timestamp,
    unique(email)
);
drop table if exists archive_photo;
create table archive_photo(
    id int auto_increment primary key,
    photo varchar(100),
    v_user int,
    date_creat datetime default current_timestamp
);
drop table if exists archive_field;
create table archive_field(
    id int auto_increment primary key,
    field json,
    v_user int,
    date_creat datetime default current_timestamp
);
drop table if exists target;
create table target(
    id int auto_increment primary key,
    v_user int,
    noms varchar(100),
    sexe varchar(100),
    telephone varchar(100),
    autre_piece varchar(100),
    num_passeport varchar(100),
    fields json,
    procedures text,
    demandeur varchar(100),
    raison varchar(100),
    id_creat int,
    id_valid int,
    id_abort int,
    etat varchar(100) default 'En attente',
    date_creat datetime default current_timestamp,
    date_valid datetime,
    date_abort datetime
);

drop table if exists voyage;
create table voyage(
    id int auto_increment primary key,
    id_v_user int,
    date_voyage date,
    pays_visite varchar(100),
    pays_destination varchar(100),
    province_actuelle varchar(100),
    province_destination varchar(100),
    ville_actuelle varchar(100),
    ville_destination varchar(100),
    voie_transport varchar(100),
    type_doc_voyage varchar(100),
    num_doc_voyage varchar(100),
    compagnie varchar(100),
    n_transport varchar(100),
    n_siege varchar(100),
    fievre varchar(100),
    sensation_fievre varchar(100),
    test_covid varchar(100),
    autres_symptomes varchar(100),
    toux varchar(100),
    difficultes_respiratoires varchar(100),
    assurance_maladie varchar(100),
    adresse varchar(100),
    nom_contact varchar(100),
    telephone_contact varchar(100),
    mvt varchar(100),
    lang varchar(100),
    code text, -- sha1
    id_valid int,
    id_verif int,
    date_valid int,
    date_verif int,
    etat_valid int,
    etat_verif int,
    date_exp datetime,
    date_creat datetime default current_timestamp
);
drop table if exists villes;
create table villes(
    id int auto_increment primary key,
    lib varchar(100),
    province varchar(100)
);
drop table if exists tokens;
create table tokens(
    n int auto_increment primary key,
    token varchar(100),
    id varchar(100),
    date_creat DATETIME DEFAULT current_timestamp, 
    date_exp DATETIME DEFAULT current_timestamp
);

drop table if exists validate;
create table validate(
    n int auto_increment primary key,
    obj varchar(100),
    email varchar(100),
    code varchar(100),
    id varchar(100),
    date_creat DATETIME DEFAULT current_timestamp, 
    date_exp DATETIME DEFAULT current_timestamp
);
drop table if exists super_code;
create table super_code(
    id int auto_increment primary key,
    code int,
    id_user int,
    date_creat datetime default current_timestamp,
    exp datetime null
);