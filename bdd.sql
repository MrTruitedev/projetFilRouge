create database projet;
use projet;

create table utilisateurs
(
	id_util int auto_increment primary key not null,
    nom_util varchar(50),
    prenom_util varchar(50),
    mail_util varchar(50),
    mdp_util varchar(100),
    tel_util int,
    id_fam_util int
)engine=InnoDB;

create table famille_util
(
	id_fam_util int auto_increment primary key not null,
    nom_fam_util varchar(50)
)engine=InnoDB;

create table artiste
(
	id_artiste int auto_increment primary key not null,
    nom_scene_artiste varchar(50),
    photo_profil_artiste varchar (50),
    photo_couv_artiste varchar(50),
    bio_artiste text,
    concert_passes_artiste text,
    repertoire_artiste text,
    id_factur int,
    id_fam_util int
)engine=InnoDB;

create table alert
(
	id_alert int primary key auto_increment not null,
    nom_alert varchar(50),
    date_alert date,
    type_alert varchar(50),
    id_artiste int,
    id_orga int
)engine=InnoDB;

create table organisateurs
(
	id_orga int primary key auto_increment not null,
    categorie_orga varchar(50),
    photo_profil_orga varchar(50),
    id_fam_util int
)engine=InnoDB;

create table evenement
(
	id_event int auto_increment primary key not null,
    lieu_event varchar(50),
    date_event date,
    materiel_event bool,
    id_type_event int,
    id_orga int
)engine=InnoDB;

create table affecter
(
	id_artiste int,
    id_type_event int,
    primary key(id_artiste, id_type_event)
)engine=InnoDB;

create table type_event
(
	id_type_event int primary key auto_increment not null,
    nom_type_event varchar(50)
)engine=InnoDB;

create table postuler
(
	id_artiste int,
    id_event int,
    primary key(id_artiste, id_event)
)engine=InnoDB;

create table obtenir 
(
	id_style int,
    id_event int,
    primary key(id_style, id_event)
)engine=InnoDB;
    
create table style
(
	id_style int auto_increment primary key not null,
    nom_style varchar(50)
)engine=InnoDB;

create table posseder
(
	id_artiste int,
    id_style int,
    primary key(id_artiste, id_style)
)engine=InnoDB;

create table facturation
(
	id_factur int primary key auto_increment not null,
    nom_factur varchar(50)
)engine=InnoDB;

alter table affecter
add constraint fk_affecter_artiste
foreign key (id_artiste)
references artiste(id_artiste);

alter table affecter
add constraint fk_affecter_type_event
foreign key (id_type_event)
references type_event(id_type_event);

alter table postuler
add constraint fk_postuler_artiste
foreign key (id_artiste)
references artiste(id_artiste);

alter table postuler
add constraint fk_postuler_event
foreign key (id_event)
references evenement(id_event);

alter table posseder
add constraint fk_posseder_artiste
foreign key (id_artiste)
references artiste(id_artiste);

alter table posseder
add constraint fk_posseder_style
foreign key (id_style)
references style(id_style);

alter table obtenir
add constraint fk_obtenir_style
foreign key (id_style)
references style(id_style);

alter table obtenir
add constraint fk_obtenir_event
foreign key (id_event)
references evenement(id_event);

alter table utilisateurs
add constraint fk_appartenir_fam_util
foreign key (id_fam_util)
references famille_util(id_fam_util);

alter table artiste
add constraint fk_correspondre_fam_util
foreign key (id_fam_util)
references famille_util(id_fam_util);

alter table artiste
add constraint fk_choisir_factur
foreign key (id_factur)
references facturation(id_factur);

alter table alert
add constraint fk_etablir_alert
foreign key (id_artiste)
references artiste(id_artiste);

alter table alert
add constraint fk_produire_alert
foreign key (id_orga)
references organisateurs(id_orga);

alter table organisateurs
add constraint fk_contenir_fam_util
foreign key (id_fam_util)
references famille_util(id_fam_util);

alter table evenement
add constraint fk_creer_evenement
foreign key (id_orga)
references organisateurs(id_orga);

alter table evenement
add constraint fk_avoir_type_event
foreign key (id_type_event)
references type_event(id_type_event);