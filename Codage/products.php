<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="products.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <title>Our Products</title>
</head>
<body>
    <?php
        include "db_connection.php";
        session_start();
    ?>
    <div class="container">
        <div class="row my-4 mx-4">
                    <div class="d-flex justify-content-end col-1">
                        <a href="home.php" class="col-1"><i class="fas fa-chevron-left" style="color: #5bb276;"><span class="mx-1 XX">Return</span></i></a>
                    </div>
                    <div class="col-10"></div>
                    <div class="d-flex justify-content-end col-1">
                        <a href="cart.php" class="col-1"><i class="fas fa-shopping-cart" style="color: #5bb276;"><span class="mx-1 XX">Cart</span></i></a>
                    </div>      

        </div>
    </div>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row justify-content-center">
            <!----Repeated division----->
            <?php
                $table_selection = "SELECT * FROM products;";
                $result = mysqli_query($connection_query,$table_selection);
                $result_check = mysqli_num_rows($result);
            ?>
            <div class="d-flex justify-content-center col-12">
                        <?php if(isset($_GET['error'])){?>
                            <p class="error alert alert-warning" role="alert"><?php echo $_GET['error']; ?></p>
                               <?php } ?>
                        <?php if(isset($_GET['success'])){?>
                            <p class="error alert alert-success" role="alert"><?php echo $_GET['success']; ?></p>
                               <?php } ?>
                    </div>       
            <?php if( $result_check > 0){?>
              <?php while($row = mysqli_fetch_assoc($result)){?>
                 <form action="cart_addition.php" method="POST" class="d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="card card-body mt-3">
                            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://drive.google.com/uc?export=view&id=<?= $row["product_img"]?>" width="125" height="auto" alt=""><input type="hidden" name="product_image" value="<?= $row["product_img"]?>"></div>
                                    <div class="media-body">
                                        <h6 class="media-title font-weight-semibold"><?= $row["product_title"]?><input type="hidden" name="product_title" value="<?= $row["product_title"]?>"></h6>
                                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true"><?= $row["product_categorie"]?></a><input type="hidden" name="product_id" value="<?= $row["product_id"]?>"></li>
                                        </ul>
                                        <p class="mb-3"><?= $row["product_details"]?></p>
                                    </div>
                                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                        <h6 class="mb-0 font-weight-semibold"><?= $row["product_price"]?>MAD<input type="hidden" name="product_price" value="<?= $row["product_price"]?>"></h6>
                                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="text-muted"><?= $row["product_reviews"]?>reviews</div><button type="submit" class="btn btn-warning mt-4 text-white">Add to cart<input type="hidden" name="submit"></button>
                                    </div>
                            </div>
                        </div>
                    </div>
               </form>  
                <?php } ?>
           <?php }?>
        </div>
    </div>
    <!-- bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>