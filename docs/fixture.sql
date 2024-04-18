 truncate user;
 insert into user(email,nom,pwd,id_ets,id_poste) values('kh','Trésor','',1,1);
-- insert into user(pseudo,nom,pwd) values('oliva','Olivier','');
-- insert into user(pseudo,nom,pwd) values('ddn','Dieudonné','');

truncate v_user;
insert into vuser(email,pwd,nom,postnom,prenom,sexe,nationalite) values(
    'me@you.com',sha1(''),'BALONGA','MASIALA','Matthieu','M','République Démocratique du Congo'
);

truncate identite_lib;
insert into identite_lib(lib) values
('Passeport ordinaire'),
('Passeport de service'),
('Passeport diplomatique'),
('Carte d''electeur'),
('Permis de conduire');

truncate ets;
insert into ets(lib) values('DGM');
insert into ets(lib) values('PNHF');
insert into ets(lib) values('ANR');
insert into ets(lib) values('Présidence');
insert into ets(lib) values('Ministère de la Santé');

INSERT INTO ville (LIB, PROVINCE) VALUES ('KINSHASA', 'KINSHASA');
INSERT INTO ville (LIB, PROVINCE) VALUES ('MBUJIMAYI', 'KASAI ORIENTAL');
INSERT INTO ville (LIB, PROVINCE) VALUES ('LUBUMBASHI', 'HAUT-KATANGA');
INSERT INTO ville (LIB, PROVINCE) VALUES ('KANANGA', 'KASAI CENTRAL');
INSERT INTO ville (LIB, PROVINCE) VALUES ('KISANGANI', 'TSHOPO');
INSERT INTO ville (LIB, PROVINCE) VALUES ('GOMA', 'NORD-KIVU');
INSERT INTO ville (LIB, PROVINCE) VALUES ('BUKAVU', 'SUD-KIVU');
INSERT INTO ville (LIB, PROVINCE) VALUES ('TSHIKAPA', 'KASAI');
INSERT INTO ville (LIB, PROVINCE) VALUES ('KOLWEZI', 'LUALABA');
INSERT INTO ville (LIB, PROVINCE) VALUES ('LIKASI', 'HAUT-KATANGA');
INSERT INTO ville (LIB, PROVINCE) VALUES ('KIKWIT', 'KWILU');
INSERT INTO ville (LIB, PROVINCE) VALUES ('UVIRA', 'SUD-KIVU');
INSERT INTO ville (LIB, PROVINCE) VALUES ('BUNIA', 'ITURI');
INSERT INTO ville (LIB, PROVINCE) VALUES ('KALEMIE', 'TANGANYIKA');
INSERT INTO ville (LIB, PROVINCE) VALUES ('MBANDAKA', 'EQUATEUR');
INSERT INTO ville (LIB, PROVINCE) VALUES ('MATADI', 'KONGO CENTRAL');
INSERT INTO ville (LIB, PROVINCE) VALUES ('KABINDA', 'LOMAMI');
INSERT INTO ville (LIB, PROVINCE) VALUES ('BUTEMBO', 'NORD-KIVU');
INSERT INTO ville (LIB, PROVINCE) VALUES ('BARAKA', 'SUD-KIVU');
INSERT INTO ville (LIB, PROVINCE) VALUES ('MWENE-DITU', 'LOMAMI');
INSERT INTO ville (LIB, PROVINCE) VALUES ('ISIRO', 'HAUT-UELE');
INSERT INTO ville (LIB, PROVINCE) VALUES ('KINDU', 'MANIEMA');
INSERT INTO ville (LIB, PROVINCE) VALUES ('BOMA', 'KONGO CENTRAL');
INSERT INTO ville (LIB, PROVINCE) VALUES ('KAMINA', 'HAUT-LOMAMI');
INSERT INTO ville (LIB, PROVINCE) VALUES ('GANDAJIKA', 'LOMAMI');
INSERT INTO ville (LIB, PROVINCE) VALUES ('BANDUNDU', 'KWILU');
INSERT INTO ville (LIB, PROVINCE) VALUES ('GEMENA', 'SUD-UBANGI');
INSERT INTO ville (LIB, PROVINCE) VALUES ('KIPUSHI', 'HAUT-KATANGA');
INSERT INTO ville (LIB, PROVINCE) VALUES ('BUMBA', 'MONGALA');
INSERT INTO ville (LIB, PROVINCE) VALUES ('MBANZA-NGUNGU', 'KONGO CENTRAL');
INSERT INTO ville (LIB, PROVINCE) VALUES ('BENI', 'NORD-KIVU');
INSERT INTO ville (LIB, PROVINCE) VALUES ('ZONGO', 'SUD-UBANGI');
INSERT INTO ville (LIB, PROVINCE) VALUES ('GBADOLITE', 'NORD-UBANGI');
INSERT INTO ville (LIB, PROVINCE) VALUES ('INONGO', 'MAI-NDOMBE');
INSERT INTO ville (LIB, PROVINCE) VALUES ('BOENDE', 'TSHUAPA');
INSERT INTO ville (LIB, PROVINCE) VALUES ('BUTA', 'BAS-UELE');

