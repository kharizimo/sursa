-- truncate user;
-- insert into user(pseudo,nom,pwd) values('kh','Trésor','');
-- insert into user(pseudo,nom,pwd) values('oliva','Olivier','');
-- insert into user(pseudo,nom,pwd) values('ddn','Dieudonné','');

truncate v_user;
insert into vuser(email,pwd,nom,postnom,prenom,sexe,nationalite) values(
    'me@you.com',sha1(''),'BALONGA','MASIALA','Matthieu','M','République Démocratique du Congo'
);

truncate piece_identite;
insert into piece_identite(lib) values
('Passeport ordinaire'),
('Passeport de service'),
('Passeport diplomatique'),
('Carte d''electeur'),
('Permis de conduire');
