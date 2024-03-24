<?php include '/home/site/wwwroot/dbconfig.php'; ?>
<?php include '/home/site/wwwroot/header.php'; ?>
<?php include '/home/site/wwwroot/header-main.php'; ?>
<section class="section-content padding-y bg">
    <div class="container">
        <div class="row">
            <main class="col-md-8">

                <article class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Review cart</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <figure class="itemside  mb-4">
                                    <div class="aside"><img src="./images/items/4.jpg" class="border img-sm"></div>
                                    <figcaption class="info">
                                        <p>Apple iPad (2019) 32Gb Wi-Fi gold </p>
                                        <span class="text-muted">2x = $560 </span>
                                    </figcaption>
                                </figure>
                            </div> 
                            
                            <div class="col-md-6">
                                <figure class="itemside  mb-4">
                                    <div class="aside"><img src="./images/items/1.jpg" class="border img-sm"></div>
                                    <figcaption class="info">
                                        <p>Apple iPad (2019) 32Gb Wi-Fi gold </p>
                                        <span class="text-muted">2x = $560 </span>
                                    </figcaption>
                                </figure>
                            </div> 
                            
                            <div class="col-md-6">
                                <figure class="itemside mb-4">
                                    <div class="aside"><img src="./images/items/2.jpg" class="border img-sm"></div>
                                    <figcaption class="info">
                                        <p>Apple iPad (2019) 32Gb Wi-Fi gold </p>
                                        <span class="text-muted">2x = $560 </span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <figure class="itemside  mb-4">
                                    <div class="aside"><img src="./images/items/4.jpg" class="border img-sm"></div>
                                    <figcaption class="info">
                                        <p>Apple iPad (2019) 32Gb Wi-Fi gold </p>
                                        <span class="text-muted">2x = $560 </span>
                                    </figcaption>
                                </figure>
                            </div> 
                        </div>
                    </div>
                </article>
                <article class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Contact info</h4>
                        <form action="">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Frst name</label>
                                    <input type="text" placeholder="Type here" class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Last name</label>
                                    <input type="text" placeholder="Type here" class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Phone</label>
                                    <input type="text" value="+998" class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Email</label>
                                    <input type="email" placeholder="example@gmail.com" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div> 
                </article> 
                <article class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Delivery info</h4>
                        <form action="">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Country*</label>
                                    <select name="" class="form-control">
                                        <option value="">India</option>
                                        <option value="">United States</option>
                                        <option value="">France</option>
                                        <option value="">Italy</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>State*</label>
                                    <input type="text" placeholder="Type here" class="form-control">
                                </div>
                                <div class="form-group col-sm-8">
                                    <label>Street*</label>
                                    <input type="text" placeholder="Type here" class="form-control">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Building</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>House</label>
                                    <input type="text" placeholder="Type here" class="form-control">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Postal code</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Zip</label>
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </article>
                <article class="accordion" id="accordion_pay">
                    <div class="card">
                        <header class="card-header">
                            <img src="./images/misc/payment-paypal.png" class="float-right" height="24">
                            <label class="form-check collapsed" data-toggle="collapse" data-target="#pay_paynet">
                                <input class="form-check-input" name="payment-option" checked type="radio"
                                    value="option2">
                                <h6 class="form-check-label">
                                    Paypal
                                </h6>
                            </label>
                        </header>
                        <div id="pay_paynet" class="collapse show" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="text-center text-muted">Connect your PayPal account and use it to pay your
                                    bills. You'll be redirected to PayPal to add your billing information.</p>
                                <p class="text-center">
                                    <a href="#"><img src="./images/misc/btn-paypal.png" height="32"></a>
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <header class="card-header">
                            <img src="./images/misc/payment-card.png" class="float-right" height="24">
                            <label class="form-check" data-toggle="collapse" data-target="#pay_payme">
                                <input class="form-check-input" name="payment-option" type="radio" value="option2">
                                <h6 class="form-check-label"> Credit Card </h6>
                            </label>
                        </header>
                        <div id="pay_payme" class="collapse" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="alert alert-success">Some information or instruction</p>
                                <form class="form-inline">
                                    <input type="text" class="form-control mr-2" placeholder="xxxx-xxxx-xxxx-xxxx"
                                        name="">
                                    <input type="text" class="form-control mr-2" style="width: 100px"
                                        placeholder="dd/yy" name="">
                                    <input type="number" maxlength="3" class="form-control mr-2" style="width: 100px"
                                        placeholder="cvc" name="">
                                    <button class="btn btn btn-success">Button</button>
                                </form>
                            </div>
                        </div> 
                    </div> 
                </article>
            </main> 
            <aside class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total price:</dt>
                            <dd class="text-right">$69.97</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Tax:</dt>
                            <dd class="text-right"> $10.00</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right text-dark b"><strong>$59.97</strong></dd>
                        </dl>
                        <hr>
                        <p class="text-center mb-3">
                            <img src="./images/misc/payments.png" height="26">
                        </p>
                        <a href="./place-order.html" class="btn btn-primary btn-block"> Place Order </a>

                    </div> 
                </div>
            </aside>
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