<?php

include '../../../TM/2/debut_html.php';
include 'sax_notes.php';
include 'authentifie.php';
include 'affiche_notes.php';

$titre = "Notes";

$numero_etudiant = isset($_POST['numero_etudiant']) ? $_POST['numero_etudiant'] :'';
$mot_de_passe_ecrit = isset($_POST['mot_de_passe']) ? $_POST['mot_de_passe'] : '';

$ok = ($numero_etudiant AND $mot_de_passe_ecrit) ?
    authentifie($numero_etudiant, $mot_de_passe_ecrit) :
    '';
if (!$ok) {
    if ($ok === false) {header("HTTP/1.1 403"); $titre .= "Erreur";}
    echo debut_html($titre);
    echo "<body><form method='post'>
	    <label for='numero_etudiant'>Numéro étudiant</label>
    	<input type='text' id='numero_etudiant' name='numero_etudiant'>
	    <label for='mot_de_passe'>Mot de passe</label>
    	<input type='password' id='mot_de_passe' name='mot_de_passe'>
	    <input type='submit' value='Connexion'></form>";
    if ($ok === false) echo "Identifiants incorrects";    
    echo "</body></html>\n";
} else {
    affiche_notes(phraser("notes.xml", new sax_notes), $numero_etudiant);
}
?>
