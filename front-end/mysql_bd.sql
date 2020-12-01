CREATE TABLE Threads (
    id SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(255) NOT NULL,
    author VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
    text TEXT NOT NULL,
    categorie TEXT NOT NULL,
    date DATETIME NOT NULL,
    UNIQUE(subject)
);

CREATE TABLE Messages (
    id MEDIUMINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    thread SMALLINT UNSIGNED NOT NULL,
    subject VARCHAR(60) NOT NULL DEFAULT "Pas de sujet",
    date DATETIME NOT NULL,
    author VARCHAR(60) NOT NULL DEFAULT "Mr. personne",
    email VARCHAR(60) NOT NULL DEFAULT "vive@linux.lemonde",
    text TEXT NOT NULL
);


/*
TABLE "f_categories":

    id => int(11)
    nom => varchar(255)

TABLE "f_sous-categories":

    id => int(11)
    id_categorie => int(11)
    nom => varchar(255)

TABLE "f_topics":

    id => int(11)
    id_createur => int(11)
    sujet (ou titre) => text
    contenu => text
    date-heure-creation => datetime
    resolu => boolean
    notif_createur => boolean

TABLE "f_topics-categorie":

    id => int(11)
    id_topic => int(11)
    id_categorie => int(11)
    id_souscategorie => int(11)

TABLE "f_messages":

    id => int(11)
    id_topic => int(11)
    id_posteur => int(11)
    date_heure_post => datetime
    date_heure_edition => datetime (date et heure de la dernière édition)
    meilleure_reponse => int(1) (boolean true ou false, 1 ou 0)
    contenu => text

TABLE "f_suivis":

    id => int(11)
    id_user => int(11)
    id_topic => int(11)

*/