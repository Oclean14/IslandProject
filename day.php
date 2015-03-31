<html>
<head>
    <title>Mon super emploi du temps</title>

        <link rel="stylesheet" href="agenda.css" />



</head>
<body>
<table>
    <?php
    $jour = array(null, "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    $rdv["Dimanche"]["16:30"] = "Dermatologue";
    $rdv["Lundi"]["9"] = "Mémé -_-";
    echo "<tr><th>Heure</th>";
    for($x = 1; $x < 8; $x++)
        echo "<th>".$jour[$x]."</th>";
    echo "</tr>";
    for($j = 0; $j < 12; $j += 0.5) {
        echo "<tr>";
        for($i = 0; $i < 7; $i++) {
            if($i == 0) {
                $heure = str_replace(".5", ":30", $j);
                if(substr($heure,-3,3) != ":30")
                    echo "<td class=\"time\" rowspan=\"2\">".($heure+6)."h</td>";
            }
            echo "<td>";
            if(isset($rdv[$jour[$i+1]][$heure])) {
                echo $rdv[$jour[$i+1]][$heure];
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>