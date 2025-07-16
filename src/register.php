<?php
$mysqli = new mysqli("mysql", "root", "rootpassword", "etudiants");

if ($mysqli->connect_error) {
    die("Connexion échouée : " . $mysqli->connect_error);
}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

$sql = "INSERT INTO etudiant (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";

if ($mysqli->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur : " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
