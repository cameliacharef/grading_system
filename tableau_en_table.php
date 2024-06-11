<?php
    function tableau_en_table(array $tab, string $chaine): string{
        if(empty($tab)){
            return "";
        }
        $tableau="<table><caption>".$chaine."</caption>";
        $tableau.="<tr>\n<th>Nom</th>\n<th>valeur</th>\n</tr>";
        foreach($tab as $cle=>$valeur){
            $tableau.="<tr><td>".$cle."</td><td>".$valeur."</td></tr>";
        }
        $tableau.="<tr>\n<th>Nom</th>\n<th>valeur</th>\n</tr>";
        $tableau.="</table>\n";

        return $tableau;
    }

    function cherche_index_n ($tab, $n)
{
    foreach($tab as $k => $v) {
        if (!--$n) return $k;
    }
    return false;
}

?>
