<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family:'Arial Narrow'; font-size:18px"><br>
    <p style="text-align:center"><img style="width:200px" src="<?=$url?>" alt="LOGO"></p>
    <p>Bonjour <?=$prenom??''?>,</p>
    <p>Nous vous annonçons la confirmation de votre pass sanitaire en réponse de la pandémie du Covid-19 et autres futures maladies.</p> 
    <p>Ci-dessous, vous trouverez le lien pour l’obtenir.</p> 
    <p>
    Merci de télécharger votre pass sanitaire en cliquant sur ce lien <a href="<?=$frame?>"><?=$frame?></a>
    </p>
    <p style="font-weight:bold; color:red;text-align:center">Votre Pass Sanitaire n'est valide que pendant 4 jours.</p>
    <p>Cordialement, <br><b>Equipe SURSA</b></p>
</body>
</html>