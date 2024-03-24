<?php include '/home/site/wwwroot/dbconfig.php'; ?>
<?php include '/home/site/wwwroot/header.php'; ?>
<?php include '/home/site/wwwroot/header-main.php'; ?>



<section class="section-content padding-y">

	<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
		<article class="card-body">
			<header class="mb-4">
				<h4 class="card-title">Sign up</h4>
			</header>
			<?php
			if (isset($_REQUEST['signup'])) {
				extract($_REQUEST);
				$a = select("select * from register where email='$email'");
				$ab = mysqli_num_rows($a);
				if ($ab == 1) {
					echo "<div class='alert alert-danger'>Email Already Exist</div>";
				} else {
					$n = iud("INSERT INTO `register`(`name`, `email`, `password`, `first_name`, `last_name`, `address`)
                VALUES ('$name', '$email','$password','$fname','$lname', '$address' )");
					if ($n == 1) {
						echo "<div class='alert alert-success'>Successful</div>";
						
					} else {
						echo "<div class='alert alert-danger'>Something went wrong Please Try Again</div>";
					}
				}
			}

			?>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="name" class="form-control" placeholder="">	
				</div> 
				<div class="form-row">
					<div class="col form-group">
						<label>First name</label>
						<input type="text" name="fname" class="form-control" placeholder="">
					</div>
					<div class="col form-group">
						<label>Last name</label>
						<input type="text" name="lname" class="form-control" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="">
					<small class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="">
					<small class="form-text text-muted">We'll never share your password with anyone else.</small>
				</div>
				

				<div class="form-group">
				<label>Address</label>
				<textarea name="address" class="form-control" id="" cols="30" rows="3"></textarea>

				</div>
				<div class="form-group">
					<button type="submit" name="signup" class="btn btn-primary btn-block"> Register </button>
				</div>
			</form>
		</article>
	</div> 
	<p class="text-center mt-4">Have an account? <a href="signin.php">Log In</a></p>
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