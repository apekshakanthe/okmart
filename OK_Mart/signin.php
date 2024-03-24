<?php include '/home/site/wwwroot/dbconfig.php'; ?>
<?php include '/home/site/wwwroot/header.php'; ?>
<?php include '/home/site/wwwroot/header-main.php'; ?>

<section class="section-conten padding-y" style="min-height:84vh">

	<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
      <div class="card-body">
      <h4 class="card-title mb-4">Sign in</h4>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
			 <input type="email" name="email" class="form-control" placeholder="Email Address" >
          </div> 
          <div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password" >
          </div> 
          
          <div class="form-group">
          	<a href="#" class="float-right">Forgot password?</a> 
           
          </div> 
          <div class="form-group">
              <button type="submit" name="signin" class="btn btn-primary btn-block"> Login  </button>
          </div>     
      </form>
	  <?php
            if (isset($_REQUEST['signin'])) {
              extract($_REQUEST);
              $a = select("select * from register where email='$email' and password='$password'");
              $ab = mysqli_num_rows($a);
              if ($ab == 1) {
                while ($t = mysqli_fetch_array($a)) {
                  $_SESSION['userlogin'] = $t[0];
                  $_SESSION['username'] = $t[1];
                  echo "<script>window.location='index.php';</script>";
                }
              } else {
                echo "<div class='alert alert-danger'>Something went wrong Please Try Again</div>";
              }
            }

            ?>
      </div>
    </div> 

     <p class="text-center mt-4">Don't have account? <a href="register.php">Sign up</a></p>
     <br><br>


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