<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <title>Se connecter</title>
</head>
<body>
    <!-- include Section -->
    <?php
        include "db_connection.php";
    ?>
    <form action="login_validation.php" method="POST">
            <div class="container" id="container">
                <div class="row my-4 mx-4">
                    <div class="d-flex justify-content-end col-1">
                        <a href="javascript:history.back()" class="col-1"><i class="fas fa-chevron-left" style="color: #5bb276;"><span class="mx-1">Return</span></i></a>
                    </div>       
                </div>
                <div class="row mx-4">
                    <div class="d-flex justify-content-center col-12">
                        <?php if(isset($_GET['error'])){?>
                            <p class="error alert alert-warning" role="alert"><?php echo $_GET['error']; ?></p>
                               <?php } ?>
                        <?php if(isset($_GET['success'])){?>
                            <p class="error alert alert-success" role="alert"><?php echo $_GET['success']; ?></p>
                               <?php } ?>
                    </div>       
                </div>
                <div class="Container-fluid">
                    <div class="row content">
                        <div class="col-lg-6  justify-content-start">
                            <h3 class="signin-text mb-3">Authentification</h3>
                            <form>
                                <div class="form-group">
                                    <label class="grey_text">Nom d'utilisateur</label>
                                    <input type="text" name="user_name" class="form-control opa">
                                </div>
                                <div class="form-group">
                                    <label class="grey_text">Mot de passe</label>
                                    <input type="password" id="myInput"  name="password" class="form-control opa">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="checkbox" onclick="myFunction()" class="form-check-input opa" id="checkbox">
                                    <label class="form-check-label" for="checkbox">Show Password</label>
                                </div>
                            <div class="row justify-content-center"><button type="submit" class="btn btn-outline-success opa">Login</button></div> 
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <img src="../images/illustration.png" class="illustration" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </form>
    <script>
            function myFunction() {
              var x = document.getElementById("myInput");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
    </script>
    <!-- bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>