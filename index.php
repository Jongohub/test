<!-- Header Partial -->
<?php
require("header.html.php");
?>

<!-- 
<!DOCTYPE html>
<html>
<head>
  <title>My eCommerce Website</title>
  <link rel="stylesheet" href="styles.css">
</head> -->

<body>
  <h1>Welcome to My eCommerce Website</h1>
  
  <div class="product">
    <h2>Product 1</h2>
    <p>Price: $10</p>
    <button class="add-to-cart" onclick="addToCart('Product 1', 10)">Add to Cart</button>
  </div>

  <div class="product">
    <h2>Product 2</h2>
    <p>Price: $15</p>
    <button class="add-to-cart" onclick="addToCart('Product 2', 15)">Add to Cart</button>
  </div>

  <!-- The Cart box - This can also be in a nice modal or even a new page since being at the bottom is may be a bad UX depending on the website in question-->
  <div class="cart">
    <h2>Shopping Cart</h2>
    <ul id="cart-items">
    </ul>
    <p>Total: $<span id="cart-total">0</span></p>
  </div>

  <!-- Footer partial -->
  <?php 
  require("footer.html.php");
  ?>
</body>

</html>
