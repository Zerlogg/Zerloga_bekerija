<section class="statistics_section" id="statistika">
    <div class="statistics_title">
        <h1>Kas mūsu klientiem garšo vislabāk </h1>

        <?php
            echo $first_day_this_month = date('01.m.Y'), " - ";
            echo $last_day_this_month  = date('t.m.Y');
        ?>
    </div>

    <div class="statistics_table">
        <div class="statistics_category">
            <p><button onclick="tortes_statistika()">Tortes</button></p>
            <p><button onclick="smalkmaizites_statistika()">Smalkmaizītes</button></p>
            <p><button onclick="piragi_statistika()">Pīrāgi</button></p>
            <p><button onclick="klingeri_statistika()">Kliņģeri</button></p>
            <p><button onclick="kukas_statistika()">Kūkas</button></p>
            <p><button onclick="ruletes_statistika()">Ruletes</button></p>
            <p><button onclick="platsmaizes_statistika()">Plātsmaizes</button></p>
        </div>

        <div id="tortes_statistika">
            <div class="statistics_info">
                <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Torte'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                ?>

                <div class="statistics_card">
                    <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:150px; height:125px; margin-top: 18px;">
                    <div class="statistics_card_info">
                        <h1><?php echo $fetch_product['name']; ?></h1>
                        <p class="price">€<?php echo $fetch_product['price']; ?></p>
                    </div>
                    <div class="statistics_card_info">
                        <h1>Produkta iegādes skaits</h1>
                        <p class="statistics_product_count">1</p>
                    </div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                </div>

                <?php
                    };
                };
                ?>
            </div>
        </div>

        <div id="smalkmaizites_statistika" style="display:none;">
            <div class="statistics_info">
                <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Smalkmaizīte'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                ?>

                <div class="statistics_card">
                    <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:150px; height:125px;">
                    <div class="statistics_card_info">
                        <h1><?php echo $fetch_product['name']; ?></h1>
                        <p class="price">€<?php echo $fetch_product['price']; ?></p>
                    </div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                </div>

                <?php
                    };
                };
                ?>
            </div>
        </div>

        <div id="piragi_statistika" style="display:none;">
            <div class="statistics_info">
                <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Pīrāgs'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                ?>

                <div class="statistics_card">
                    <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:150px; height:125px;">
                    <div class="statistics_card_info">
                        <h1><?php echo $fetch_product['name']; ?></h1>
                        <p class="price">€<?php echo $fetch_product['price']; ?></p>
                    </div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                </div>

                <?php
                    };
                };
                ?>
            </div>
        </div>

        <div id="klingeri_statistika" style="display:none;">
            <div class="statistics_info">
                <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Kliņģeris'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                ?>

                <div class="statistics_card">
                    <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:150px; height:125px;">
                    <div class="statistics_card_info">
                        <h1><?php echo $fetch_product['name']; ?></h1>
                        <p class="price">€<?php echo $fetch_product['price']; ?></p>
                    </div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                </div>

                <?php
                    };
                };
                ?>
            </div>
        </div>

        <div id="kukas_statistika" style="display:none;">
            <div class="statistics_info">
                <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Kūka'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                ?>

                <div class="statistics_card">
                    <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:150px; height:125px;">
                    <div class="statistics_card_info">
                        <h1><?php echo $fetch_product['name']; ?></h1>
                        <p class="price">€<?php echo $fetch_product['price']; ?></p>
                    </div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                </div>

                <?php
                    };
                };
                ?>
            </div>
        </div>

        <div id="ruletes_statistika" style="display:none;">
            <div class="statistics_info">
                <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Rulete'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                ?>

                <div class="statistics_card">
                    <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:150px; height:125px;">
                    <div class="statistics_card_info">
                        <h1><?php echo $fetch_product['name']; ?></h1>
                        <p class="price">€<?php echo $fetch_product['price']; ?></p>
                    </div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                </div>

                <?php
                    };
                };
                ?>
            </div>
        </div>

        <div id="platsmaizes_statistika" style="display:none;">
            <div class="statistics_info">
                <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Plātsmaize'");
                    if(mysqli_num_rows($select_products) > 0){
                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                ?>

                <div class="statistics_card">
                    <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:150px; height:125px;">
                    <div class="statistics_card_info">
                        <h1><?php echo $fetch_product['name']; ?></h1>
                        <p class="price">€<?php echo $fetch_product['price']; ?></p>
                    </div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                </div>

                <?php
                    };
                };
                ?>
            </div>
        </div>
    </div>
</section>