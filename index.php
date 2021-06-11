<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 2</title>
</head>
<body>
    <p>
        Créer trois variables : nom, prénom, âge, puis concaténer ces variables dans une chaîne de caractères : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
            /* Déclaration de variables */
            $lastName = "Gatto"; 
            $firstName = "Evie";
            $age = 10;
            /* Affichage des variables */
            /* Pour concaténer correctement avec l’opérateur de concaténation, 
            la règle est de séparer les différentes variables avec l’opérateur de concaténation (le point) 
            des textes autour */
            echo 'Son nom, c\'est ' .$firstName. ' ' .$lastName. ', et elle a ' .$age. ' ans'; 
            /* Fonctionne aussi --> echo "Son nom, c'est $firstName $lastName, et elle a $age ans.";*/
        ?>
    </div>

</body>
</html>