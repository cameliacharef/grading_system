<?php
header('Content-Type: text/plain');
if (!isset($_POST['cours'])) {
    echo "<label>Choisissez un cours</label>";
} else {
    include 'tableau_en_table.php';
    include 'tableau_en_select.php';
    include 'sax_notes.php';
    $notes = phraser("notes.xml", new sax_notes);
    $cours = $_POST['cours'];
    if (!isset($_POST['evaluation'])) {
        $sel = "";
        foreach ($notes[$cours] as $evaluation => $v) {
            if ($evaluation == 'nom') continue;
            $sel .= "\n\t<option value='$evaluation'>$evaluation</option>";
        }
        echo "<label for='evaluation'>Évaluations</label>\n
          <select id='evaluation' name='evaluation'>$sel</select>\n";
    } else {
        $evaluation = $_POST['evaluation'];
        $tableau = $notes[$cours][$evaluation]['notes'];
        echo tableau_en_table($tableau, "$evaluation de $cours");
    }
}
?>
