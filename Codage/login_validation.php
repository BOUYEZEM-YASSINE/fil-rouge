<?php
//Login Form Inputs Fullness Validation
include "login.php";
session_start();
$u_name = $_POST['user_name'];
$password = $_POST['password'];
        if(empty($password)&&empty($u_name)){
            header("Location:login.php?error=Password and Username are required");
            exit();
        }
        else if(empty($u_name)){
            header("Location:login.php?error=Username is required");
            exit();
        }
        else if(empty($password)){
            header("Location:login.php?error=Password is required");
            exit();
        }
        else{
//Login Database Information Validation
include "db_connection.php";
$selection_query = "SELECT * FROM users WHERE username='$u_name' AND pass_word='$password'";
$result = mysqli_query($connection_query , $selection_query);
if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['username'] === $u_name && $row['pass_word'] === $password){
                        //header("Location:login.php?success=Logged In Successfully");
                        $_SESSION['golden_user'] = $u_name;
                        header("Location: home.php");
                    }
        else{
            header("Location:login.php?error=Incorrect Username or Password");
            exit();
            }                
                                  }
else{
    header("Location:login.php?error=Incorrect Username or Password");
    exit();
    }
            }    
?>