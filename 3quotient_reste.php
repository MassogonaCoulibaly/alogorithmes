<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
    <title>Calcul du quotient et du reste</title>
</head>
<body>
    <h1>Calcul du quotient et du reste</h1>
    
    <form method="POST" action="">
        <label for="nombreA">Entrez le nombre A :</label>
        <input type="number" name="nombreA" id="nombreA" required>
        <br>
        <label for="nombreB">Entrez le nombre B :</label>
        <input type="number" name="nombreB" id="nombreB" required>
        <br>
        <input type="submit" value="Calculer">
    </form>
    
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Vérifier si les nombres ont été fournis
        if (isset($_POST["nombreA"]) && isset($_POST["nombreB"])) {
            // Récupérer les nombres depuis le formulaire
            $A = intval($_POST["nombreA"]);
            $B = intval($_POST["nombreB"]);
            
            // Appeler la fonction pour calculer le quotient et le reste
            $resultat = calculerQuotientEtReste($A, $B);
            $quotient = $resultat[0];
            $reste = $resultat[1];
            
            // Afficher les résultats
            echo "<p>Le quotient est : $quotient</p>";
            echo "<p>Le reste est : $reste</p>";
        }
    }
    
    // Fonction pour calculer le quotient et le reste sans utiliser la division
    function calculerQuotientEtReste($A, $B) {
        $quotient = 0;
        $reste = $A;
        
        while ($reste >= $B) {
            $reste -= $B;
            $quotient++;
        }
        
        return array($quotient, $reste);
    }
    ?>
    
</body>
</html>
