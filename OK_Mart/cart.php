<?php include '/home/site/wwwroot/dbconfig.php'; ?>
<?php include '/home/site/wwwroot/header.php'; ?>
<?php include '/home/site/wwwroot/header-main.php';
if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
      $item_array_id = array_column($_SESSION["cart"], "id");
      if (!in_array($_GET["id"], $item_array_id)) {
        $count = count($_SESSION["cart"]);

        $item_array = array(
          'id' => $_GET["id"],
		  'img' => $_POST["hidden_img"],
          'product_name' => $_POST["hidden_product_name"],
          'price' => $_POST["hidden_price"],
          'category_slug' => $_POST["hidden_category_slug"],
          'quantity' => $_POST["quantity"]
        );
        $_SESSION["cart"][$count] = $item_array;
        echo '<script>window.location="cart.php"</script>';
      } else {

        echo '<script>window.location="cart.php"</script>';
      }
    } else {
      $item_array = array(
        'id' => $_GET["id"],
        'img' => $_POST["hidden_img"],
		'product_name' => $_POST["hidden_product_name"],
        'price' => $_POST["hidden_price"],
        'category_slug' => $_POST["hidden_category_slug"],
        'quantity' => $_POST["quantity"]
      );
      $_SESSION["cart"][0] = $item_array;
    }
  }
  if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
      foreach ($_SESSION["cart"] as $keys => $values) {
        if ($values["id"] == $_GET["id"]) {
          unset($_SESSION["cart"][$keys]);
          echo '<script>alert("Food has been removed")</script>';
          echo '<script>window.location="cart.php"</script>';
        }
      }
    }
  }

  if (isset($_GET["action"])) {
    if ($_GET["action"] == "empty") {
      foreach ($_SESSION["cart"] as $keys => $values) {

        unset($_SESSION["cart"]);
        echo '<script>alert("Cart is made empty!")</script>';
        echo '<script>window.location="cart.php"</script>';
      }
    }
  }
?>
<section class="section-content padding-y bg">

    <?php if (!empty($_SESSION["cart"])) { ?>

    <div class="container">

        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" width="120">Total</th>

                                <th scope="col" class="text-right" width="200"> </th>
                            </tr>
                        </thead>
                        <?php

							$total = 0;
							foreach ($_SESSION["cart"] as $keys => $values) {
							?>
                        <tbody>
                            <tr>
                                <td>
                                    <figure class="itemside align-items-center">
                                        <div class="aside"><img src="./images/items/<?php echo $values["img"] ?>"
                                                class="img-sm"></div>
                                        <figcaption class="info">
                                            <a href="#"
                                                class="title text-dark"><?php echo $values["product_name"]; ?></a>
                                           
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <!-- col.// -->
                                    <?php echo $values["quantity"] ?>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price"><?php echo $values["price"] ?></var>
                                       
                                    </div> 
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var
                                            class="price"><?php echo number_format($values["quantity"] * $values["price"], 2); ?></var>
                                       
                                    </div> 
                                </td>
                                <td class="text-right">
                                    <a href="cart.php?action=delete&id=<?php echo $values["id"]; ?>"
                                        class="btn btn-danger"> Remove</a>
                                </td>
                            </tr>
                            <?php 
							$total = $total + ($values["quantity"] * $values["price"]);
							}
							?>
                        </tbody>
                    </table>
                </div> 

            </aside> 
            <aside class="col-lg-3">

                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Grand Total :</dt>
                            <dd class="text-right"><?php echo number_format($total); ?></dd>
                        </dl>

                        <hr>
                        <p class="text-center mb-3">
                            <img src="./images/misc/payments.png" height="26">
                        </p>


                        <a href="store.php" class="btn btn-success btn-block">Continue Shopping</a>
                        <a href="cart.php?action=empty" class="btn btn-danger btn-block"> Empty Cart </a>
                        <a href="order-complete.php" class="btn btn-primary btn-block"> Checkout </a>
                    </div>
                </div>

            </aside>


        </div> 

    </div> 
    <?php }
	
	if (empty($_SESSION["cart"])) {
  ?>
    <div class="container">
        <div class="jumbotron">
            <h1>Your Shopping Cart</h1>
            <p>Oops! empty cart. Go back and <a href="index.php">order now.</a></p>

        </div>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
  }
  ?>
</section>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Your custom CSS -->
  <style>
    /* Your custom CSS styles */
.fixed-chat-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 1000;
}

  </style>
</head>
<!-- Your website content goes here -->

  <!-- Floating Chat Button -->
  <div class="fixed-chat-button">
    <button id="open-chat-button" class="btn btn-primary"><i class="fas fa-comments"></i> Chat</button>
  </div>

  <!-- Chatbot Modal -->
  <div class="modal fade" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="chatModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="chatModalLabel">Chatbot</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Chatbot iframe or any other chatbot content -->
          <a href="chatbot.html">Contact With US</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and your custom JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // JavaScript to handle chat button click event
$(document).ready(function(){
  $("#open-chat-button").click(function(){
    $("#chatModal").modal('show');
  });
});

  </script>


</body>

</html>