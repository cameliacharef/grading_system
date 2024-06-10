<?php

define('FILE_MOTS', "mots_de_passe.txt");

function authentifie ($numero_etudiant, $mot_de_passe_ecrit)
{
    $re = "/$numero_etudiant\s*:\s+(.*)\s*;/";
    $contents = file_get_contents(FILE_MOTS);
    if (!preg_match($re, $contents, $matches)) return false;
    return $mot_de_passe_ecrit == $matches[1];
}
?>