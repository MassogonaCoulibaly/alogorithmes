<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
    <title>Recherche du minimum et du maximum</title>
</head>
<body>
    <h1>Recherche du minimum et du maximum</h1>
    
    <form method="POST" action="">
        <label for="nombres">Entrez les nombres séparés par des virgules :</label>
        <input type="text" name="nombres" id="nombres" required>
        <input type="submit" value="Rechercher">
    </form>
    
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Vérifier si les nombres ont été fournis
        if (isset($_POST["nombres"])) {
            // Récupérer les nombres depuis le formulaire
            $nombres = explode(',', $_POST["nombres"]);
            
            // Appeler la fonction pour rechercher le minimum et le maximum
            $resultat = rechercherMinMax($nombres);
            $minimum = $resultat[0];
            $maximum = $resultat[1];
            
            // Afficher les résultats
            echo "<p>Le minimum est : $minimum</p>";
            echo "<p>Le maximum est : $maximum</p>";
        }
    }
    
    // Fonction pour rechercher le minimum et le maximum dans un tableau de nombres
    function rechercherMinMax($nombres) {
        $minimum = $nombres[0];
        $maximum = $nombres[0];
        
        $count = count($nombres);
        for ($i = 1; $i < $count; $i++) {
            if ($nombres[$i] < $minimum) {
                $minimum = $nombres[$i];
            }
            
            if ($nombres[$i] > $maximum) {
                $maximum = $nombres[$i];
            }
        }
        
        return array($minimum, $maximum);
    }
    ?>
    
</body>
</html>
