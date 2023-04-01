<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: ./");
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
    <link rel="stylesheet" href="css/login.css">
    <script src = "js/script.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header_navigation">
            <a href="./index.php" class="header_logo">
                <img src="images/Logo.png" alt="Beķerijas logo" class="logo">
            </a>
        </div>
    </header>

    <main class="main">
        <form action="login/signup.php" method="post" autocomplete="off">
            <div id="registration" style="display:none;">
                <h1>Reģistrācija</h1>
                <div class="signin_option">
                    <p>Profils jau izveidots? <a style="text-decoration: underline; cursor: pointer;" onclick="pieslegties()">Pieslēgties</a>.</p>
                </div>
                
                <hr style="margin-bottom: 30px">
                <label for="username"><b>Lietotājvārds</b></label>
                <input type="text" placeholder="Ievadiet lietotājvārdu" name="username" id="username" required value="">

                <label for="email"><b>E-pasts</b></label>
                <input type="email" placeholder="Ievadiet e-pastu" name="email" id="email" required value="" style="">
            
                <label for="password"><b>Parole</b></label>
                <input type="password" placeholder="Ievadiet paroli" name="password" id="password" required value="">
            
                <label for="confirmpassword"><b>Atkārtojiet paroli</b></label>
                <input type="password" placeholder="Ievadiet paroli vēlreiz" name="confirmpassword" id="confirmpassword" required value="" onpaste="return false;">

                <hr>
                <p>Veidojot profilu jūs piekrītat <a href="" style="color: black;">lietošanas un privātuma noteikumiem</a>.</p>
                <button class="registration_button" type="submit" name="submit">Reģistrēties</button>
            </div>
        </form>

        <form action="login/signin.php" method="post" autocomplete="off">
            <div id="signin" style="margin-top: 60px;">
                <h1>Pieslēgties</h1>
                <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="msg"> ' . $_SESSION['message'] .'</p>';
                }
                unset($_SESSION['message']);
                ?>
                
                <div class="registration_option">
                    <p>Neesiet vēl reģistrējušies? <a style="color: black; cursor: pointer; text-decoration: underline;" onclick="registreties()">Reģistrēties</a>.</p>
                </div>
                <hr style="margin-bottom: 30px">

                <label for="usernameemail"><b>Lietotājvārds vai e-pasts</b></label>
                <input type="text" placeholder="Ievadiet lietotājvārdu vai e-pastu" name="usernameemail" id = "usernameemail" required value="">
            
                <label for="password"><b>Parole</b></label>
                <input type="password" placeholder="Ievadiet paroli" name="password" id ="password" required value="">
                <hr>
                
                <p><a style="color: black; cursor: pointer; text-decoration: underline;" onclick="atjaunot_paroli()">Aizmirsāt lietotājvārdu un paroli</a>?</p>
                <button  class="signin_button" type="submit" name="submit">Pieslēgties</button>
            </div>
        </form>

          <div id="change_password" style="display:none; margin-top: 80px;">
                <h1>Atjaunot paroli</h1>
                <p>Ievadiet e-pastu, lai atjaunotu paroli.</p>
                <hr>

                <label for="e-pasts"><b>E-pasts</b></label>
                <input type="text" placeholder="Ievadiet e-pastu" name="e-pasts" id="email" required onpaste="return false;">
                <hr>
            
                <button type="submit" class="change_button" onclick="mainit_paroli()">Atjaunot</button>
          </div>

        <form action="login.php">
            <div id="new_password" style="display:none; margin-top: 70px;">
                <h1>Mainīt paroli</h1>
                <p>Ievadiet jauno paroli jūsu profilam.</p>
                <hr>

                <label for="parole"><b>Parole</b></label>
                <input type="password" placeholder="Ievadiet paroli" name="parole" id="password" required onpaste="return false;">
          
                <label for="atkartota-parole"><b>Atkārtojiet paroli</b></label>
                <input type="password" placeholder="Ievadiet paroli vēlreiz" name="atkartota-parole" id="password_repeat" required onpaste="return false;">
                <hr>
          
                <button type="submit" class="new_password_button">Mainīt</button>
            </div>
        </form>
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
</body>
</html>