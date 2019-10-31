<?php
$_POST;
     include 'templates/header.php';

if (($_POST["username"] == "Anto" && $_POST["password"] == "0000")){
?>
    <p>Faire disparaitre une div de votre choix:</p>
    <form>
        <input type="checkbox" id="first" name="first">
        <label for="first">Div 1</label>
        <input type="checkbox" id="second" name="second">
        <label for="second">Div 2</label>
        <input type="checkbox" id="third" name="third">
        <label for="third">Div 3</label><br><br>
        <input type="submit" value="Valider">
    </form>
<?php
  } else {
    header('Location: index.php');
  }
?>

<?php
     include 'templates/footer.php';
?>