-- list of participants
CREATE TABLE event_members (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(80) NOT NULL,
lastname VARCHAR(80) NOT NULL,
email VARCHAR(60) NOT NULL,
age INT,
gender CHAR,
phone CHAR(25),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

insert into event_members values (DEFAULT,'Mariano','Randriamanjaka','mariano@gmail.com','22','H','0333514511',DEFAULT);

ALTER TABLE event_members ADD COLUMN ev_state INT DEFAULT 1;
ALTER TABLE event_members ADD COLUMN payment INT DEFAULT 0;


CREATE VIEW membres as SELECT id,firstname,lastname,email,age,gender,phone,reg_date,
CASE
    WHEN payment > 0 THEN "payé"
    ELSE "non payé"
END as payment
FROM `event_members` WHERE ev_state = 1

CREATE VIEW membres_invalides as SELECT id,firstname,lastname,email,age,gender,phone,reg_date,
CASE
    WHEN payment > 0 THEN "payé"
    ELSE "non payé"
END as payment
FROM `event_members` WHERE ev_state = 0


CREATE VIEW membre_paiement_valide as select * from membres where payment = "payé"