<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>

<img src="donald_duck.png" alt="Donald Duck">

    <form method="post" action="register.php">
        <div>
            <label for="email"> Adresse mail du destinataire :</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="message"> Message :</label>
            <textarea name="message" id="message" required></textarea>
        </div>
        <input type="submit" value="Envoyer" name="submit">
    </form>

</body>
</html>
