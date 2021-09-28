<?php
   include "db_connection.php";
   session_start();
?>
<?php
   $id = $_POST['product_id'];
   $productImage = $_POST['product_image'];
   $productTitle = $_POST['product_title'];
   $productPrice = $_POST['product_price'];
   $goldenUser = $_SESSION['golden_user'];
   if(isset($_POST['submit']) and $goldenUser != ''){
      $selection_query = "SELECT * FROM cart_$goldenUser WHERE id='$id'";
      $result = mysqli_query($connection_query , $selection_query);
      if(mysqli_num_rows($result) === 0){
         $table_insertion = "INSERT INTO cart_$goldenUser(id, product_title, product_price, product_image) VALUES ('$id', '$productTitle', '$productPrice', '$productImage');";
         mysqli_query($connection_query,$table_insertion);
         header("Location:products.php?success=Product added successfully");
      }
      elseif(mysqli_num_rows($result) !== 0){
         header("Location:products.php?error=Product already added");
      }
   } 
   elseif(isset($_POST['submit']) and $goldenUser == ''){
      header("Location:login.php?error=please login first");
   }
?>
