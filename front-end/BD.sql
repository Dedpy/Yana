Personne :
    id
    nom
    prenom
    tel
    email
    login
    password
            Patient : 
                dn_patient
""
            Doctor :
                diplome
/*BLOG*/
    Questions : 
        id_question
        sujet_question
        message_question
        date_question
        categorie_question
        #id /*Patient*/
    Reponse :
        id_reponse
        message_reponse
        date_reponse
        #id
        #id_question
/*RENDEZ-VOUS*/
        rendezvous :
            id_rendezvous
            date_rendezvous
            heure_rendezvous
            id_patient
            id_medecin

        hitorique_consultation :
            id_historique_consultation
            description_consultation
            #id_rendezvous
/*Reclamation*/
    reclamation :
        id_reclamation 
        message_reclamation
