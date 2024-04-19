drop view if exists user_target;
create view user_target as 
select id,CONCAT(nom,' ',postnom,' ',prenom) noms,sexe,telephone,autre_piece,num_passeport,
groupe_sanguin,date_nais,email,poids,taille,nationalite,photo,
(select etat from target t where t.v_user=v.id limit 1) etat
 from v_user v;

drop view if exists v_target;
create view v_target as 
select id,v_user, noms,
sexe,telephone,autre_piece,num_passeport,
fields, etat,procedures,demandeur,raison,
id_creat,id_valid,id_abort,
date_creat,date_valid,date_abort,
if(v_user is null,'img/avatar/0.png',(select photo from v_user v where v.id=t.v_user limit 1)) photo
from target t;

drop view if exists profil_dernier_mvt;
create view profil_dernier_mvt as
SELECT 
u.id id,u.nom,u.postnom,u.prenom,u.nationalite,u.date_nais,
u.num_passeport,u.sexe, 
v.date_creat date_mvt,
mvt,groupe_sanguin,u.photo,
v.province_actuelle province,
v.province_destination province_dest,
v.ville_actuelle ville,
v.ville_destination ville_dest,
v.pays_visite pays,
v.pays_destination pays_dest,
p.lib lib_poste,
nom_contact,
telephone_contact,
voie_transport,
compagnie,n_siege,
u.telephone
FROM
v_user u JOIN voyage v ON v.id=v.id_v_user
left join user on user.id=v.id_valid
left join poste p on p.id=user.id_poste
ORDER BY v.id desc;

drop view if exists profil_voyageur;
create view profil_voyageur as
SELECT 
u.id id,u.nom,u.postnom,u.prenom,u.nationalite,u.sexe,
u.groupe_sanguin,taille,poids,u.date_nais,
u.num_passeport,
u.autre_piece,u.type_piece,
email,telephone,photo
FROM v_user u ;

drop view if exists profils_voyageurs_photo;
create view profils_voyageurs_photo as 
select u.id,concat(u.nom,' ',u.postnom,' ',u.prenom) noms,u.nationalite,u.sexe,u.groupe_sanguin,
u.taille,u.poids,u.date_nais,u.num_passeport,u.telephone,u.email,u.photo
from v_user u;

drop view if exists mouvement_voyageurs;
create view mouvement_voyageurs as 
select u.id,v.date_voyage,concat(u.nom,' ',u.postnom,' ',u.prenom) noms,
v.mvt,v.pays_visite pays,v.province_actuelle province,v.province_destination province_dest,
v.ville_actuelle ville,v.ville_destination ville_dest,
p.lib lib_poste,v.nom_contact,v.telephone_contact,v.compagnie,v.adresse,
v.n_transport,v.n_siege,u.photo
from v_user u
join voyage v on v.id_v_user=u.id 
left join user on user.id=v.id_verif
left join poste p on p.id=user.id_poste;

drop view if exists v_archive_photo;
create view v_archive_photo as 
select a.*,concat(nom,' ',postnom,' ',prenom) lib from archive_photo a 
join v_user v on a.v_user=v.id;

drop view if exists v_archive_field;
create view v_archive_field as 
select a.*,concat(nom,' ',postnom,' ',prenom) lib from archive_field a 
join v_user v on a.v_user=v.id;