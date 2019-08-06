CREATE DATABASE pondokit;

USE pondokIT;

CREATE TABLE santri (
    id int AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(255),
    AGE int,
    BIRTH_PLACE VARCHAR(255),
    BIRTH_DATE VARCHAR(255),
    HOBBY VARCHAR(255));

INSERT INTO santri(
    NAMA, 
    AGE, 
    BIRTH_PLACE, 
    BIRTH_DATE, 
    HOBBY) 

VALUES(
        'Arif Wardan',
        '20',
        'Riau',
        '11-10-1999' , 
        'Martial Art'
    ),(
        'Udin', 
        '23', 
        'Purwokerto', 
        '23-22-1997' , 
        'Membaca'
    ),(
        'Ucil', 
        '21', 
        'Palembang', 
        '02-12-1998', 
        'Desain'
    ),(
        'Acil', 
        '19', 
        'Jambi', 
        '20-15-2000', 
        'Makan Coklat');

