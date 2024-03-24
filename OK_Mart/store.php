<?php include '/home/site/wwwroot/dbconfig.php'; ?>
<?php include '/home/site/wwwroot/header.php'; ?>
<?php include '/home/site/wwwroot/header-main.php'; ?>


<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Our Store</h2>

    </div> 
</section>

<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-md-3">

                <div class="card">
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Categories</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_1" style="">
                            <div class="card-body">

                                <ul class="list-menu">
                                    <?php
									$r = select("select * from category");
									while ($row = mysqli_fetch_array($r)) { ?>
                                    <li><a href="category.php?category=<?php echo $row['category_slug']; ?>"><?php echo $row['category_name'];?>
                                        </a></li>
                                    <?php
									}
									?>
                                </ul>

                            </div> 
                        </div>
                    </article> 
                </div>

            </aside> 
            <main class="col-md-9">

                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <span class="mr-md-auto">32 Items found </span>

                    </div>
                </header>

                <div class="row">
                    <?php

							$limit = 3;

							if (isset($_GET['page'])) {
								$page = $_GET['page'];
							} else {
								$page = 1;
							}
							$offset = ($page - 1) * $limit;
							$record_index = ($page - 1) * $limit;
							$product_query = "SELECT * FROM `products` LIMIT $record_index, $limit ";
							$product_result = mysqli_query($cid, $product_query) or die("Product Query Failed.");

							if (mysqli_num_rows($product_result) > 0) {
								while ($row = mysqli_fetch_assoc($product_result)) {


							?>

                    <div class="col-md-4">
                        <form action="cart.php?action=add&id=<?php echo $row["id"]; ?>" method="POST">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">

                                    <img src="images/items/<?php echo $row['img'];?>">

                                </div> 
                                <figcaption class="info-wrap">
                                    <div class="fix-height">
                                        <a href="product-detail.php?id=<?php echo $row['id']; ?>"
                                            class="title"><?php echo $row['product_name']; ?></a>
                                        <div class="price-wrap mt-2">
                                            <span class="price">₹<?php echo $row['price']; ?></span>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <p class="card-text">Quantity:
                                            <input type="number" min="1" max="25" name="quantity" class="form-control"
                                                value="1" style="width: 60px;">
                                        </p>
                                    </div> 
                                    <br>

                                    <input type="hidden" name="hidden_product_name"
                                        value="<?php echo $row["product_name"]; ?>">
                                    <input type="hidden" name="hidden_img" value="<?php echo $row["img"]; ?>">
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                    <input type="hidden" name="hidden_category_slug"
                                        value="<?php echo $row["category_slug"]; ?>">
                                    <input type="submit" name="add" class="btn btn-block btn-success"
                                        value="Added to cart">
                                </figcaption>
                            </figure>
                        </form>
                    </div> 

                    <?php  }
			}else{
				echo "<h3>NO DATA FOUND.</h3>";
			} ?>


                </div> 


                <div style="text-align:center" class="col-lg-12">


				<?php

					$dep_query1 = "SELECT * FROM `products`";
					$result1 = mysqli_query($cid, $dep_query1) or die("query failed..");

					if (mysqli_num_rows($result1) > 0) {

						$total_records = mysqli_num_rows($result1);
						$total_pages = ceil($total_records / $limit);
						echo '  <ul class="pagination">';
						if ($page > 1) {
							echo '<li class="paginate_button page-item previous" id="zero_config_previous"><a href="store.php?page=' . ($page - 1) . '" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>';
						}
						for ($i = 1; $i < $total_pages; $i++) {
							if ($i == $page) {
								$active = "active";
							} else {
								$active = "";
							}
							echo '<li class="paginate_button page-item ' . $active . '"><a href="store.php?page=' . $i . '" aria-controls="zero_config"  class="page-link">' . $i . '</a></li>';
						}
						if ($total_pages > $page) {
							echo '<li class="paginate_button page-item next" id="zero_config_next"><a href="store.php?page=' . ($page + 1) . '" aria-controls="zero_config" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>';
						}
						echo '</ul>';

					?>

					<?php } ?>
                                                            
                                                              

                </div>

            </main> 

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


<script>
$("input[type='number']").inputSpinner()
</script>



</body>

</html>