truncate poste;
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Aéroport int. De Njili', 'KINSHASA', 'PoE aérien', 'Aéroport international ');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Beach Ngobila ', 'KINSHASA', 'PoE fluvial', 'Trafic commercial important entre kinshasa et Brazzaville');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Frontière de Lufu ', 'KONGO-CENTRAL', 'PoE terrestre', 'Trafic commercial important entre kinshasa et Brazzaville');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Port de Matadi', 'KONGO-CENTRAL', 'PoE fluvial ', 'Trafic commercial important ');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Port de Boma', 'KONGO-CENTRAL', 'PoE fluvial', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Port de Banana (muanda)', 'KONGO-CENTRAL', 'PoE fluvial', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Aéroport int. De Luano', 'HAUT-KATANGA', 'PoE aérien', 'Aéroport international');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('kasumbalesa', 'HAUT-KATANGA', 'PoE terrestre ', 'Trafic commercial important avec la zambie');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Port de Kalemi', 'TANGANYIKA', 'PoE fluvial', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Maluku de kasongolunda', 'KWANGO', 'PoC terrestre', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('dhafudji de kayemba', 'KWANGO', 'PoC terrestre', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Aéroport  De bunia', 'ITURI', 'PoE aérien', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('mahagi', 'ITURI', 'PoC terrestre', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Tchomia ', 'ITURI', 'PoC terrestre', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Aru ', 'ITURI', 'PoC terrestre', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Aéro Goma Int', 'NORD-KIVU', 'PoE aérien', 'Aéroport international');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Frontière Grande barrière Goma', 'NORD-KIVU', 'PoE terresre', 'Trafic commercial important entre goma et rwanda');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Frontière de Kasindi-Ouganda', 'NORD-KIVU', 'PoE terresre', 'Trafic commercial important entre kasindi et l\'ouganda');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Frontière Petite barrière Goma', 'NORD-KIVU', 'PoE terresre', 'Trafic commercial important entre goma et rwanda');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Bunagana ', 'NORD-KIVU', 'Poc terrestre', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Kamanyola', 'SUD-KIVU', 'Port  ', 'Trafic commercial important avec le nord kivu ');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('KAVIMVIRA', 'SUD-KIVU', 'Port ', 'Trafic commercial important avec le nord kivu ');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Ruzizi 1', 'SUD-KIVU', 'Port ', 'Trafic commercial important avec le nord kivu ');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Ruzizi 2', 'SUD-KIVU', 'Port ', 'Trafic commercial important avec le nord kivu ');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Aéroport de Bangboka ', 'TSHOPO', 'PoE aérien', 'Trafic national et international');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('Tshikapa ', 'KASAI', 'Poc terrestre', 'Trafic commercial important');
INSERT INTO `poste` (`lib`, `province`, `po`, `flux`) VALUES ('kamako', 'KASAI', 'Poc terrestre', 'Trafic commercial important');