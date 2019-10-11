<?php
if (isset($_POST["submit"]))
{


$nom = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['user_message'];
$to = 'example@domain.com'; 

if (!$_POST['name']) {
    $errName = 'Please enter your name';
}
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}
if (!$_POST['message']) {
    $errMessage = 'Please enter your message';
}
if (!$errEmail && !$errMessage && !$errNom) {
    try
{
    //on se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');
    // var_dump($bdd);
}
catch (Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}




}
}
?>