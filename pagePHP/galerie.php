<?php
// Connexion à la base de données (à adapter selon tes paramètres)
$pdo = new PDO('mysql:host=localhost;dbname=nom_de_ta_base_de_donnees', 'nom_utilisateur', 'mot_de_passe');

// Récupération des images
$images = $pdo->query('SELECT * FROM gallery')->fetchAll(PDO::FETCH_ASSOC);

// Traitement de l'upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        // Ajout de l'image à la base de données
        $pdo->prepare('INSERT INTO gallery (url, description) VALUES (?, ?)')
            ->execute([$uploadFile, $_POST['description']]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Ajoute les balises meta, title, et les liens vers les stylesheets -->
</head>
<body>

<!-- Affichage des images -->
<div class="container" style="padding-top: 300px;">
    <div class="row">
        <div class="card-group">
            <?php foreach ($images as $image): ?>
                <div class="card me-2">
                    <img src="<?= $image['url'] ?>" class="card-img-top" alt="<?= $image['description'] ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <!-- Pagination Start -->
    <div class="row" style="margin-top: 100px;">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <!-- Tu devras adapter les liens de pagination en fonction de la structure de ta page -->
                <li class="page-item"><a class="page-link" href="#page1">1</a></li>
                <li class="page-item"><a class="page-link" href="#page2">2</a></li>
                <li class="page-item"><a class="page-link" href="#page3">3</a></li>
                <li class="page-item"><a class="page-link" href="#page4">4</a></li>
            </ul>
        </nav>
    </div>
    <!-- Pagination End -->

    <!-- Formulaire pour uploader une image -->
    <form method="post" action="" enctype="multipart/form-data">
        <label for="image">Image:</label>
        <input type="file" name="image" required>
        <label for="description">Description:</label>
        <textarea name="description"></textarea>
        <button type="submit">Uploader</button>
    </form>

</div>

</body>
</html>
