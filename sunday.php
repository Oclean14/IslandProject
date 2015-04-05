<html>
<head>
    <title>Dimanche</title>

    <link rel="stylesheet" href="agenda.css" />



</head>
<body>
<div id="container">
    <table id="morning">
        <?php
        $jour = array(null, "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
        $day_link = array(null, "monday.php", "tuesday.php", "wednesday.php", "thursday.php", "friday.php", "saturday.php", "sunday.php");

        $rdv["Dimanche"]["16:30"] = "";
        $rdv["Lundi"]["9"] = "";

        echo "<tr><th>Heure</th>";

        echo "<th>".$jour[7]."</th>";

        echo "</tr>";

        for($j = 00; $j < 12; $j += 0.5)
        {
            echo "<tr>";

            for($i = 0; $i < 1; $i++)
            {
                if($i == 0)
                {
                    $heure = str_replace(".5", ":30", $j);

                    if(substr($heure,-3,3) != ":30")  echo "<td class=\"time\" rowspan=\"2\">".($heure)."h</td>";
                }

                echo "<td>";

                if(isset($rdv[$jour[$i+1]][$heure]))
                {
                    echo $rdv[$jour[$i+1]][$heure];
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>


    <table id ="afternoon">
        <?php


        $rdv["Dimanche"]["16:30"] = "";
        $rdv["Lundi"]["9"] = "";

        echo "<tr><th>Heure</th>";

        echo "<th> ".$jour[7]."</th>";

        echo "</tr>";

        for($j = 12; $j < 24; $j += 0.5)
        {
            echo "<tr>";

            for($i = 0; $i < 1; $i++)
            {
                if($i == 0)
                {
                    $heure = str_replace(".5", ":30", $j);

                    if(substr($heure,-3,3) != ":30")  echo "<td class=\"time\" rowspan=\"2\">".($heure % 24)."h</td>";
                }

                echo "<td>";

                if(isset($rdv[$jour[$i+1]][$heure]))
                {
                    echo $rdv[$jour[$i+1]][$heure];
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>