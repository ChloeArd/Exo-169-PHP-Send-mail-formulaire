<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<img src="donald_duck.png" alt="Donald Duck">

    <form method="post" action="register.php">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="email">Adresse mail du destinataire :</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    </div>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="message">Message : </label>
                <textarea name="message" class="form-control" id="message" placeholder="Message" required></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Envoyer" name="submit">
    </form>

<?php
$email = trim($_POST["email"]);
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "L'email est bonne !";
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "L'email n'est pas valide !";
}

if (isset($_GET['e'])) {
    echo " Il y a eu une erreur lors de l'envoie du mail !";
}
elseif (isset($_GET["s"])){
    echo " Le mail a été envoyé avec succés !";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
