// La connection à la base de donnée
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "restaurant";

try {
  $conn = new mysqli($servername, $username, $password, $dbname);
  $conn->options(MYSQLI_INIT_COMMAND, "--default-auth=mysql_native_password");

  if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
  }

  echo "la connexion a été bien établie";

  if (isset($_POST['envoyer'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $city = $_POST['city'];
    $text_area = $_POST['text_area'];

    $sql = "INSERT INTO `back_office`(`first_name`, `last_name`, `email`, `fone`, `date`, `time`, `city`, `text_area`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('ssssssss', $first_name, $last_name, $email, $fone, $date, $time, $city, $text_area);
    $stmt->execute();
    $stmt->close();
  }
} catch (Exception $e) {
  echo "La connexion a échoué : " . $e->getMessage();
}

?>





// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "restaurant";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "la connexion a ete bien etablie";
// } catch (PDOException $e) {
//     echo "la connexion a echoué:" . $e->getMessage();
// }

// if (isset($_POST['envoyer'])) {
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $email = $_POST['email'];
//     $fone = $_POST['fone'];
//     $date = $_POST['date'];
//     $time = $_POST['time'];
//     $city = $_POST['city'];
//     $text_area = $_POST['text_area'];


//     $sql = ("INSERT INTO `back_office`(`first_name`, `last_name`, `email`, `fone`, `date`, `time`, `city`, `text_area`) VALUES (:first_name, :last_name, :email, :fone, :date, :time, :city, :text_area)");
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(':first_name', $first_name);
//     $stmt->bindParam(':last_name', $last_name);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':fone', $fone);
//     $stmt->bindParam(':date', $date);
//     $stmt->bindParam(':time', $time);
//     $stmt->bindParam(':city', $city);
//     $stmt->bindParam(':text_area', $text_area);


//     $stmt->execute();
//     //pour changer deux ou plus dans une seul fois clique sur ctrl +d
// }