<?php
include "db_connection.php";
if(isset($_POST['save'])){
     $email = $_POST['email'];
     $complete_name = $_POST['complete_name'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $gender = $_POST['gender'];
     $phone_number = $_POST['phone_number'];
     $connection_query->query("INSERT INTO users(email_adress, complet_name, username, pass_word, gender, phone_number) VALUES( ' $email', '$complete_name', '$username', '$password', '$gender', '$phone_number')");
     $table_creation_query = ("CREATE TABLE cart_$username (id INT(255), product_title VARCHAR(255), product_price INT(255), product_image VARCHAR(255));");
     $creation_query = mysqli_query($connection_query,$table_creation_query);
     header("Location:sign_up.php?success=User created successfully");
}