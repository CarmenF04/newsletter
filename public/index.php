<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Schrijf je in voor onze nieuwsbrief</h1>

    <form id="nieuwsbriefForm">
        <label for="email">E-mailadres:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="nieuwsbriefType">Kies nieuwsbrief type(s):</label><br>
        <input type="checkbox" id="nieuwsbrief1" name="nieuwsbriefType" value="Nieuwsbrief 1"> Nieuwsbrief 1<br>
        <input type="checkbox" id="nieuwsbrief2" name="nieuwsbriefType" value="Nieuwsbrief 2"> Nieuwsbrief 2<br>

        <br><br>
        <input type="submit" value="Inschrijven">
    </form>

<!-- // javascript -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const nieuwsbriefForm = document.getElementById('nieuwsbriefForm');

            nieuwsbriefForm.addEventListener('submit', function (event) {
                event.preventDefault();

                const email = document.getElementById('email').value;
                const nieuwsbriefTypes = Array.from(document.getElementsByName('nieuwsbriefType'))
                    .filter(input => input.checked)
                    .map(input => input.value);

                console.log('E-mail:', email);
                console.log('Geselecteerde nieuwsbrieftypes:', nieuwsbriefTypes);

            });
        });
    </script>
</body>

</html>


</html>