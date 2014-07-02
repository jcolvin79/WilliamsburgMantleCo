<?php include("inc/products.php");

if (isset($_GET["id"])) {
  $product_id = $_GET["id"];
  if (isset($products[$product_id])) {
    $product = $products[$product_id];
  }
}
if (!isset($product)) {
    header("Location: shop.php");
    exit();
}


$section = "shop";
include("inc/header.php"); ?>

<h1 class="shop-title">Shop</h1>

<div class="breadcrumb"><a href="shop.php">Shop</a> &gt; <?php echo $product["name"]; ?></div>


<div class="item-picture">
  <img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
</div>
<div class="item-details">
  <h1><?php echo $product["name"]; ?><span>$<?php echo $product["price"]; ?></span></h1>
  <p><?php echo $product["description"]; ?></p>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
      <input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
      <table>
      <tr>
        <th>
          <input type="hidden" name="on0" value="color">
          <label for="os0">Please select a color:</label>
        </th>
        <td>
            <select name="os0" id="os0">
                <?php foreach($product["color"] as $color) { ?>
                <option value="<?php echo $color; ?>"><?php echo $color; ?></option>
                <?php } ?>
            </select>
        </td>
      </tr>
      </table>
      <input type="submit" value="Add to Cart" name="submit">
  </form>
  <p class="shipping">* Add item to cart to calculate shipping costs</p>
</div>

<?php include('inc/footer.php'); ?>
