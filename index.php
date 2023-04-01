<?php
require 'config.php';
require_once ('./php/component.php');
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
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
    <script src = "js/script.js" defer></script>
    <title>Zerloga beķerija</title>
</head>
<body>
    <header>
        <div class="header_navigation" id="myHeader">
            <a href="./index.php" class="header_logo">
                <img src="images/Logo.png" alt="Beķerijas logo" class="logo">
            </a>

            <div class="navigation">
                <ul>
                    <li><a href="./index.php">Sākums</a></li>
                    <li><a href="#produkti">Produkcija</a></li>
                    <li><a href="#statistika">Statistika</a></li>
                    <li><a href="#beķerejas">Beķerejas</a></li>
                    <li><a href="contact.php">Kontakti</a></li>
                </ul>
            </div>

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
                            if (isset($row['username'])) {
                                echo '<a href="basket.php">Grozs</a>';
                            } else{ 
                                echo '';
                            }
                        ?>
                    </li>
                    <li style="float: left;">
                        <?php
                            if (isset($row['username'])) {
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

    <main class="main">
        <section>
            <div class="welcome">
                <div class="main_description">
                    <h1 style="font-size: 50px; margin-bottom: 30px; animation: main_welcome_text 1.6s; position: relative;">
                    <?php
                        if (isset($row['username'])) {
                            echo 'Esiet sveicināti <br> Zerloga beķerejā, <br>'.$row["username"].'!';
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

        <section class="product_section" id="produkti">
            <div class="product_title">
                <h1> Pats gardākais ko esat redzējuši </h1>
            </div>
                
            <div class="product_menu">
                <div class="category">
                    <p><button onclick="tortes()">Tortes</button></p>
                    <p><button onclick="kukas()"> Kūkas</button></p>
                    <p><button onclick="salas_smalkmaizites()">Sāļās smalkmaizītes</button></p>
                    <p><button onclick="saldas_smalkmaizites()">Saldās smalkmaizītes</button></p>
                    <p><button onclick="platsmaizes()">Plātsmaizes</button></p>
                    <p><button onclick="klingeri()">Kliņģeri</button></p>
                    <p><button onclick="sezonas_gardumi()">Sezonas gardumi</button></p>
                </div>

                <div id="tortes">
                    <div class="products">
                        <div class="product_card">
                            <form action="index.php" method="post">
                                <img src="images/cupcake.png" alt="Zemeņu kekss" style="width:100%">
                                <h1>Zemeņu kekss</h1>
                                <p class="price">€0.99</p>
                                <a data-modal-target="#modal" style="cursor: pointer; text-decoration: underline;">Sastāvdaļas</a>
                                <p style="margin-bottom: auto;"><button>Pievienot grozam</button></p>
                            </form>
                        </div>
                        <div class="product_card">
                            <img src="images/Chocolate_cake.png" alt="Šokolādes kūka" style="width:100%">
                            <h1>Šokolādes kūka</h1>
                            <p class="price">€1.99</p>
                            <a data-modal-target="#chocolate_cake" style="cursor: pointer; text-decoration: underline;">Sastāvdaļas</a>
                            <p style="margin-bottom: auto;"><button type="submit" name="add">Pievienot grozam</button></p>
                        </div>
                        <div class="product_card">
                            <img src="images/cupcake.png" alt="Strawberry cupcake" style="width:100%">
                            <h1>Zemeņu kekss</h1>
                            <p class="price">€1.99</p>
                            <a href="">Sastāvdaļas</a>
                            <p style="margin-bottom: auto;"><button>Pievienot grozam</button></p>
                        </div>
                        <div class="product_card">
                            <img src="images/cupcake.png" alt="Strawberry cupcake" style="width:100%">
                            <h1>Zemeņu kekss</h1>
                            <p class="price">€1.99</p>
                            <a href="">Sastāvdaļas</a>
                            <p style="margin-bottom: auto;"><button>Pievienot grozam</button></p>
                        </div>
                        <div class="product_card">
                            <img src="images/cupcake.png" alt="Strawberry cupcake" style="width:100%">
                            <h1>Zemeņu kekss</h1>
                            <p class="price">€1.99</p>
                            <a href="">Sastāvdaļas</a>
                            <p style="margin-bottom: auto;"><button>Pievienot grozam</button></p>
                        </div>
                    </div>
                </div>

                <div class="modal" id="modal">
                    <div class="modal-header">
                        <div class="title">Zemeņu keksa sastāvdaļas</div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        sas
                    </div>
                </div>
                <div id="overlay"></div>

                <div class="modal" id="chocolate_cake">
                    <div class="modal-header">
                        <div class="title">Šokolādes kūkas sastāvdaļas</div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        sas2
                    </div>
                </div>
                <div id="overlay"></div>

                <div id="kukas" style="display:none;">
                    <div class="products">
                        <div class="product_card">
                            <img src="images/cupcake.png" alt="Strawberry cupcake" style="width:100%">
                            <h1>Zemeņu kekss</h1>
                            <p class="price">€1.99</p>
                            <a href="">Sastāvdaļas</a>
                            <p style="margin-bottom: auto;"><button>Pievienot grozam</button></p>
                        </div>
                        <div class="product_card">
                            <img src="images/cupcake.png" alt="Strawberry cupcake" style="width:100%">
                            <h1>Zemeņu kekss</h1>
                            <p class="price">€1.99</p>
                            <a href="">Sastāvdaļas</a>
                            <p style="margin-bottom: auto;"><button>Pievienot grozam</button></p>
                        </div>
                        <div class="product_card">
                            <img src="images/cupcake.png" alt="Strawberry cupcake" style="width:100%">
                            <h1>Zemeņu kekss</h1>
                            <p class="price">€1.99</p>
                            <a href="">Sastāvdaļas</a>
                            <p style="margin-bottom: auto;"><button>Pievienot grozam</button></p>
                        </div>
                        <div class="product_card">
                            <img src="images/cupcake.png" alt="Strawberry cupcake" style="width:100%">
                            <h1>Zemeņu kekss</h1>
                            <p class="price">€1.99</p>
                            <a href="">Sastāvdaļas</a>
                            <p style="margin-bottom: auto;"><button>Pievienot grozam</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="statistics_section" id="statistika">
            <div class="statistics_title">
                <h1>Kas mūsu klientiem garšo vislabāk </h1>
            </div>

            <div class="statistics_table">
                <div>
                    <p><button>Statistika</button></p>
                </div>
            </div>
        </section>

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
                                <p class="bakery_card_description">Ģertrūdes iela 92-98</p>
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
                        <iframe src="https://my.atlistmaps.com/map/9f81aa86-1463-4282-a431-24403d257279?share=true" allow="geolocation" width="650px" height="505px" frameborder="0" scrolling="no" allowfullscreen></iframe>
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
</body>
</html>