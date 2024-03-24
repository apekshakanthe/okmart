<?php include '/home/site/wwwroot/dbconfig.php';
if (!isset($_SESSION['userlogin'])) {
    header("location:signin.php");
    unset($_SESSION["cart"]);
}
?>
<?php
$gtotal = 0;
foreach ($_SESSION["cart"] as $keys => $values) {

    $productid = $values["id"];
    $productname = $values["product_name"];
    $quantity = $values["quantity"];
    $price =  $values["price"];
    $total = ($values["quantity"] * $values["price"]);
    $categoryslug = $values["category_slug"];
    $username = $_SESSION["username"];
    $order_date = date('Y-m-d');

    $gtotal = $gtotal + $total;
    $query = iud("INSERT INTO ORDERS (product_id, product_name, price,  quantity, order_date, username, category_slug) 
              VALUES ('" . $productid . "','" . $productname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $categoryslug . "')");

    if ($query != 1) {
?>
        <div class="container">
            <div class="jumbotron">
                <h1>Something went wrong!</h1>
                <p>Try again later.</p>
            </div>
        </div>

<?php
    }
}
?>
<div class="container" style="margin-top: 50px;">
    <center><i class="fas fa-check-circle" style="font-size: 72px;margin-bottom: 20px;color: #28A745;"></i></center>
    <h2 class="text-center">Payment Successful</h2>
    <br>
    <div class="text-center">
        <a href="index.php" class="btn btn-success">Shop more</a>
    </div>
</div>
<?php if (isset($_SESSION['userlogin'])) { ?>
    <div class="container" style="margin: 0 auto;width: 50%;padding: 50px;background: #f1f1f1;margin-top: 50px;margin-bottom: 50px;">
        <div class="row invoice row-printable">
            <div class="col-md-12">
            
                <div class="panel panel-default plain" id="dash_0">
                    
                    <div class="panel-body p30">
                        <div class="row">
                        
                            <div class="col-lg-6">
                            
                                <div class="invoice-logo"><img src="images/Logo.png" alt="Invoice logo" style="max-height: 40px;"></div>
                            </div>
                            
                            <div class="col-lg-6">
                            
                                <div class="invoice-from">
                                    <ul class="list-unstyled text-right">
                                        <li><strong>Invoiced To : </strong> <?php echo $_SESSION['username']; ?></li>

                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                            
                                <div class="invoice-details mt25">
                                    <div class="well">
                                        <ul class="list-unstyled mb0">
                                            <?php
                                            $num1 = rand(100000, 999999);
                                            $num2 = rand(100000, 999999);
                                            $num3 = rand(100000, 999999);
                                            $number = $num1 . $num2 . $num3;
                                            ?>
                                            <li><strong>Order</strong> <?php echo "$number"; ?></li>
                                            <li><strong>Transaction</strong> #</li>
                                            <li><strong>Order Date:</strong> <?php echo date("dMY"); ?></li>
                                            <li><strong>Status:</strong> PAID</li>
                                            <?php
                                            $query = "SELECT * FROM `register` WHERE `name` = '{$_SESSION['username']}'";
                                            $result = mysqli_query($cid, $query) or die("query failed");
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) { ?>

                                                    <li><strong>Deliver to</strong> <?php echo $row['address']; ?></li>
                                            <?php

                                                }
                                            }                                        ?>

                                        </ul>
                                    </div>
                                </div>
                                <div class="invoice-items">
                                    <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                        <table class="table table-bordered">
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" class="text-right">Grand Total:</th>
                                                    <th class="text-center">₹<?php echo "$gtotal"; ?></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-footer mt25">
                                    <p class="text-center">Thank you for shopping with us!</p>
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>
                </div>
             
            </div>
          
        </div>
    </div>

    !-- Bootstrap CSS -->
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
<?php } ?>