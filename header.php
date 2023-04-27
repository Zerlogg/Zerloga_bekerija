<header class="header">
      <div class="header_navigation" id="myHeader">
         <a href="./index.php" class="header_logo">
             <img src="images/Logo.png" alt="Beķerijas logo" class="logo">
         </a>

         <div class="navbar">
             <ul>
                 <li><a href="./index.php">Sākums</a></li>
                 <li><a href="#produkti">Produkcija</a></li>
                 <li><a href="#statistika">Statistika</a></li>
                 <li><a href="#beķerejas">Beķerejas</a></li>
                 <li>
                     <?php
                         if (isset($_SESSION['id'])) {
                             if ($_SESSION['id']['admin'] === '1') {
                                 echo '<a href="admin.php">Pievienot produktu</a>';
                             } else { 
                                 echo '<a href="contact.php">Kontakti</a>';
                             }
                         } else {
                             echo '<a href="contact.php">Kontakti</a>';
                         }
                     ?>
                 </li>
             </ul>
         </div>

        <?php
        if (isset($_SESSION['id'])) {
                $id = $_SESSION["id"]["id"];
                $select_rows = mysqli_query($conn, "SELECT * FROM `user_cart` WHERE user_id = '$id'") or die('query failed');
                $row_count = mysqli_num_rows($select_rows);
        }
        ?>

         <div class="language">
             <ul>
                 <li style="float:right"><a class="active" href="#about">ENG</a></li>
                 <li style="float:right"><a class="active" href="#about">RU</a></li>
                 <li style="float:right"><a class="active" href="#about">LV</a></li>
             </ul>
         </div>

         <div class="registration">
             <ul>
                 <li style="padding-right: 30px;">
                    <?php
                        if (isset($_SESSION['id'])) {
                            echo '<a href="cart.php" class="cart">Grozs</a>';
                            if ($row_count >= 1) {
                    ?>
                                <a class="product_count"><?php echo ' ', $row_count;?></a>
                    <?php
                            } else {
                                echo '';
                            }
                        }
                     ?>
                 </li>
                 <li style="float: left;">
                     <?php
                         if (isset($_SESSION['id'])) {
                             echo '<a href="login/logout.php">Iziet</a>';
                         } else{ 
                             echo '<a class="active" href="login.php">Ienākt</a>';
                         }
                     ?>
                 </li>
             </ul>
         </div>
     </div>
</header>