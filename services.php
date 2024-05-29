<!DOCTYPE html>
<html lang="fr">

<?php
    include("html/entete.html");
?>

<html>
<!-- On appelle le fichier css  -->
<head>
	<meta charset="utf-8" />
	<title></title>
    <link href="css/style.css" rel="stylesheet" type="text/css"> 
</head>


<!-- On insère les éléments -->
<body>
      
    <h1>
        Les services proposés 
    </h1>

    <div class="container">

        <div class="one">
   
            <img src ="images/logo_internet.png"> Accès Internet : </br></br>
                Les ligues disposent d'un accès Internet mutualisé que la M2L loue à un prestataire extérieur. </br></br>

            
            <img src ="images/logo_wifi.png"> Accès Wifi : </br></br>
                Dans tous les espaces, un réseau Wifi "visiteurs" est disponible, avec une clé WPA renouvelée régulièrement et communiquée aux ligues. </br>
                Ce réseau ne permet que l'accès à Internet. </br></br>

            <img src ="images/telephone_logo.png"> Téléphonie : </br></br>
                Dans les bâtiments anciens A et B, les salles et bureaux sont équipés de prises de téléphone analogiques. </br>
                La M2L y fournit les combinés téléphoniques. Dans les bâtiments neufs C et D, l'équipement téléphonique est de type VoIP. </br>
                La M2L loue des postes téléphoniques IP aux ligues. </br></br>

            </br></br>
            
        </div>

               
        <div class="two">
            <h2> Serveur FTP documentaire</h2>
                <p> La M2L met à disposition des ligues un serveur FTP documentaire intranet/internet regroupant des textes légaux, des modèles de dossiers, de statuts, </br>
                des programmes de formation (...) compilés par le CROSL.

            </br></br>

            <h2> Système de réservation des salles </h2>
                <p> La M2L met à disposition des ligues un système de réservation des salles (réunions, amphithéâtre, restauration). </br>
                    Les réservations payantes sont facturées par la Région aux utilisateurs. L’administration de la M2L lui communique les informations nécessaires à cette facturation de façon hebdomadaire.  
                    
            </br></br>

            <h2> Information sur le digicode du jour et la clé Wifi </h2>
                <p> La M2L met à disposition des ligues un site web d'information sur le digicode permettant l'accès à la M2L ainsi que sur la clé Wifi "visiteurs". </br>
                    Le système de réservation donne également le digicode du jour dans le compte-rendu de réservation envoyé automatiquement par mail.      
                    
            </br></br>

            <h2> Système de gestion des configurations </h2>
                <p> M2L gère à travers un logiciel de gestion des configurations l'ensemble du parc informatique incluant les postes fixes des ligues.

        </div>



        </br></br>  </br></br>



        <div class="three">

        </br></br></br></br></br></br>
            <h2>Affranchissement : </h2></br>
            <p>Une machine à affranchir permet un affranchissement rapide et en nombre. Cette prestation est facturée aux ligues au coût de l'affranchissement. </p>
            <p>Chaque mois, on relie la machine à affranchir à une imprimante pour obtenir une liste de codes de gestion correspondant aux ligues associées à une quantité et un type d'affranchissement. </p>
            <p>La prise en compte de ces informations permet au CROSL d'éditer des factures.</p>
                
                         
        </div>  


        <div class="four">
        </br></br></br></br></br></br>
            <img src ="images/machine_affranchir.png">
        </div>


        

        <div class="five">
        </br></br></br></br></br></br>

            <h2>Impressions en volume et en qualité imprimerie : </h2></br>
            <p>Les ligues disposent de la possibilité d'imprimer sur des ressources d'impression numériques connectées situées dans le local reprographie du rez-de-chaussée dont l'usage fait l'objet d'une facturation à prix coûtant. </p>
            <p>    Un système de comptage situé sur le serveur d'impression permet au CROSL d’effectuer une facturation mensuelle auprès des ligues. </p>
            <p>•	Une photocopieuse noire et blanche à 70 pages/minute avec différents dispositifs de finition, </p>
            <p>•	Une imprimante Laser couleur A4/A3 à encre solide à 25 pages/minute </p>
            <p>•	Un traceur A2 (1 page / minute) utilisé pour les affiches et banderoles. </p>


        </div>

        
        <div class="six">
            <img src="images/imprimante.png"> 
            <img src ="images/photocopieuse.png">

        </div>
                    
               
        <div class="seven">
            <h2> Intégration des postes informatiques des ligues </h2>
            <p> Lorsque les ligues acquièrent du matériel informatique, il y a une phase obligatoire d'intégration qui consiste à : </br>
            <p>   •	Installer un antivirus affilié au serveur antiviral de la M2L, </br>
            <p>   •	Installer la dernière version de l'agent qui réalise l’inventaire matériel et logiciel </br>
            <p>   •	Paramétrer le poste en adressage IP automatique, </br>
            <p>   •	Paramétrer le poste en adressage IP automatique, </br>
            <p>   •	Paramétrer le poste en adressage IP automatique, </br>
            <p>   •	Installer un système de sauvegarde de données sur un site FTP de sauvegarde géré par la M2L, </br>
            <p>   •	Effectuer les dernières mises à jour systèmes et à paramétrer leur automatisation, </br>
            <p>   •	Paramétrer les noms des postes selon les règles de gestion suivantes : </br></br>
                       B [code bâtiment] E [numéro étage] L [numéro ligue] S [numéro salle]. P [numéro poste] </br>
                       Code bâtiment qui peut être A ou C </br>
                       N° étage est compris entre 1 et 4 (puisque les locaux du rez-de-chaussée n'hébergent pas de ligues) </br>
                       N° ligue sur 2 chiffres : correspond à un nombre attribué à la ligue allant pour l'instant de 01 à 24 </br>
                       N° salle sur 2 chiffres : correspond aux bureaux occupés par les ligues </br>
                       N° poste sur 2 chiffres : correspond au numéro écrit sur la prise murale </br>
           <p>    Exemple : le nom d'hôte BAE2L06S01P01 correspond au poste installé sur la prise N°1 du bureau A201 occupé par la ligue de Volley, bureau situé au deuxième étage du bâtiment A.  </br>
           <p>    Cette intégration est contractualisée. Les ligues et CD étant toutes des structures associatives indépendantes, leurs postes ne sont pas intégrés dans un annuaire central.  </br>
               Par contre, les postes de l'administration de la M2L et de la salle multimédia le sont. </br>


        </div>
            


        <div class="eight">
        </br></br></br></br>
            <h2> Intégration d'imprimantes </h2>
            <p>Lorsque les structures hébergées s'équipent d'imprimante réseau, la connexion en est réalisée par l'informaticien bénévole du CROSL, sans passer par un serveur d'impression. </br>
                Le nom de l'imprimante est lui aussi codifié de la même façon que celui des postes (la lettre L vient remplacer la lettre P).

            
            
        </div>
       
        
        <div class="nine">
        </br></br></br></br>
            <h2> Formations </h2>
            <p>Le CROSL offre un catalogue diversifié de formations aux bénévoles des clubs affiliés aux ligues (législation, éthique, comptabilité associative, etc.). </br>
                Les ligues organisent également des formations, en général plus techniques, sur l'usage de logiciels spécifiques de gestion des clubs ou des compétitions sportives.


        </div>

        
        <div class="ten">
        </br></br></br></br>
            <h2> Service d'établissement de bulletins de salaire </h2>
            <p>Le CRIB (Centre Régional d'Information des Bénévoles) est un label donné au CROSL qui, entre autres missions d'information (sur les textes réglementaires, la convention nationale du sport ...), </br>
                propose un service d'établissement de bulletins de salaires aux ligues et à leurs clubs affiliés. </br>
               Le CROSL est tiers de confiance pour l'URSSAF et, à ce titre, établit des bulletins de salaires réglementaires et tous les documents annexes. </br>
            <p>  La prestation est facturée au forfait (60 € par an) et au bulletin édité (5 €). Un employé du CROSL est affecté à cette mission à raison de 0,8 ETP.
               Illustration du processus pour une ligue qui fait établir ses bulletins de salaires par le CRIB, pour des animateurs à la vacation, comme pour ses employés permanents. </p>

             <p>  - La ligue établit une « déclaration unique d'embauche » et un contrat de travail. </br>

               - Les données "salaires" sont envoyées par les associations au CRIB avant le 15 du mois : </br>
               -	Nom, prénom, date de naissance, adresse, n° de sécu, de l’intervenant ou du salarié </br>
               -	Dates et heures d'intervention (de jour / de nuit) </br>
               -	Heures congés payées associées </br>
               -	Taux horaire </br>
               -	Intitulé dans la grille de la convention nationale du sport (exemple : technicien niveau 3) </br>

               <p> En retour, le CRIB fournit le bulletin de salaire et le document sur les charges périodiques.

               Le salaire est viré par la ligue, si celle-ci a fait ce choix. Sinon il y a un prélèvement sur son compte et virement sur le compte du salarié.

               Pour les versements aux organismes sociaux, il y a prélèvement direct sur le compte de la ligue. 

        </div>
        


    



    </div>




</body>


</html>
