<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
    <title>Détermination de primalité</title>
</head>
<body>
    <h1>Détermination de primalité</h1>
    
    <form method="POST" action="">
        <label for="nombreX">Entrez un nombre entier :</label>
        <input type="number" name="nombreX" id="nombreX" required>
        <br>
        <input type="submit" value="Vérifier">
    </form>
    
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Vérifier si le nombre a été fourni
        if (isset($_POST["nombreX"])) {
            // Récupérer le nombre depuis le formulaire
            $X = intval($_POST["nombreX"]);
            
            // Appeler la fonction pour vérifier la primalité
            $estPremier = estPremier($X);
            
            // Afficher le résultat
            if ($estPremier) {
                echo "<p>$X est un nombre premier.</p>";
            } else {
                echo "<p>$X n'est pas un nombre premier.</p>";
            }
        }
    }
    
    // Fonction pour vérifier si un nombre est premier
    function estPremier($X) {
        if ($X < 2) {
            return false;
        }
        
        for ($i = 2; $i <= sqrt($X); $i++) {
            if ($X % $i === 0) {
                return false;
            }
        }
        
        return true;
    }
    ?>
    
</body>
</html>
