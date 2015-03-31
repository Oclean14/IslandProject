<html>
<head>
<meta charset="utf-8">
<link href="login.css" rel="stylesheet" type="text/css">
<title>Document sans nom</title>
</head>

<body>
  <p>
    <?php

echo'<div> 
<section>
<form class="form" post="method" action="inscriptions.php">
  <p>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" /><br />
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" /><br />
    <label for="mdp">Mot de passe :</label>
    <input type="password" id="mdp" /> <br/>
    <label for="mdp">Confirmez votre mot de passe :</label>
    <input type="password" id="mdp" /><br/>
        <label for="email"> E-Mail </label>
    <input type="email" id="email" /><br/><br/>
    
    
    
    <input class="bouton" type="submit" value="Validez"> <br/>
  </p>
</form>






       </section>
</div>'
?>
</p>
</body>
</html>
