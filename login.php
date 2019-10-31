<?php
     include 'templates/header.php';
     
?>

<h1>Formulaire de connexion:</h1>
    <p>Veuillez rentrer votre pseudo ainsi que votre mot de passe et adresse email:</p><br>

    <form action="data.php" method="POST">
        <label for="username">Votre pseudo : </label>
        <input type="text" id="username" name="username"required><br>

        <label for="password">Votre mot de passe: </label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Valider">
        
<?php
     include 'templates/footer.php';
?>