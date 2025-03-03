<?php
require_once "baza.php";
if ( !isset ($_POST["email"]) || empty($_POST["email"]))
{
    die ("Niste uneli korisničko ime");
}
if ( !isset ($_POST["sifra"]) || empty($_POST["sifra"]))
{
    die ("Niste uneli lozinku ");
}


$username = $_POST["email"];
$password = $_POST ["sifra"];

$query = "INSERT INTO korisnici (email, sifra) VALUES ('$username','$password')";

$baza-> query ($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">Uspesno ste registrovali vratite se na "Pocetnu"</a>
</body>
</html>