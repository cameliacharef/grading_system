<?php
function affiche_notes($notes, $etudiant)
{
    echo debut_html("Notes de l'étudiant $etudiant");

    echo "<body>
    <table>
	<caption>Notes de l'étudiant $etudiant</caption1>
    <tr>
    <th>Cours</th>
    <th>Partiel</th>
    <th>Final</th>
    <th>TP</th>
    <th>Moyenne</th>
    </tr>";

    foreach ($notes as $v) {
        $partiel = isset($v['partiel']['coefficient']) ? $v['partiel']['coefficient'] : 0;
        $final = isset($v['final']['coefficient']) ? $v['final']['coefficient'] : 0;
        $tp = isset($v['tp']['coefficient']) ? $v['tp']['coefficient'] : 0;
        $moyenne = 0;
        if (isset($v['partiel']['notes'][$etudiant])) {
            $note_partiel = $v['partiel']['notes'][$etudiant];
            $moyenne +=  $note_partiel * $partiel;
        } else $note_partiel = '-';
        if (isset($v['final']['notes'][$etudiant])) {
            $note_final = $v['final']['notes'][$etudiant];
            $moyenne +=  $note_final * $final;
        } else $note_final = '-';
        if (isset($v['tp']['notes'][$etudiant])) {
            $note_tp = $v['tp']['notes'][$etudiant];
            $moyenne += $note_tp * $tp;
        } else $note_tp = '-';
        $nom = $v['nom'];
        $moyenne /= $partiel + $final + $tp;

        echo "<tr>
        <td>$nom</td>
        <td>$note_partiel</td>
        <td>$note_final</td>
        <td>$note_tp</td>
        <td>$moyenne</td>
        </tr>";
    }
    echo "</table>
    <script type='text/javascript' src='notes.js'></script>";
    echo "</body></html>";
}
?>
