<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
    <title>Calcul de la somme des chiffres</title>
</head>
<body>
    <h1>Calcul de la somme des chiffres</h1>
    
    <form method="POST" action="">
        <label for="nombreN">Entrez un nombre entier :</label>
        <input type="number" name="nombreN" id="nombreN" required>
        <br>
        <input type="submit" value="Calculer">
    </form>
    
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Vérifier si le nombre a été fourni
        if (isset($_POST["nombreN"])) {
            // Récupérer le nombre depuis le formulaire
            $N = intval($_POST["nombreN"]);
            
            // Appeler la fonction pour calculer la somme des chiffres
            $sommeChiffres = calculerSommeChiffres($N);
            
            // Afficher le résultat
            echo "<p>La somme des chiffres de $N est : $sommeChiffres</p>";
        }
    }
    
    // Fonction pour calculer la somme des chiffres d'un nombre
    function calculerSommeChiffres($N) {
        $somme = 0;
        
        // Convertir le nombre en une chaîne de caractères
        $nombreString = (string) $N;
        
        // Parcourir chaque chiffre dans la chaîne
        for ($i = 0; $i < strlen($nombreString); $i++) {
            // Ajouter le chiffre à la somme
            $somme += intval($nombreString[$i]);
        }
        
        return $somme;
    }
    ?>
    
</body>
</html>
