<?php include '/home/site/wwwroot/dbconfig.php'; ?>
<?php include '/home/site/wwwroot/header.php'; ?>
<?php include '/home/site/wwwroot/header-main.php';
if (!isset($_SESSION['userlogin'])) {
    header("location:signin.php");
    unset($_SESSION["cart"]);
}

?>




<section class="section-conten padding-y bg">

    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                
                <ul class="list-group">
                    <a class="list-group-item active" href="#"> My order history </a>
                </ul>
                <br>
                <a class="btn btn-light btn-block" href="logout.php"> <i class="fa fa-power-off"></i> <span
                        class="text">Log
                        out</span> </a>
        
            </aside>
            <main class="col-md-9">
                <?php 
		
		$query = "SELECT * FROM `orders` WHERE `username` = '{$_SESSION['username']}'";
                                            $result = mysqli_query($cid, $query) or die("query failed");
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) { 
												
													$productname = $row['product_name'];
													$productprice = $row['price'];

													?>
                <br>

                <article class="card">
                    <header class="card-header">
                        <strong class="d-inline-block mr-3">Order ID: <?php echo $row['order_id']; ?></strong>
                        <span>Order Date: <?php echo $row['order_date']; ?></span>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="text-muted">Delivery to</h6>
                                <?php 
								$query1 = "SELECT * FROM `register` WHERE `name` = '{$_SESSION['username']}'";
								$result1 = mysqli_query($cid, $query1) or die("query failed");
								if (mysqli_num_rows($result1) > 0) {
									while ($row = mysqli_fetch_assoc($result1)) { ?>

                                <p><?php echo ucwords($row['first_name']) ?>
                                    <?php echo ucwords($row['last_name']) ?><br>
                                    <?php echo $row['address'] ?>
                                </p>
                                <?php }} ?>
                            </div>
                            <div class="col-md-4">
                                <h6 class="text-muted">Payment</h6>
                                <span class="text-success">
                                    <i class="fab fa-lg fa-cc-visa"></i>
                                    Visa **** 4216
                                </span>
                                
                            </div>
                        </div> 
                    </div> 
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>

                                <td> <b> Product Name </b><br>
                                    <p class="title mb-0"><?php echo $productname; ?> </p>
                                    
                                </td>
                                <td> <b>Price </b><br> ₹<?php echo $productprice; ?> </td>
                                <td width="250"> <a href="#" class="btn btn-outline-primary">Track order</a> <a href="#"
                                        class="btn btn-light"> Details </a> </td>
                            </tr>

                        </table>
                    </div> 
                </article> 
                <?php }}?>
                <br>
            </main>
            <br>
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

<?php include 'footer.php'; ?>




</body>

</html>