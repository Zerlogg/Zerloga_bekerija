<?php

require 'config.php';

if (isset($_SESSION['id'])) {
} else {
 header('location: index.php');
}

if(isset($_POST['order_btn'])){

   $id = $_SESSION["id"]["id"];
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `user_cart` as uc INNER JOIN `products` AS p ON p.id = uc.product_id WHERE user_id = '$id'");
   $price_total = 0;

   if(mysqli_num_rows($cart_query) > 0){
   $product_name = array(); // initialize an empty array
   while($product_item = mysqli_fetch_assoc($cart_query)){
      $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
      $product_price = $product_item['price'] * $product_item['quantity'];
      $price_total += $product_price;

      // Update product quantity in the "products" table
      $escaped_product_name = mysqli_real_escape_string($conn, $product_item['name']);
      $quantity = (int)$product_item['quantity'];
      $sql = "UPDATE products SET total = total + $quantity WHERE name = '$escaped_product_name'";
      $query = mysqli_query($conn, $sql);
   };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$total_product','$price_total')") or die('query failed');


   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Paldies par pirkumu!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : €".$price_total."  </span>
         </div>
         <div class='customer-details'>
            <p> Jūsu vārds: <span>".$name."</span> </p>
            <p> Jūsu numurs: <span>".$number."</span> </p>
            <p> Jūsu e-pasts: <span>".$email."</span> </p>
            <p> Jūsu edrese: <span>".$street.", ".$flat.", ".$city."</span> </p>
            <p> Jūsu apmaksas metode: <span>".$method."</span> </p>
         </div>
            <a href='index.php' class='btn'>Turpināt iepirkties</a>
         </div>
      </div>
      ";
   }

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
   <link rel="stylesheet" href="css/checkout.css">
   <title>Apmaksa</title>

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <form action="" method="post">

      <div class="display-order">
         <?php
            $id = $_SESSION["id"]["id"];
            $select_cart = mysqli_query($conn, "SELECT * FROM `user_cart` as uc INNER JOIN `products` AS p ON p.id = uc.product_id WHERE user_id = '$id'");
            $total = 0;
            $grand_total = 0;
            if(mysqli_num_rows($select_cart) > 0){
               while($fetch_cart = mysqli_fetch_assoc($select_cart)){
               $total_price = $fetch_cart['price'] * $fetch_cart['quantity'];
               $grand_total = $total += $total_price;
         ?>
         <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
         <?php
            }
         }else{
            echo "<div class='display-order'><span>Jūs grozs ir tukšs!</span></div>";
         }
         ?>
         <span class="grand-total"> Kopējā cena: €<?= $grand_total; ?></span>
      </div>

      <div class="flex">
         <div class="inputBox">
            <span>Jūsu vārds</span>
            <input type="text" placeholder="Ievadiet jūsu vārdu" name="name" required>
         </div>
         <div class="inputBox">
            <span>Jūsu numurs</span>
            <input type="number" placeholder="Ievadiet jūsu numuru" name="number" required>
         </div>
         <div class="inputBox">
            <span>Jūsu e-pasts</span>
            <input type="email" placeholder="Ievadiet jūsu e-pastu" name="email" required>
         </div>
         <div class="inputBox">
            <span>Apmaksas veids</span>
            <select name="method">
               <option value="cash on delivery" selected>cash on delivery</option>
               <option value="credit cart">credit cart</option>
               <option value="paypal">paypal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Adrese 1</span>
            <input type="text" placeholder="Ielas nosaukums" name="street" required>
         </div>
         <div class="inputBox">
            <span>Adrese 2</span>
            <input type="text" placeholder="Mājas numurs" name="flat" required>
         </div>
         <div class="inputBox">
            <span>Pilsēta</span>
            <input type="text" placeholder="Pilsētas nosaukums" name="city" required>
         </div>
      </div>
      <input type="submit" value="Pasūtīt" name="order_btn" class="btn">
   </form>

</section>

</div>

<script src="js/script.js"></script>
   
</body>
</html>