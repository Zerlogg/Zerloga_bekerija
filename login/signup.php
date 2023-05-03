<?php
require '../config.php';
if(!empty($_SESSION["id"])){
  header("Location: ../index.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    $_SESSION['message'] = 'Šis lietotājvārds jau ir aizņemts!';
    header("Location: ../login.php");
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$email','$username','$password')";
      mysqli_query($conn, $query);
      echo
      $_SESSION['message'] = 'Reģistrācija veiksmīga';
      header("Location: ../header.php");
    }
    else{
      echo
      $_SESSION['message'] = 'Parole nesakrīt';
      header("Location: ../login.php");
    }
  }
}
?>