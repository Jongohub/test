<!-- Header Partial -->
<?php
require("header.html.php");
?>


<body>

  <!-- Shopping cart box -->
  <div class="cart">
    <h2>Shopping Cart</h2>
    <ul id="cart-items">
        <!-- Cart items will be populated here using JavaScript -->
    </ul>
    <p>Total: $<span id="cart-total">0</span></p>
  </div>

  <!-- <button onclick="updateCartUI()">Update Cart UI</button>  why does remove cart button only show when i call this explicitly? -->

 <!-- Footer partial -->
  <!-- <?php 
  require("footer.html.php");
  ?> -->

  <script src="js/script.js"></script> 
</body>

<!-- Closes the html tag opened in the header partial - It will work without it but its a good practices to respect best practices as a biginner -->
</html>