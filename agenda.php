<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="agenda.css" />
    <script ></script>
    <title>Buanderie</title>

</head>

<body>
<table class="calendrier" >
    <tr class="nom_jour">

        <?php
        $jour = array('Lundi', 'Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');

        for ($i==0;$i<7;$i++)
        {
        ?>
                <th class="nom_jour">
                <?php echo $jour[$j] ?>
                </th>

                <tr class= "nom_jour" >
                <td class="">
                    <?php   echo is_busy  ?>
                </td>
                </tr>

       <?php  } ?>


      <!--  <td class="jour">Mardi</td>
        <td class="jour">Mercredi</td>
        <td class="jour">Jeudi</td>
        <td class="jour">Vendredi</td>
        <td class="jour">Samedi</td>
        <td class="jour_7">Dimanche</td>*/-->
    </tr>

</table>
</body>

</html>
