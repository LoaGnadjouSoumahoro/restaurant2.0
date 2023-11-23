<?php
// Connexion à la base de données (à adapter selon tes paramètres)
$pdo = new PDO('mysql:host=localhost;dbname=nom_de_ta_base_de_donnees', 'nom_utilisateur', 'mot_de_passe');

// Ajout d'un commentaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $visitedRestaurant = $_POST['visited_restaurant'];
    $visitDate = $_POST['visit_date'];
    $comment = $_POST['comment'];

    $pdo->prepare('INSERT INTO guestbook (name, visited_restaurant, visit_date, comment) VALUES (?, ?, ?, ?)')
        ->execute([$name, $visitedRestaurant, $visitDate, $comment]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Ajoute les balises meta, title, et les liens vers les stylesheets -->
</head>
<body>

<!-- Formulaire pour ajouter un commentaire -->
<form method="post" action="">
    <label for="name">Nom:</label>
    <input type="text" name="name" required>
    <label for="visited_restaurant">Restaurant visité:</label>
    <input type="text" name="visited_restaurant" required>
    <label for="visit_date">Date de visite:</label>
    <input type="date" name="visit_date" required>
    <label for="comment">Commentaire:</label>
    <textarea name="comment"></textarea>
    <button type="submit">Ajouter</button>
</form>

</body>
</html>
