<?php
$servername = "mysql";
$username = "root";
$password = "rootpassword";
$dbname = "etudiants";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

$nom = $_POST['nom'] ?? '';
$prenom = $_POST['prenom'] ?? '';
$email = $_POST['email'] ?? '';

$sql = "INSERT INTO students (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
