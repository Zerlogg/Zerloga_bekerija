<?php
require '../config.php';
if(!empty($_SESSION["id"])){
  header("Location: ../index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password === $row['password']){
      $_SESSION["login"] = true;
      $_SESSION['id'] = [
        'id' => $row['id'],
        'username' => $row['username'],
        'admin' => $row['admin']];
      header("Location: ../index.php");
    }
    else{
      echo
      $_SESSION['message'] = 'Wrong password';
      header("Location: ../login.php");
    }
  }
  else{
    echo
    $_SESSION['message'] = 'User Not Registered';
    header("Location: ../login.php");
  }
}
?>