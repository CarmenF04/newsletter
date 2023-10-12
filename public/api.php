<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $nieuwsbriefTypes = isset($_POST["nieuwsbriefType"]) ? $_POST["nieuwsbriefType"] : [];

    $conn = new mysqli("localhost", "db_user", "mijn_p@ss#", "newletter");

    if ($conn->connect_error) {
        die("Databaseverbinding mislukt: " . $conn->connect_error);
    }

    foreach ($nieuwsbriefTypes as $nieuwsbriefType) {
        $sql = "INSERT INTO nieuwsbrief_abonnementen (email, nieuwsbrief_type) VALUES ('$email', '$nieuwsbriefType')";

        if ($conn->query($sql) !== TRUE) {
            echo "Fout bij het opslaan van de reservering: " . $conn->error;
        }
    }

    echo "Nieuwsbriefabonnement(en) zijn succesvol opgeslagen in de database.";

    $conn->close();
}
?>
