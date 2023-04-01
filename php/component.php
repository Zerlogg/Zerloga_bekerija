<?php

function component($productname, $productprice, $productimg, $productid)
{
    $element='
    
    <div class="product_card">
        <form action="index.php" method="post">
            <img src="$productimg" alt="Zemeņu kekss" style="width:100%">
            <h1>$productname</h1>
            <p class="price">$productprice</p>
            <a data-modal-target="#modal" style="cursor: pointer; text-decoration: underline;">Sastāvdaļas</a>
            <p style="margin-bottom: auto;"><button>Pievienot grozam</button></p>
        </form>
    </div>

    ';
}