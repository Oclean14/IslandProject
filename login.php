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
    <label id="nom">Nom :</label>
    <input type="text" id="nom" /><br />
    <label id="prenom">Prénom :</label>
    <input type="text" id="prenom" /><br />
    <label id="mdp">Mot de passe :</label>
    <input type="password" id="mdp" /> <br/>
    <label id="mdp">Confirmez votre mot de passe :</label>
    <input type="password" id="mdp" /><br/>
        <label id="email"> E-Mail </label>
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
