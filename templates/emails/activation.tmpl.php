<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>
</head>
<body>
<h1>Activation de compte !</h1>
Pour activer votre compte, veuillez cliquer le lien ci-dessous :
<a href="<?= WEBSITE_URL.'/activation.php?p='.$pseudo.'&amp;token='.$token?>">Lien d' activation</a>
</body>
</html>