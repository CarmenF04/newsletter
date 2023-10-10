<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg de ingediende gegevens
    $email = $_POST["email"];
    $uit_eten = isset($_POST["eten"]) ? 1 : 0;
    $vervoer = isset($_POST["vervoer"]) ? 1 : 0;

    // Verbind met de database (vervang 'gebruikersnaam' en 'wachtwoord' door je databasegegevens)
    $conn = new mysqli("localhost", "gebruikersnaam", "wachtwoord", "mydatabase");

    // Controleer op fouten bij het maken van de verbinding
    if ($conn->connect_error) {
        die("Databaseverbinding mislukt: " . $conn->connect_error);
    }

    // Voeg de gegevens toe aan de database
    $sql = "INSERT INTO reserveringen (email, eten, vervoer) VALUES ('$email', $uit_eten, $vervoer)";

    if ($conn->query($sql) === TRUE) {
        echo "Reservering is succesvol opgeslagen in de database.";
    } else {
        echo "Fout bij het opslaan van de reservering: " . $conn->error;
    }

    // Sluit de databaseverbinding
    $conn->close();
}
?>

