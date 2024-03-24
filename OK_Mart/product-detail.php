<?php include '/home/site/wwwroot/dbconfig.php'; ?>
<?php include '/home/site/wwwroot/header.php'; ?>
<?php include '/home/site/wwwroot/header-main.php';

$pid = $_GET['id'];

?>
<section class="section-content padding-y bg">
    <div class="container">

        <div class="card">
            <div class="row no-gutters">
                <?php

                $product_query = "SELECT * FROM `products` WHERE id = '$pid'";
                $product_result = mysqli_query($cid, $product_query) or die("Product Query Failed.");

                if (mysqli_num_rows($product_result) > 0) {
                    while ($row = mysqli_fetch_assoc($product_result)) {

                ?>
                        <aside class="col-md-6">
                            <form action="cart.php?action=add&id=<?php echo $row["id"]; ?>" method="POST">

                                <article class="gallery-wrap">
                                    <div class="img-big-wrap">
                                        <a href="#"><img src="./images/items/<?php echo $row['img']; ?>"></a>
                                    </div> 

                                </article> 
                        </aside>
                        <main class="col-md-6 border-left">
                            <article class="content-body">
                                <h2 class="title"><?php echo $row['product_name']; ?></h2>

                                <div class="mb-3">
                                    <var class="price h4">₹<?php echo $row['price']; ?></var>
                                </div>

                                <p><?php echo $row['description']; ?></p>
                                <div class="col">
                                    <p class="card-text">Quantity:
                                        <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;">
                                    </p>
                                </div>
                                <br>

                                <input type="hidden" name="hidden_product_name" value="<?php echo $row["product_name"]; ?>">
                                <input type="hidden" name="hidden_img" value="<?php echo $row["img"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="hidden" name="hidden_category_slug" value="<?php echo $row["category_slug"]; ?>">
                                <input type="submit" name="add" class="btn btn-block btn-success" value="Added to cart">
                            </article>
                        </main>
                <?php  }
                } else {
                    echo "<h3>NO DATA FOUND.</h3>";
                } ?>
            </div> 
            </form>
        </div> 
        <br>

        <div class="row">
            <div class="col-md-9">

                <header class="section-heading">
                    <h3>Customer Reviews </h3>
                </header>
                <article class="box mb-3">
                    <div class="icontext w-100">
                        <img src="./images/avatars/avatar2.jpg" class="img-xs icon rounded-circle">
                        <div class="text">
                            <span class="date text-muted float-md-right">24.03.2022 </span>
                            <h6 class="mb-1"> Mayur Jagtab </h6>
                        </div>
                    </div> 
                    <div class="mt-3">
                        <p>
                        Nice Product, Must buy 
                        </p>
                    </div>
                </article>
            </div> 
        </div> 
    </div>
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