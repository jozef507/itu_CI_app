drop database if exists apka ;
create database apka;

create table KulturneDielo
(
	ID_KulturneDielo int not null auto_increment,
    Nazov varchar(30) not null ,
    Typ varchar(30),
    Zaner varchar(30),
    Ucinkujuci varchar(100),
    primary key (ID_KulturneDielo)
);

INSERT INTO KulturneDielo(Nazov, Typ, Zaner, Ucinkujuci) VALUES ('Ako islo vajce na vadrovku', 'Film', 'Akčný', 'Maroš Kramar, Elizabet Watsnova');
INSERT INTO KulturneDielo(Nazov, Typ, Zaner, Ucinkujuci) VALUES ('Vo štvorici po opici 1', 'Film', 'Komédia', 'Angelin Jolie, Morgan Freeman');
INSERT INTO KulturneDielo(Nazov, Typ, Zaner, Ucinkujuci) VALUES ('Obchod storočia', 'Predstavenie', 'Dráma', 'Jano Kolenik, Jano Folenta');
