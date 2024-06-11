<?php

function debut_html(string $titre):string {
   $chaine = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN''http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>\n";
   $chaine.="<html xml:lang='fr' lang='fr' xmlns='http://www.w3.org/1999/xhtml'>\n";
   $chaine.="<head>\n";
   $chaine.="<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />\n";
   $chaine.="<title>".$titre."</title>\n";
   $chaine.="</head>\n";
   return $chaine;
}


$page=debut_html("camelia");
echo $page;
#php debut_html.php
?>
