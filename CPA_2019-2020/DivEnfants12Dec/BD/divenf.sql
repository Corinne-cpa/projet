/* Testé sous MySQL 5.x */

CREATE DATABASE IF NOT EXISTS `divenf` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `divenf`;

drop table if exists T_PARENT;
drop table if exists T_ENFANT;
drop table if exists T_JEUX;
drop table if exists T_ORGJEUX;
drop table if exists T_PARTICIPE;
drop table if exists T_ADMIN;

create table T_PARENT (
  PARENT_ID integer primary key auto_increment,
  PARENT_NOM varchar(30) not null,
  PARENT_PRENOM varchar(30) not null,
  PARENT_ADRESSE varchar(100) not null,
  PARENT_TEL varchar(50) not null,
  PARENT_EMAIL varchar(50) not null,
  PARENT_MDP varchar(10) not null
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table T_ENFANT (
  ENFANT_ID integer primary key auto_increment,
  ENFANT_NOM varchar(30) not null,
  ENFANT_PRENOM varchar(30) not null,
  ENFANT_DN datetime not null,
  ENFANT_PARENT integer not null,
  constraint fk_pa foreign key(ENFANT_PARENT) references T_PARENT(PARENT_ID)
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table T_JEUX (
  JEUX_ID integer primary key auto_increment,
  JEUX_NOM varchar(100) not null,
  JEUX_AGE_MIN integer not null,
  JEUX_AGE_MAX integer not null    
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table T_ORGJEUX (
  ORGJEUX_ID integer primary key auto_increment,
  ORGJEUX_JEUX integer  not null,
  ORGJEUX_DATE datetime not null,
constraint fk_jeux foreign key(ORGJEUX_JEUX) references T_JEUX(JEUX_ID)   
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table T_PARTICIPE (
  PARTICIPE_ID integer primary key auto_increment,
  PARTICIPE_ENF integer not null,
  PARTICIPE_ORG integer not null,
  constraint fk_enf foreign key(PARTICIPE_ENF) references T_ENFANT(ENFANT_ID),    
  constraint fk_org foreign key(PARTICIPE_ORG) references T_ORGJEUX(ORGJEUX_ID)    
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table T_ADMIN (
  ADMIN_ID integer primary key auto_increment,
  ADMIN_LOGIN varchar(10) not null,
  ADMIN_PWD varchar(10) not null
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;
