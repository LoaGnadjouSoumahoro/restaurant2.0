<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Back office</title>
</head>
<body>
    // connexion a la base de donnée
    <?php
    //Instancciation d'un objet PDO pour creer une connexion à la base de donnée
    $bddPDO = new PDO('mysql:host=localhost;bdname=webtopu', 'root', '');
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = "SELECT * FROM clients ORDER BY id_client DSC";
    $result = $bddPDO->query($requete);

    if(!$result){
    echo "La récupération des données a rencontré un problème";
    } else{
    $nbre_clients= $result->rowCount();
    }
    
    ?>

    <head>

    </head>
    <main>
        <div class="container mt-5">
        <table class="table table-bordered border-primary ">
     <thead>
        <tr class="table-primary">
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Téléphone</th>
        <th scope="col">Date de réservation</th>
        <th scope="col">Heure de réservation</th>
        <th scope="col">Ville</th>
        <th scope="col">Message</th>
        </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">1</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>09090909</td>
      <td>13/12/2023</td>
      <td>13:30</td>
      <td>Leuven</td>
      <td>Salut je veux manger</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>09090909</td>
      <td>13/12/2023</td>
      <td>13:30</td>
      <td>Leuven</td>
      <td>Salut je veux manger</td>
    </tr>
   
  </tbody>
</table>
        </div>
    </main>



</body>
</html>