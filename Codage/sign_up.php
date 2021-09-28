<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="sign_up.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <title>Inscription</title>
    </head>
    <body>
        <div class="container">
            <div class="row my-4 mx-4">
                <div class="d-flex justify-content-end col-1">
                    <a href="home.php" class="col-1"><i class="fas fa-chevron-left" style="color: #28a745;"><span class="mx-1">Return</span></i></a>
                </div>       
            </div>
            <div class="row my-4 mx-4">
                <div class="d-flex justify-content-center col-12">
                    <?php if(isset($_GET['success'])){?>
                            <p class="alert alert-success" style="transition: 2s;" role="success"><?php echo $_GET['success']; ?></p>
                               <?php } ?>
                </div>       
            </div>
            <div class="container-fluid row justify-content-center m-0 p-0">
                <form action="create.php" method="POST" class="my-3">
                        <div class="form-group">
                            <h2 class="W">Inscription</h2>
                        </div>
                        <div class="form-group">
                            <label>Email Adresse:</label>
                            <input type="email" name="email" placeholder="Insert here" class="form-control YY1" required>
                        </div>
                        <div class="form-group">    
                            <label>Complete Name:</label>
                            <input type="text" name="complete_name" placeholder="Insert here" class="form-control YY1" required>
                        </div>
                        <div class="form-group">    
                            <label>Username:</label>
                            <input type="text" name="username" placeholder="Insert here" class="form-control YY1" required>
                        </div>
                        <div class="form-group">
                            <label>Add Your Password:</label>
                            <input type="password" id="myInput" name="password" placeholder="Insert here" class="form-control YY1" required>
                            <input type="checkbox" onclick="myFunction()">Show Password
                        </div>
                        <div class="form-group">
                            <label>Gender:</label>
                            <select name="gender" class="custom-select YY1" required>
                                <option value="homme">Male</option>
                                <option value="femme">Female</option>
                            </select>
                        </div>
                        <div class="form-group">    
                            <label>Phone Number:</label>
                            <input type="text" name="phone_number" placeholder="Insert here" class="form-control YY1" required>
                        </div>
                        <!-- <div class="form-group">    
                            <label>Product Categorie:</label>
                            <select name="categorie" class="custom-select YY1">
                                <option value="dairy">dairy</option>
                                <option value="clothes">clothes</option>
                                <option value="drinks">drinks</option>
                                <option value="fruits">fruits</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" name="save">Save</button>
                        </div>
                </form>
            </div>
        </div>
        <!-- show password function  -->
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