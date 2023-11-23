<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SweetEat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
  // La connexion à la base de données
  $bddPDO = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '0207');
  $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Récupération des données du formulaire
  if(isset($_POST['enregistrer'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $city = $_POST['city'];
    $text_area = $_POST['text_area'];

    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($fone) && !empty($date) && !empty($time) && !empty($city) && !empty($text_area)) {
      // La requête préparée
      $requete = $bddPDO->prepare('INSERT INTO back_office (first_name, last_name, email, fone, date, time, city, text_area) VALUES (:first_name, :last_name, :email, :fone, :date, :time, :city, :text_area)');

      // Lier les paramètres de la base avec les contenus à insérer 
      $requete->bindValue(':first_name', $first_name);
      $requete->bindValue(':last_name', $last_name);
      $requete->bindValue(':email', $email);
      $requete->bindValue(':fone', $fone);
      $requete->bindValue(':date', $date);
      $requete->bindValue(':time', $time);
      $requete->bindValue(':city', $city);
      $requete->bindValue(':text_area', $text_area);

      // Exécution
      $result = $requete->execute();

      if(!$result) {
        echo "Un problème est survenu, l'enregistrement n'a pas été effectué";
      } else {
        echo "<script type='text/javascript'>alert('Vous êtes bien enregistré. Votre identifiant est: ".$bddPDO->lastInsertId()."')</script>";
      }
    } else {
      echo "Tous les champs sont requis";
    }
  }
?>


  <div class="masthead" style="background-image: url('./images/restaurant_foto_vin.jpg');">

    <!-- start Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark cc-navbar w-100 ">
      <div class="container-fluid">

        <a class="navbar-brand text-uppercase" href="#"> <img class="img-logo" src="images/logo_restaurant.png" alt="Logo SweetEat"> <span class="name-logo"> <strong>SweetEat</strong></span> </a>
        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.html">Welcome</a>
            </li>

            <li class="nav-item pe-4 ">
              <a class="nav-link " href="menu.html">Menu</a>
            </li>
            <li class="nav-item pe-4">
              <a class="nav-link" href="pictures.html">Pictures</a>
            </li>
            <li class="nav-item pe-4">
              <a class="nav-link" href="restaurant.html">Restaurant</a>
            </li>
            <li class="nav-item pe-4">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>

          </ul>

          <!-- ajout du bouton -->

          <a class="btn btn-order rounded-0" href="contact.html" role="button">Place Order Now</a>

          <!-- ajout du bouton -->

        </div>
      </div>
    </nav>

    <div class="color-overlay d-flex justify-content-center align-items-center">

      <div class="container w-100">





        <div class="jumbotron big-banner  banner pt-5 d-flex justify-content-center align-items-center" style="height: 1000px; padding-top: 150px;">

          <section class="mt-5 ">
            <!-- +my-5
  +py-5 -->
            <div class="container  banner ">
              <div class="row">
                <div class="col">
                  <div class=" text-center ">

                    <div class="card-body mb-5">


                      <a class="navbar-brand" href="#"><img class="img-logo" src="images/logo_restaurant.png" alt="Logo restaurant"></a>

                      <h1 class="card-title text-capitalize py-3 redressed banner-desc">Réservation</h1>
                      <p class="card-text w-100">For all your events and evenings, do not hesitate to contact us.</p>



                    </div>

                  </div>
                </div>
              </div>
            </div>


            <!-- Formulaire Bootstrap -->


            <form class="row g-3 needs-validation" action="contact2.php" method="post" novalidate>
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label h4 text-light">First name</label>
                <input type="text" class="form-control" id="validationCustom01" name="first_name" value="Mark" required>
                <div class="valid-feedback">Looks good!</div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom02" class="form-label h4 text-light">Last name</label>
                <input type="text" name="last_name" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">Looks good!</div>
              </div>

              <div class="col-md-6">
                <label for="validationCustomUsername" class="form-label h4 text-light">Email</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="text" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>

              <div class="col-md-6">
                <label for="fone" class="form-label h4 text-light">Numéro de téléphone</label>
                <input id="fone" name="fone" type="tel" class="form-control">
              </div>

              <div class="col-md-6">
                <label for="start" class="form-label h4 text-light">Start date</label>
                <input type="date" id="start" name="date" value="2023-01-01" min="2023-01-01" max="2024-12-31" class="form-control">
              </div>

              <div class="col-md-6">
                <label for="appt-time" class="form-label h4 text-light">Choisir une heure</label>
                <input id="time" type="time" name="time" value="13:30" />
              </div>

              <div class="col-md-6">
                <label for="validationCustom03" class="form-label h4 text-light">City</label>
                <input type="text" name="city" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">Please provide a valid city.</div>
              </div>

              <div class="col-md-12">
                <label for="validationTextarea" class="form-label h4 text-light">Textarea</label>
                <textarea class="form-control" name="text_area" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                <div class="invalid-feedback">Please enter a message in the textarea.</div>
              </div>



              <div class="col-12">
                <button class="btn btn-primary" type="submit" value="Enregistrer" name="enregistrer">Submit form</button>
              </div>
            </form>



        </div>
      </div>




    </div>





  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
