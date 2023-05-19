<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
    <title>Détermination des diviseurs</title>
</head>
<body>
    <h1>Détermination des diviseurs</h1>
    
    <form method="POST" action="">
        <label for="nombreX">Entrez un nombre entier :</label>
        <input type="number" name="nombreX" id="nombreX" required>
        <br>
        <input type="submit" value="Déterminer">
    </form>
    
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Vérifier si le nombre a été fourni
        if (isset($_POST["nombreX"])) {
            // Récupérer le nombre depuis le formulaire
            $X = intval($_POST["nombreX"]);
            
            // Appeler la fonction pour déterminer les diviseurs
            $diviseurs = determinerDiviseurs($X);
            
            // Afficher le résultat
            echo "<p>Les diviseurs de $X sont : " . implode(", ", $diviseurs) . "</p>";
        }
    }
    
    // Fonction pour déterminer les diviseurs d'un entier
    function determinerDiviseurs($X) {
        $diviseurs = [];
        
        for ($i = 1; $i <= $X; $i++) {
            if ($X % $i === 0) {
                $diviseurs[] = $i;
            }
        }
        
        return $diviseurs;
    }
    ?>
    
</body>
</html>
