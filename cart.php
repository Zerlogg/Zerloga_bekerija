<?php

require 'config.php';
$id = $_SESSION["id"]["id"];

if (isset($_SESSION['id'])) {
 } else {
  header('location: index.php');
 }

if(isset($_POST['update_update_btn'])){
   $id = $_SESSION["id"]["id"];
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `user_cart` SET `quantity` = '$update_value' WHERE `product_id` = '$update_id' AND `user_id` = '$id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `user_cart` WHERE product_id = '$remove_id' AND user_id = '$id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `user_cart` WHERE user_id = '$id'");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/cart.css">
   <title>Grozs</title>

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <th>Attēls</th>
         <th>Nosaukums</th>
         <th>Cena</th>
         <th>Daudzums</th>
         <th>Kopējā cena</th>
         <th>Dzēst</th>
      </thead>

      <tbody>

         <?php 
         $id = $_SESSION["id"]["id"];
         $select_cart = mysqli_query($conn, "SELECT * FROM user_cart as uc INNER JOIN products as p on p.id = uc.product_id INNER JOIN tb_user as u on u.id = uc.user_id WHERE u.id = '$id'");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="images/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>€<?php echo ($fetch_cart['price']); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['product_id']; ?>" >
                  <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="Atjaunot" name="update_update_btn">
               </form>   
            </td>
            <td>€<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['product_id']; ?>" class="delete-btn"> <i class="fas fa-trash"></i>Dzēst</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <form action="checkout.php" method="POST">
            <tr class="table-bottom">
               <th class="checkout-btn"><a href="checkout.php" class="btn <?= ($grand_total > 0.01)?'':'disabled'; ?>" style="margin-top: 0;">Apmaksāt</a></th>
               <th colspan="3">Kopējā summa</th>
               <th>€<?php echo $grand_total; ?></th>
               <th><a href="cart.php?delete_all" class="delete-btn"> <i class="fas fa-trash"></i>Dzēst visu</a></th>
            </tr> 
         </form>
      </tbody>

   </table>

</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>