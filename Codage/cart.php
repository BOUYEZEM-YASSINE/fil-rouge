<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <link rel="stylesheet" href="cart.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <title>Shopping Cart</title>
</head>
<body>
    <?php
        include "db_connection.php";
        session_start();
        $goldenUser = $_SESSION['golden_user'];
    ?>
    <?php
        $table_selection = "SELECT * FROM cart_$goldenUser;";
        $result = mysqli_query($connection_query,$table_selection);
        if(empty($result)){
            header("Location:login.php?error=please login first");
        }
        $result_check = mysqli_num_rows($result);
    ?>
    <div class="container">
        <div class="row my-4 mx-4">
                <div class="d-flex justify-content-end col-1">
                    <a href="products.php" class="col-1"><i class="fas fa-chevron-left" style="color: #5bb276;"><span class="mx-1 XX">Return</span></i></a>
                </div>       
        </div>
    </div>
    <div class="d-flex justify-content-center col-12">
                        <?php if(isset($_GET['error'])){?>
                            <p class="error alert alert-warning" role="alert"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
    </div>
    <div class="card card-body  mx-2">                       
    <?php if( $result_check > 0){?>
              <?php while($row = mysqli_fetch_assoc($result)){?>
                <form action="cart_addition.php" method="POST" class="d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-body my-2">
                            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://drive.google.com/uc?export=view&id=<?= $row["product_image"]?>" width="35" height="auto" alt=""></div>
                                    <div class="media-body d-flex align-self-center justify-content-center">
                                        <h6 class="media-title font-weight-semibold"><?= $row["product_title"]?><input type="hidden" name="product_title" value="<?= $row["product_title"]?>"></h6>
                                    </div>
                                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center d-flex align-self-center">
                                        <h6 class="mb-0 font-weight-semibold"><?= $row["product_price"]?>MAD<input type="hidden" name="product_price" value="<?= $row["product_price"]?>"></h6>
                                    </div>
                            </div>
                        </div>
                    </div>
               </form>  
              <?php } ?>
    <?php }?>
    <div>
    <?php if( $result_check == 0){
        header("Location:products.php?error=your cart is empty add products please");
    }?>
    <?php 
        $sum_query = "SELECT SUM(product_price) AS prodct_prc FROM cart_$goldenUser;";
        $result_1 = mysqli_query($connection_query,$sum_query);
        $row_1 = mysqli_fetch_assoc($result_1); 
        $sum = $row_1['prodct_prc'];
        $ttc = $sum + 49;
    ?>
    <div class="d-flex justify-content-center">
        <div class="col-md-6 ">
                <div class="card card-body my-2 text-center">
                   <span> Total price (including shipping standard price):</span>
                   <div class="text-success"><?php echo $ttc; ?></div>
                </div>
        </div>
    </div>

</body>
</html> 