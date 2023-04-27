<section class="products" id="produkti">
            <div class="product_title">
                <h1> Pats gardākais ko esat redzējuši </h1>
            </div>
                
            <div class="product_menu">
                <div class="category">
                    <p><button onclick="tortes()">Tortes</button></p>
                    <p><button onclick="smalkmaizites()">Smalkmaizītes</button></p>
                    <p><button onclick="piragi()">Pīrāgi</button></p>
                    <p><button onclick="klingeri()">Kliņģeri</button></p>
                    <p><button onclick="kukas()">Kūkas</button></p>
                    <p><button onclick="ruletes()">Ruletes</button></p>
                    <p><button onclick="platsmaizes()">Plātsmaizes</button></p>
                </div>

                <div id="overlay"></div>
                
                <div id="tortes">
                    <div class="product_info">
                        <?php
                            $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Torte'");
                            if(mysqli_num_rows($select_products) > 0){
                                while($fetch_product = mysqli_fetch_assoc($select_products)){
                        ?>
                        <form action="" method="post">
                            <div class="product_card">
                                <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:100%">
                                <h1><?php echo $fetch_product['name']; ?></h1>
                                <p class="price">€<?php echo $fetch_product['price']; ?></p>
                                <a data-modal-target="#product_<?php echo $fetch_product['id']; ?>" style="cursor: pointer; text-decoration: underline;">Sastāvdaļas</a>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                                <p style="margin-bottom: auto;"><button type="submit" value="add to cart" name="add_to_cart" class="<?= (isset($_SESSION['id']))?'':'disabled'; ?>">Pievienot grozam</button></p>
                            </div>
                        </form>

                        <div class="modal" id="product_<?php echo $fetch_product['id']; ?>">
                            <div class="modal-header">
                                <div class="title">Sastāvdaļas</div>
                                <button data-close-button class="close-button">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $fetch_product['description']; ?></p>
                            </div>
                        </div>
                        <?php
                            };
                        };
                        ?>
                    </div>
                </div>

                <div id="smalkmaizites" style="display:none;">
                    <div class="product_info">
                        <?php
                            $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Smalkmaizīte'");
                            if(mysqli_num_rows($select_products) > 0){
                                while($fetch_product = mysqli_fetch_assoc($select_products)){
                        ?>
                        <form action="" method="post">
                            <div class="product_card">
                                <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:100%">
                                <h1><?php echo $fetch_product['name']; ?></h1>
                                <p class="price">€<?php echo $fetch_product['price']; ?></p>
                                <a data-modal-target="#product_<?php echo $fetch_product['id']; ?>" style="cursor: pointer; text-decoration: underline;">Sastāvdaļas</a>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                                <p style="margin-bottom: auto;"><button type="submit" value="add to cart" name="add_to_cart" class="<?= (isset($_SESSION['id']))?'':'disabled'; ?>">Pievienot grozam</button></p>
                            </div>
                        </form>

                        <div class="modal" id="product_<?php echo $fetch_product['id']; ?>">
                            <div class="modal-header">
                                <div class="title">Sastāvdaļas</div>
                                <button data-close-button class="close-button">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $fetch_product['description']; ?></p>
                            </div>
                        </div>
                        <?php
                            };
                        };
                        ?>
                    </div>
                </div>

                <div id="piragi" style="display:none;">
                    <div class="product_info">
                        <?php
                            $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Pīrāgs'");
                            if(mysqli_num_rows($select_products) > 0){
                                while($fetch_product = mysqli_fetch_assoc($select_products)){
                        ?>
                        <form action="" method="post">
                            <div class="product_card">
                                <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:100%">
                                <h1><?php echo $fetch_product['name']; ?></h1>
                                <p class="price">€<?php echo $fetch_product['price']; ?></p>
                                <a data-modal-target="#product_<?php echo $fetch_product['id']; ?>" style="cursor: pointer; text-decoration: underline;">Sastāvdaļas</a>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                                <p style="margin-bottom: auto;"><button type="submit" value="add to cart" name="add_to_cart" class="<?= (isset($_SESSION['id']))?'':'disabled'; ?>">Pievienot grozam</button></p>
                            </div>
                        </form>

                        <div class="modal" id="product_<?php echo $fetch_product['id']; ?>">
                            <div class="modal-header">
                                <div class="title">Sastāvdaļas</div>
                                <button data-close-button class="close-button">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $fetch_product['description']; ?></p>
                            </div>
                        </div>
                        <?php
                            };
                        };
                        ?>
                    </div>
                </div>

                <div id="klingeri" style="display:none;">
                    <div class="product_info">
                        <?php
                            $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Kliņģeris'");
                            if(mysqli_num_rows($select_products) > 0){
                                while($fetch_product = mysqli_fetch_assoc($select_products)){
                        ?>
                        <form action="" method="post">
                            <div class="product_card">
                                <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:100%">
                                <h1><?php echo $fetch_product['name']; ?></h1>
                                <p class="price">€<?php echo $fetch_product['price']; ?></p>
                                <a data-modal-target="#product_<?php echo $fetch_product['id']; ?>" style="cursor: pointer; text-decoration: underline;">Sastāvdaļas</a>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                                <p style="margin-bottom: auto;"><button type="submit" value="add to cart" name="add_to_cart" class="<?= (isset($_SESSION['id']))?'':'disabled'; ?>">Pievienot grozam</button></p>
                            </div>
                        </form>

                        <div class="modal" id="product_<?php echo $fetch_product['id']; ?>">
                            <div class="modal-header">
                                <div class="title">Sastāvdaļas</div>
                                <button data-close-button class="close-button">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $fetch_product['description']; ?></p>
                            </div>
                        </div>
                        <?php
                            };
                        };
                        ?>
                    </div>
                </div>

                <div id="kukas" style="display:none;">
                    <div class="product_info">
                        <?php
                            $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Kūka'");
                            if(mysqli_num_rows($select_products) > 0){
                                while($fetch_product = mysqli_fetch_assoc($select_products)){
                        ?>
                        <form action="" method="post">
                            <div class="product_card">
                                <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:100%">
                                <h1><?php echo $fetch_product['name']; ?></h1>
                                <p class="price">€<?php echo $fetch_product['price']; ?></p>
                                <a data-modal-target="#product_<?php echo $fetch_product['id']; ?>" style="cursor: pointer; text-decoration: underline;">Sastāvdaļas</a>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                                <p style="margin-bottom: auto;"><button type="submit" value="add to cart" name="add_to_cart" class="<?= (isset($_SESSION['id']))?'':'disabled'; ?>">Pievienot grozam</button></p>
                            </div>
                        </form>

                        <div class="modal" id="product_<?php echo $fetch_product['id']; ?>">
                            <div class="modal-header">
                                <div class="title">Sastāvdaļas</div>
                                <button data-close-button class="close-button">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $fetch_product['description']; ?></p>
                            </div>
                        </div>
                        <?php
                            };
                        };
                        ?>
                    </div>
                </div>

                <div id="ruletes" style="display:none;">
                    <div class="product_info">
                        <?php
                            $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Rulete'");
                            if(mysqli_num_rows($select_products) > 0){
                                while($fetch_product = mysqli_fetch_assoc($select_products)){
                        ?>
                        <form action="" method="post">
                            <div class="product_card">
                                <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:100%">
                                <h1><?php echo $fetch_product['name']; ?></h1>
                                <p class="price">€<?php echo $fetch_product['price']; ?></p>
                                <a data-modal-target="#product_<?php echo $fetch_product['id']; ?>" style="cursor: pointer; text-decoration: underline;">Sastāvdaļas</a>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                                <p style="margin-bottom: auto;"><button type="submit" value="add to cart" name="add_to_cart" class="<?= (isset($_SESSION['id']))?'':'disabled'; ?>">Pievienot grozam</button></p>
                            </div>
                        </form>

                        <div class="modal" id="product_<?php echo $fetch_product['id']; ?>">
                            <div class="modal-header">
                                <div class="title">Sastāvdaļas</div>
                                <button data-close-button class="close-button">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $fetch_product['description']; ?></p>
                            </div>
                        </div>
                        <?php
                            };
                        };
                        ?>
                    </div>
                </div>

                <div id="platsmaizes" style="display:none;">
                    <div class="product_info">
                        <?php
                            $select_products = mysqli_query($conn, "SELECT * FROM products WHERE category = 'Plātsmaize'");
                            if(mysqli_num_rows($select_products) > 0){
                                while($fetch_product = mysqli_fetch_assoc($select_products)){
                        ?>
                        <form action="" method="post">
                            <div class="product_card">
                                <img src="images/<?php echo $fetch_product['image']; ?>" alt="" style="width:100%">
                                <h1><?php echo $fetch_product['name']; ?></h1>
                                <p class="price">€<?php echo $fetch_product['price']; ?></p>
                                <a data-modal-target="#product_<?php echo $fetch_product['id']; ?>" style="cursor: pointer; text-decoration: underline;">Sastāvdaļas</a>
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
                                <p style="margin-bottom: auto;"><button type="submit" value="add to cart" name="add_to_cart" class="<?= (isset($_SESSION['id']))?'':'disabled'; ?>">Pievienot grozam</button></p>
                            </div>
                        </form>

                        <div class="modal" id="product_<?php echo $fetch_product['id']; ?>">
                            <div class="modal-header">
                                <div class="title">Sastāvdaļas</div>
                                <button data-close-button class="close-button">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $fetch_product['description']; ?></p>
                            </div>
                        </div>
                        <?php
                            };
                        };
                        ?>
                    </div>
                </div>
            </div>
</section>