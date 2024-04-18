insert into user(nom,email,pwd,profil,telephone,etat) 
values('SURSA User','kharizimo@gmail.com','1234567','s-admin','000000','actif');

insert into ets(lib) values('DGM');
insert into ets(lib) values('PNHF');
insert into ets(lib) values('ANR');
insert into ets(lib) values('Présidence');
insert into ets(lib) values('Ministère de la Santé');


INSERT INTO villes (LIB, PROVINCE) VALUES ('KINSHASA', 'KINSHASA');
INSERT INTO villes (LIB, PROVINCE) VALUES ('MBUJIMAYI', 'KASAI ORIENTAL');
INSERT INTO villes (LIB, PROVINCE) VALUES ('LUBUMBASHI', 'HAUT-KATANGA');
INSERT INTO villes (LIB, PROVINCE) VALUES ('KANANGA', 'KASAI CENTRAL');
INSERT INTO villes (LIB, PROVINCE) VALUES ('KISANGANI', 'TSHOPO');
INSERT INTO villes (LIB, PROVINCE) VALUES ('GOMA', 'NORD-KIVU');
INSERT INTO villes (LIB, PROVINCE) VALUES ('BUKAVU', 'SUD-KIVU');
INSERT INTO villes (LIB, PROVINCE) VALUES ('TSHIKAPA', 'KASAI');
INSERT INTO villes (LIB, PROVINCE) VALUES ('KOLWEZI', 'LUALABA');
INSERT INTO villes (LIB, PROVINCE) VALUES ('LIKASI', 'HAUT-KATANGA');
INSERT INTO villes (LIB, PROVINCE) VALUES ('KIKWIT', 'KWILU');
INSERT INTO villes (LIB, PROVINCE) VALUES ('UVIRA', 'SUD-KIVU');
INSERT INTO villes (LIB, PROVINCE) VALUES ('BUNIA', 'ITURI');
INSERT INTO villes (LIB, PROVINCE) VALUES ('KALEMIE', 'TANGANYIKA');
INSERT INTO villes (LIB, PROVINCE) VALUES ('MBANDAKA', 'EQUATEUR');
INSERT INTO villes (LIB, PROVINCE) VALUES ('MATADI', 'KONGO CENTRAL');
INSERT INTO villes (LIB, PROVINCE) VALUES ('KABINDA', 'LOMAMI');
INSERT INTO villes (LIB, PROVINCE) VALUES ('BUTEMBO', 'NORD-KIVU');
INSERT INTO villes (LIB, PROVINCE) VALUES ('BARAKA', 'SUD-KIVU');
INSERT INTO villes (LIB, PROVINCE) VALUES ('MWENE-DITU', 'LOMAMI');
INSERT INTO villes (LIB, PROVINCE) VALUES ('ISIRO', 'HAUT-UELE');
INSERT INTO villes (LIB, PROVINCE) VALUES ('KINDU', 'MANIEMA');
INSERT INTO villes (LIB, PROVINCE) VALUES ('BOMA', 'KONGO CENTRAL');
INSERT INTO villes (LIB, PROVINCE) VALUES ('KAMINA', 'HAUT-LOMAMI');
INSERT INTO villes (LIB, PROVINCE) VALUES ('GANDAJIKA', 'LOMAMI');
INSERT INTO villes (LIB, PROVINCE) VALUES ('BANDUNDU', 'KWILU');
INSERT INTO villes (LIB, PROVINCE) VALUES ('GEMENA', 'SUD-UBANGI');
INSERT INTO villes (LIB, PROVINCE) VALUES ('KIPUSHI', 'HAUT-KATANGA');
INSERT INTO villes (LIB, PROVINCE) VALUES ('BUMBA', 'MONGALA');
INSERT INTO villes (LIB, PROVINCE) VALUES ('MBANZA-NGUNGU', 'KONGO CENTRAL');
INSERT INTO villes (LIB, PROVINCE) VALUES ('BENI', 'NORD-KIVU');
INSERT INTO villes (LIB, PROVINCE) VALUES ('ZONGO', 'SUD-UBANGI');
INSERT INTO villes (LIB, PROVINCE) VALUES ('GBADOLITE', 'NORD-UBANGI');
INSERT INTO villes (LIB, PROVINCE) VALUES ('INONGO', 'MAI-NDOMBE');
INSERT INTO villes (LIB, PROVINCE) VALUES ('BOENDE', 'TSHUAPA');
INSERT INTO villes (LIB, PROVINCE) VALUES ('BUTA', 'BAS-UELE');



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