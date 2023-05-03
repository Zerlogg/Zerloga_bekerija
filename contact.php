<?php
require 'config.php';
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
    <link rel="stylesheet" href="css/contact.css">
    <script src = "js/script.js" defer></script>
    <title>Document</title>
</head>
<body>
    
    <?php include 'header.php'; ?>

    <main class="main">
        <section style="margin-top: 30px;">
            <div class="contacts">
                <div class="contact_info">
                    <h1 style="font-size:26px;">Atnāc ciemos</h1>
                    <p style="font-size:20px; margin: 16px 0px;">Gaidīsim jūs mūsu kafejnīcā Rīgā, <br>
                    Matīsa ielā 40/42. Ja maltīti vēlaties <br>
                    baudīt birojā vai mājās, piezvaniet <br>
                    mums, lai vienotos par ērtāko <br>
                    pasūtījuma piegādes laiku un vietu.
                    </p>
                    
                    <div class="email">
                        <img src="images/mail_icon.png" alt="e-pasta logo" class="email_logo">
                        <p style="font-size:20px; padding-left: 10px; margin: 10px 0px;">zerloga@bekerija.lv</p>
                    </div>
                    <div class="phone_number">
                        <img src="images/telephone_icon.png" alt="telefona logo" class="telephone_logo">
                        <p style="font-size:20px; padding-left: 10px; margin: 10px 0px;">+317 20 417 595</p>
                    </div>
                </div>

                <form action="phpmailer/mailer.php" method="POST">
                    <div class="contact_form">
                        <h1 style="font-size:26px;">Sazinies ar mums</h1>
                        <div class="contact_email_subject">
                            <input type="email" name="contact_email" placeholder="E-pasts" class="c_email" required>
                            <input type="text" name="contact_subject" placeholder="Tēma" class="c_subject" required>
                        </div>
                        <div class="contact_message_form">
                            <textarea name="contact_message" placeholder="Ziņojums" class="c_message" required></textarea>
                        </div>
                        <button class="contact_button">Nosūtīt</button>
                    </div>
                </form>
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
</body>
</html>