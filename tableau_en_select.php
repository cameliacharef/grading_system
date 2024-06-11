<?php
function tableau_en_select($tab,$saisie,$option=""){
   $choix=htmlspecialchars($option,ENT_QUOTES);
   $saisie2=htmlspecialchars($saisie);
   $html="<label for='$saisie2'>$saisie2 : </label>\n";
   $html.="<select name='$saisie2' id='$saisie2' >\n";
   foreach($tab as $continent=>$valeur){
        $contin=htmlspecialchars($continent,ENT_QUOTES);
        $html.="<optgroup label='$contin'>$contin\n";
        foreach($valeur as $pays=>$value ){
            $country=htmlspecialchars($pays,ENT_QUOTES);
            if($option==$pays){
                $html.="<option value='$choix' selected >$choix</option>\n";
            }
            else{
                $html.="<option value='$country'>$country</option>\n";
            }
            
        }
        $html.="</optgroup>\n";
    }
    $html.="</select>";
    return $html;
}
