<?php

$strNomUtilisateur = "Non connecté"; //doit etre une variable de session
require_once "en-tete.php";

$strTitreApplication = "Microvox";
$strNomFichierCSS = "index.css";
$strModeTransmission = "post";

$strNomUtilisateur = "Louis-Marie Brousseau";
?>

<div>
    <h1 class="sCentre">
        Fonctionnalité des professeurs
    </h1>
    <ul class="sCentre sMenu">
        <li class="">
            <a href="#">
                Mettre à jour la liste des documents
            </a>
            <p>
                Cliquez sur le lien ci-dessus si vous désirez ajoutez/modifier/retirer un ou plusieurs documents.
            </p>
        </li>
        <li class="">
            <a onclick="soumettrePageEtat(0,'majTableReference.php');">
                Mettre à jour les tables de référence
            </a>
            <p>
                Cliquez sur le lien ci-dessus si vous désirez ajouter/modifier/retirer une ou plusieurs sessions, cours, catégories de document et/ou utilisateurs.
            </p>
        </li>
        <li class="">
            <a href="#">
                Assigner les privilèges d'accès aux documents
            </a>
            <p>
                Cliquez sur le lien ci-dessus pour assigner les privilèges d'accès aux documents pour un ou plusieurs utilisateurs.
            </p>
        </li>
        <li class="">
            <a href="#">
                Assigner un groupe d'utillisateur à un cours-session
            </a>
            <p>
                Clliquez sur le lien ci-dessus si vous désirez ajouter une série d'utilisateurs et les assigner à un cours-session existant.
            </p>
        </li>
        <li class="">
            <a href="#">
                Reconstruire l'arborescence des documents
            </a>
            <p>
                Cliquez sur le lien ci-dessus si vous désirez effectuer du ménage dans les listes de documents enregistrés.
            </p>
        </li>
    </ul>
</div>

<?php
require_once "pied-page.php";
