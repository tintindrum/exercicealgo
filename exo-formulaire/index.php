<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- exercie -->
    <form id="reused_form" action="traitement.php" method="POST" class="form">
        <div>
            <input type="text" id="name" placeholder="Nom" required class="validate" name="nom">
        </div>

        <div>
            <input type="date" id="message" placeholder="Votre âge ici .." class="validate" name="age" method="POST">
        </div>

        <div>
            <button class="form-button" type="submit" value="OK">Envoyer</button>
        </div>
    </form>
</body>
</html>



