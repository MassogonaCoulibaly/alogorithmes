<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
    <title>Calcul du binaire d'un entier</title>
</head>
<body>
    <h1>Calcul du binaire d'un entier</h1>
    
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
            
            // Appeler la fonction pour calculer le binaire
            $binaire = calculerBinaire($N);
            
            // Afficher le résultat
            echo "<p>Le binaire est : $binaire</p>";
        }
    }
    
    // Fonction pour calculer le binaire d'un entier
    function calculerBinaire($N) {
        $binaire = "";
        
        while ($N > 0) {
            $binaire = ($N % 2) . $binaire;
            $N = (int)($N / 2);
        }
        
        return $binaire;
    }
    ?>
    
</body>
</html>

