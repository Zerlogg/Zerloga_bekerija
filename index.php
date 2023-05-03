<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"]["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['add_to_cart'])){

    $product_id = $_POST['product_id'];
    $id = $_SESSION["id"]['id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `user_cart` WHERE user_id = '$id' AND product_id = '$product_id'");
 
    if(mysqli_num_rows($select_cart) > 0){
        $message[] = 'Prece jau ir pievienota grozam';
    }else{
        $sql = "INSERT INTO `user_cart`(`user_id`, `product_id`, `quantity`) VALUES ('$id','$product_id', '$product_quantity')";
        $insert_product = mysqli_query($conn, $sql);
        $message[] = 'Prece tika veiksmīgi pievienota';
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
    <link rel="stylesheet" href="css/index.css">
    <title>Zerloga beķerija</title>
</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i></div>';
   };
};

?>

    <?php include 'header.php'; ?>

    <main class="main">
        <section>
            <div class="welcome">
                <div class="main_description">
                    <h1 style="font-size: 50px; margin-bottom: 30px; animation: main_welcome_text 1.6s; position: relative;">
                    <?php
                        if (isset($_SESSION['id'])) {
                            echo 'Esiet sveicināti <br> Zerloga beķerejā, <br>'.$_SESSION['id']['username'].'!';
                        } else{
                            echo 'Esiet sveicināti <br> Zerloga beķerejā!';
                        }
                    ?>
                    </h1>

                    <p style="margin: 0px; animation: second_welcome_text 1.8s; position: relative;">
                        Šeit jūs varēsiet atrast pašus <br>
                        svaigākos un gardākos <br>
                        maizes izstrādājumus no visas <br>
                        Latvijas. Varat apciemot mūsu <br>
                        konditoreju vai arī pasūtīt <br>
                        produkciju uz mājām vai ofisu.
                    </p>
                </div>

                <div class="slider_section">
                    <div class="slider">
                        <div class="slide">
                            <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4">
                            <input type="radio" name="radio-btn" id="radio5">
                            <input type="radio" name="radio-btn" id="radio6">
                            <input type="radio" name="radio-btn" id="radio7">
                    
                            <div class="st first">
                                <img src="images/Chocolate_cake.png" alt="">
                                <img src="images/cinamon_bun.png" alt="">
                                <img src="images/cupcake.png" alt="">
                            </div>
                    
                            <div class="st">
                                <img src="images/Ear_bun.png" alt="">
                                <img src="images/Pastry.png" alt="">
                                <img src="images/Chocolate_cake_big.png" alt="">
                            </div>
                    
                            <div class="st">
                                <img src="images/Tart.png" alt="">
                                <img src="images/yellow_bun.png" alt="">
                                <img src="images/Roll.png" alt="">
                            </div>
                    
                            <div class="nav-auto">
                                <div class="a-b1"></div>
                                <div class="a-b2"></div>
                                <div class="a-b3"></div>
                                <div class="a-b4"></div>
                                <div class="a-b5"></div>
                                <div class="a-b6"></div>
                                <div class="a-b7"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'products.php'; ?>            
        
        <?php include 'statistic.php'; ?>

        <section class="bakery_section" id="beķerejas">
            <div class="bakery_title">
                <h1>Informācija par mūsu beķerijām </h1>
            </div>
            <div class="bakery_all_info">
                <div class="bakery_info">
                    <div class="scene scene--bakery_card">
                        <div class="bakery_card">
                            <div class="bakery_face bakery_face_bakerys">
                                <h1>Beķerejas</h1>
                                <p class="bakery_card_description">Miķeļa iela 3</p>
                                <p class="bakery_card_description">Dzirnavu iela 105</p>
                                <p class="bakery_card_description">Ģertrūdes iela 92</p>
                                <p class="bakery_card_description">Zaubes iela 9a</p>
                                <p class="bakery_card_description">Artilērijas iela 58</p>
                                <p class="bakery_card_description">Zirņu iela 73</p>
                                <p style="text-decoration: underline;">Uzspiediet, lai pagrieztu otru pusi</p>
                            </div>
                            <div class="bakery_face bakery_face_work_time">
                                <h1>Darba laiki</h1>
                                <p class="bakery_card_description">Pirmdiena: 8:30 - 19:00</p>
                                <p class="bakery_card_description">Otrdiena: 8:30 - 19:00</p>
                                <p class="bakery_card_description">Trešdiena: 8:30 - 19:00</p>
                                <p class="bakery_card_description">Ceturtdiena: 8:30 - 19:00</p>
                                <p class="bakery_card_description">Piektdiena: 8:30 - 19:00</p>
                                <p class="bakery_card_description">Sestdiena: 8:30 - 18:00</p>
                                <p class="bakery_card_description">Svētdiena: 8:30 - 18:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bakery_map">
                    <p style="border-style: solid; border-width: 1px 1px 1px 1px; border-radius: 2px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1257.0108246141442!2d24.119453702447913!3d56.949184401734286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfd30e06d6bb%3A0xed4389f0e7bedbed!2sSubway!5e0!3m2!1slv!2slv!4v1682782180391!5m2!1slv!2slv" width="650px" height="505px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer class="page_footer">
        <div class="footer_logo">
            <img src="images/Logo.png" alt="Beķerijas logo" class="logo">
        </div>

        <div class="footer_info">
            <div class="footer_contact">
                <a href=""> zerloga@bekerija.lv </a>
                <a href=""> +317 20 417 595 </a>
            </div>
                <p>©Zerloga bekereja 2023</p>
            <div class="footer_media">
                <a href=""> Instagram </a>
                <a href=""> Facebook </a>
            </div>
        </div>
    </footer>
    
    <script src = "js/script.js" defer></script>
</body>
</html>