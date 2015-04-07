<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="index.css" />

    <script ></script>
    <title>Buanderie</title>

</head>

<body>
<div class="container">
    <?php
    $day_fr = array( "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche","Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    $day_an = array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    $class=array("day1","day2", "day3", "day4", "day5", "day6", "day7");
    $day =$day_fr;
    $day_link = array( "monday.php", "tuesday.php", "wednesday.php", "thursday.php", "friday.php", "saturday.php", "sunday.php");
    $today = date('l');

    switch ($today) {
        case "Monday":
            $today=0;
            break;
        case  "Tuesday":
            $today=1;

            break;
        case "Wednesday":
            $today=2;

            break;
        case "Thursday":
            $today=3;

            break;
        case "Friday":
            $today=4;

            break;
        case  "Saturday":
            $today=5;

            break;
        case "Sunday":
            $today=6;

            break;
    }
    $k=0;
    for($i = $today; $i < $today + 7 ; $i++)
    {



        $add='+'.($k).'day';
        $date1 = $day_fr[$i]." ".date('d',strtotime($add));
    $k++;
        echo
    " <div class=\"$class[$i]\">
    <a href=\"$day_link[$i]\">$date1</a>
    </div>";
    }
    ?>
<!--
    <div class="day1">
    <a href="monday.php">Lundi</a>
    </div>

    <div class="day2">
    <a href="tuesday.php">Mardi</a>
    </div>
    <div class="day3">
    <a href="wednesday.php"><?php

      //  $dateN1 = date('l',strtotime('+1 day'));
       // echo "\n$dateN1\n";
    // echo date('l j F Y');
     echo date('d');
    //    $date = strtotime("+1 day", strtotime("2007-02-28"));
      //  echo date("Y-m-d", $date);?></a>
    </div>
    <div class="day4">
    <a href="thursday.php">Jeudi</a>
    </div>
    <div class="day5">
    <a href="friday.php">Vendredi</a>
    </div>
    <div class="day6">
    <a href="saturday.php">Samedi</a>
    </div>
    <div class="day7">
    <a href="sunday.php">Dimanche</a>
    </div>
-->
</div>

</body>

</html>
