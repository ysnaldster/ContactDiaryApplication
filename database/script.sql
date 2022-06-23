CREATE DATABASE contact_diary_application_db;

CREATE TABLE contact(
  id_contact INT(11) PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(60) NOT NULL,
  phone VARCHAR(60) NOT NULL,
  date date, 
  address VARCHAR(100),
  email VARCHAR(80),
  age INT(11)
);
