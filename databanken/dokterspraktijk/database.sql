CREATE TABLE gemeentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(100) NOT NULL,
    postcode VARCHAR(10) NOT NULL
);

INSERT INTO gemeentes (naam, postcode) VALUES
('Brussel', '1000'),
('Antwerpen', '2000'),
('Gent', '9000'),
('Leuven', '3000');

CREATE TABLE aandoeningen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(255) NOT NULL,
    beschrijving TEXT
);

INSERT INTO aandoeningen (naam, beschrijving) VALUES
('Griep', 'Een virale infectie die de luchtwegen aantast.'),
('Diabetes', 'Een chronische aandoening die de bloedsuikerspiegel beïnvloedt.'),
('Hypertensie', 'Hoge bloeddruk die het risico op hartziekten verhoogt.');

CREATE TABLE bloedgroepen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(3) NOT NULL
);

INSERT INTO bloedgroepen (type) VALUES
('A+'),('A-'),('B+'),('B-'),('AB+'),('AB-'),('O+'),('O-');

CREATE TABLE patienten (
    id INT AUTO_INCREMENT PRIMARY KEY,
    voornaam VARCHAR(100) NOT NULL,
    achternaam VARCHAR(100) NOT NULL,
    geboortedatum DATE NOT NULL,
    gemeente_id INT,
    bloedgroep_id INT,
    FOREIGN KEY (bloedgroep_id) REFERENCES bloedgroepen(id),
    FOREIGN KEY (gemeente_id) REFERENCES gemeentes(id)
);

INSERT INTO patienten (voornaam, achternaam, geboortedatum, gemeente_id, bloedgroep_id) VALUES
('Bert', 'Lempens', '1985-11-21', 1, 1),
('Jan', 'Janssens', '1980-05-15', 1, 1),
('Marie', 'Peeters', '1990-08-22', 2, 5),
('Karel', 'De Smet', '1975-12-30', 3, 3);

CREATE TABLE consultaties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    datum DATETIME NOT NULL,
    aandoening_id INT,
    notities TEXT,
    FOREIGN KEY (aandoening_id) REFERENCES aandoeningen(id),
    FOREIGN KEY (patient_id) REFERENCES patienten(id)
);

INSERT INTO consultaties (patient_id, datum, aandoening_id, notities) VALUES
(1, '2024-01-10 10:00:00', 1, 'Patiënt vertoont symptomen van griep.'),
(2, '2024-02-15 14:30:00', 2, 'Regelmatige controle voor diabetes.'),
(3, '2024-03-20 09:15:00', 3, 'Hoge bloeddruk gemeten, medicatie aangepast.'),
(4, '2024-04-25 11:45:00', 1, 'Griepvaccinatie toegediend.');
