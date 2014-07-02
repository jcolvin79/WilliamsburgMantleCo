<?php
include('inc/products.php');
$section = "shop";
include('inc/header.php'); ?>

<h1 class="shop-title">Shop</h1>

<ul class="products">
  <?php foreach($products as $product_id => $product) {
    echo "<li>";
		echo '<a href="item.php?id=' . $product_id . '">';
    echo '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    echo "<h4>" . $product["name"] . "</h4>";
    echo "<p>$" . $product["price"] . "</p>";
    echo "</a>";
    echo "</li>";
  } ?>
</ul>


<?php include('inc/footer.php'); ?>
