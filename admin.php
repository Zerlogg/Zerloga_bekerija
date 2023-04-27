<?php

require 'config.php';

if (isset($_SESSION['id'])) {
   if ($_SESSION['id']['admin'] === '0') {
     header('location: index.php');
   }
 } else {
  header('location: index.php');
 }

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_description = $_POST['p_description'];
   $p_category = $_POST['p_category'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'images/'.$p_image;

   $insert_query = mysqli_query($conn, "INSERT INTO `products`(name, price, description, category, image) VALUES('$p_name', '$p_price', '$p_description', '$p_category', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'Produkts tika veiksmīgi pievienots';
   }else{
      $message[] = 'Nevarēja pievienot produktu';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:admin.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:admin.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_description = $_POST['update_p_description'];
   $update_p_category = $_POST['update_p_category'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'images/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `products` SET name = '$update_p_name', price = '$update_p_price', description = '$update_p_description', category = '$update_p_category', image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:admin.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:admin.php');
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
   <link rel="stylesheet" href="css/admin.css">
   <title>Pievienot preci</title>
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

   <?php include 'header.php'; ?>

<div class="container">

   <section>

   <form action="" method="post" class="add_product" enctype="multipart/form-data">
      <h3>Pievienot jaunu produktu</h3>
      <input type="text" name="p_name" placeholder="Ievadiet preces nosaukumu" class="box" required>
      <input type="number" step="0.01" name="p_price" min="0" placeholder="Ievadiet preces cenu" class="box" required>
      <input type="text" name="p_description" placeholder="Ievadiet preces aprakstu" class="box" required>
      <select class="box" name="p_category">
         <option value="Torte">Torte</option>
         <option value="Smalkmaizīte">Smalkmaizīte</option>
         <option value="Pīrāgs">Pīrāgs</option>
         <option value="Kliņģeris">Kliņģeris</option>
         <option value="Kūka">Kūka</option>
         <option value="Rulete">Rulete</option>
         <option value="Plātsmaize">Plātsmaize</option>
      </select>
      <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
      <input type="submit" value="Pievienot produktu" name="add_product" class="btn">
   </form>

   </section>

   <section class="display-product-table">

      <table>

         <thead>
            <th>Preces attēls</th>
            <th>Preces nosaukums</th>
            <th>Preces cena</th>
            <th>Preces apraksts</th>
            <th>Preces kategorija</th>
            <th>Darbība ar preci</th>
         </thead>

         <tbody>
            <?php
            
               $select_products = mysqli_query($conn, "SELECT * FROM `products`");
               if(mysqli_num_rows($select_products) > 0){
                  while($row = mysqli_fetch_assoc($select_products)){
            ?>

            <tr>
               <td><img src="images/<?php echo $row['image']; ?>" height="100" alt=""></td>
               <td><?php echo $row['name']; ?></td>
               <td>€<?php echo $row['price']; ?></td>
               <td><?php echo $row['description']; ?></td>
               <td><?php echo $row['category']; ?></td>
               <td>
                  <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn"> <i class="fas fa-trash"></i> Dzēst </a>
                  <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> Atjaunot </a>
               </td>
            </tr>

            <?php
               };    
               }else{
                  echo "<div class='empty'>no product added</div>";
               };
            ?>
         </tbody>
      </table>

   </section>

   <section class="edit-form-container">

      <?php
      
      if(isset($_GET['edit'])){
         $edit_id = $_GET['edit'];
         $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
         if(mysqli_num_rows($edit_query) > 0){
            while($fetch_edit = mysqli_fetch_assoc($edit_query)){
      ?>

      <form action="" method="post" enctype="multipart/form-data">
         <img src="images/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
         <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
         <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
         <input type="number" min="0" step="0.01" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
         <input type="text" class="box" required name="update_p_description" value="<?php echo $fetch_edit['description']; ?>">
         <select class="box" required name="update_p_category">
            <option value="Torte">Torte</option>
            <option value="Smalkmaizīte">Smalkmaizīte</option>
            <option value="Pīrāgs">Pīrāgs</option>
            <option value="Kliņģeris">Kliņģeris</option>
            <option value="Kūka">Kūka</option>
            <option value="Rulete">Rulete</option>
            <option value="Plātsmaize">Plātsmaize</option>
         </select>
         <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
         <input type="submit" value="Atjaunot produktu" name="update_product" class="btn">
      </form>

      <?php
               };
            };
            echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
         };
      ?>

   </section>

</div>

<script src = "js/script.js" defer></script>

</body>
</html>