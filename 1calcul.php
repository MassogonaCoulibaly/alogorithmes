<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
    <title>Calcul de la somme des N premiers nombres entiers</title>
</head>
<body>
    <h1>Calcul de la somme des N premiers nombres entiers</h1>
    
    <form method="POST" action="">
        <label for="nombre">Entrez la valeur de N :</label>
        <input type="number" name="nombre" id="nombre" required>
        <input type="submit" value="Calculer">
    </form>
    
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Vérifier si la valeur de N a été fournie
        if (isset($_POST["nombre"])) {
            // Récupérer la valeur de N depuis le formulaire
            $N = $_POST["nombre"];
            
            // Appeler la fonction pour calculer la somme
            $resultat = calculerSomme($N);
            
            // Afficher le résultat
            echo "<p>La somme des $N premiers nombres entiers est : $resultat</p>";
        }
    }
    
    // Fonction pour calculer la somme des N premiers nombres entiers
    function calculerSomme($N) {
        $somme = 0;
        
        for ($i = 1; $i <= $N; $i++) {
            $somme += $i;
        }
        
        return $somme;
    }
    ?>
    
</body>
</html>
