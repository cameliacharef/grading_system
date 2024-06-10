<?php

include 'phraser.php';

class sax_notes implements preneurs_sax {

    public array $notes = array();
    public $cours;
    public $type;
    public $etudiant;

    function ouvrante($phraseur, $nom, $attr)
    {
        if ($nom == "cours") {
            $this->notes[$attr["code"]] = array("nom" => $attr["nom"]);
            $this->cours = $attr["code"];
        }
        if ($nom == "partiel" || $nom == "final" || $nom == "tp") {
            $coefficient = (isset($attr["coefficient"])) ? $attr["coefficient"] : 1;
            $this->notes[$this->cours][$nom] = array(
                "coefficient" => $coefficient,
                "notes" => array());
            $this->type = $nom;
        }
        if ($nom == "etudiant") {
            $this->notes[$this->cours][$this->type]["notes"][$attr["numero"]] = -1;
            $this->etudiant = $attr["numero"];
        }
    }

    function texte($phraseur, $texte)
    {
        if (is_numeric($texte)) {
            $this->notes[$this->cours][$this->type]["notes"][$this->etudiant] = $texte;
        }
    }

    function fermante($phraseur, $nom) {}

    function retour($msg) {
        return $msg ? $msg : $this->notes;
    }
}
?>
