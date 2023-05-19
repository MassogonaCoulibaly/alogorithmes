<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
    <title>Vérification de la divisibilité</title>
</head>
<body>
    <h1>Vérification de la divisibilité</h1>
    
    <form method="POST" action="">
        <label for="nombreA">Entrez le nombre A :</label>
        <input type="number" name="nombreA" id="nombreA" required>
        <br>
        <label for="nombreB">Entrez le nombre B :</label>
        <input type="number" name="nombreB" id="nombreB" required>
        <br>
        <input type="submit" value="Vérifier">
    </form>
    
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Vérifier si les nombres ont été fournis
        if (isset($_POST["nombreA"]) && isset($_POST["nombreB"])) {
            // Récupérer les nombres depuis le formulaire
            $A = intval($_POST["nombreA"]);
            $B = intval($_POST["nombreB"]);
            
            // Appeler la fonction pour vérifier la divisibilité
            $divisible = estDivisible($A, $B);
            
            // Afficher le résultat
            if ($divisible) {
                echo "<p>$A est divisible par $B.</p>";
            } else {
                echo "<p>$A n'est pas divisible par $B.</p>";
            }
        }
    }
    
    // Fonction pour vérifier si A est divisible par B
    function estDivisible($A, $B) {
        return ($A % $B) === 0;
    }
    ?>
    
</body>
</html>
