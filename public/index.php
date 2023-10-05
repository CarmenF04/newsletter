<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Aanmelden voor Nieuwsbrief</h1>
    <form action="/verwerk_formulier.php" method="post">
        <label for="email">E-mailadres:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="nieuwsbrief">Kies nieuwsbrieftype(s):</label><br>
        <input type="checkbox" id="nieuwsbrief1" name="nieuwsbrief[]" value="Nieuwsbrief 1">
        <label for="nieuwsbrief1">Nieuwsbrief 1</label><br>

        <input type="checkbox" id="nieuwsbrief2" name="nieuwsbrief[]" value="Nieuwsbrief 2">
        <label for="nieuwsbrief2">Nieuwsbrief 2</label><br><br>

        <input type="submit" value="Aanmelden">
    </form>
</body>

</html>


</html>