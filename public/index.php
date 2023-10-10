<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Reservering</h1>
    <form method="post" action="verwerk_reservering.php">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br>

        <label>Uit eten:</label>
        <input type="radio" name="uit_eten" value="1"> Ja
        <input type="radio" name="uit_eten" value="0"> Nee<br>

        <label>Vervoer:</label>
        <input type="radio" name="vervoer" value="1"> Ja
        <input type="radio" name="vervoer" value="0"> Nee<br>

        <input type="submit" value="Reserveren">
    </form>
</body>

</html>


</html>