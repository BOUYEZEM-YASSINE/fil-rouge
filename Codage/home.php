<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <title>Welcome</title>
    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar navbar-expand-xl navbar-custom navbar-dark">
                <a class="navbar-brand col-4" href="home.php">Electronics Valley</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-8" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">Products</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>     -->
                        <li class="nav-item">
                            <a class="nav-link" id="login" href="login.php">login</a>
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link" id="logout" href="logout_validation.php">logout</a>
                        </li>    
                    </ul>
                </div>  
            </nav>
            <video class="background-video" loop muted autoplay type="video/mp4" src="../videos/3.mp4"></video>
            <div class="filter"></div>
            <div class="text-section">
                <h1 class="CVCMP">Create your account now and take advantage of our promotions every weekend</h1>
                <div class="KYUI">
                    <div class="trasparent-buttons PLUS"><button type="button" class="btn btn-info"><a class="buttona tona" href="sign_up.php">Get Started</a></button></div>
                </div>
            </div>
        </div>
        <!-- bootstrap CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>