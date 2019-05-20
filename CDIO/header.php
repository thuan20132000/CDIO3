<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="stylexemthem.css">


    <!-- boostrap css -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- bootstrap js -->
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- mapquest -->
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>


    
   

    <!-- myjs -->
    <script src="style.js"></script>
    
    
    <!-- step jquery -->
    <script src="jquery.steps.min.js"></script>
    <link rel="stylesheet" href="datve.css">
    
</head>
<body>
    <!--  -->
    <header class="container">
        <div id="header-wrapper" class="row">
                    <div id="header-logo" class="col-lg-4 col-md-4 col-sm-2 col-xs-2">
                        <img src="photo/logo-header.png" alt="" style="height:100px;width: 100%">
                    </div>
                    <div id="header-form" class="col-lg-5 col-md-5 col-sm-5 col-xs-5" >
                            <button onclick="displaySigninForm()" style="width:auto;">Dang Nhap</button>
                            <button onclick="displaySignupForm()">Dang Ky</button>
                            <button><i class="fas fa-phone"></i> 097235947</button>
                    </div>
                    <div id="header-ticket-manage" class="col-lg-2 col-md-2 col-sm-2 col-xs-2" >

                    </div>

                    
                    <div id="header-language" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        
                       <a href="#"><img style="width:30px;height:20px;" src="photo/logo-language-e.jpeg" alt="en"></a>
                       <a href="#"><img style="width:30px;height:20px" src="photo/logo-language-v.jpeg" alt="vi"></a>

                    </div>
        </div>

<!-- form dang nhap -->

        <div id="id01" class="modal signinForm container">
  
                <form class="modal-content animate" action="">
                  <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="photo/logo-language-e.jpeg" style="width:100px;height:100px;" alt="Avatar" class="avatar">
                  </div>
              
                  <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
              
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                      
                    <button type="submit">Login</button>
                    <label>
                      <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                  </div>
              
                  <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                  </div>
                </form>
              </div>
<!-- end form dang nhap -->

<!-- form dang ky -->

<div id="signupForm" class="modal signupForm container">
  
        <form  action="action_page.php">
                <div class="container">
                  <h1>Register</h1>
                  <p>Please fill in this form to create an account.</p>
                  <hr>
              
                  <label for="email"><b>Email</b></label><br>
                  <input type="text" placeholder="Enter Email" name="email" required>
              
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
              
                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                  <hr>
              
                  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                  <button type="submit" class="registerbtn">Register</button>
                </div>
              
                <div class="container signin">
                  <p>Already have an account? <a href="#">Sign in</a>.</p>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('signupForm').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                      </div>
              </form>
</div>

<!-- end form dang ky -->


    </header>

    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light container nav-wrapper">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div  class=" nav-item-wrapper collapse navbar-collapse  " id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="index.php"><i style="margin-right:15px" class="fas fa-home"></i>Trang Chu</a></li>
                    <li class="nav-item"><a href="#">Nha Xe</a>
                                <div class="dropdown-content">
                                  <div class="row" style="margin:0">
                                    <div class="column">
                                      <h3>Category 1</h3>
                                      <a href="#">Link 1</a>
                                      <a href="#">Link 2</a>
                                      <a href="#">Link 3</a>
                                    </div>
                                    <div class="column">
                                      <h3>Category 2</h3>
                                      <a href="#">Link 1</a>
                                      <a href="#">Link 2</a>
                                      <a href="#">Link 3</a>
                                    </div>
                                    <div class="column">
                                      <h3>Category 3</h3>
                                      <a href="#">Link 1</a>
                                      <a href="#">Link 2</a>
                                      <a href="#">Link 3</a>
                                    </div>
                                  </div>
                                </div>
                            
                    </li>
                    <li class="nav-item"><a href="#">Ben Xe</a></li>
                    <li class="nav-item"><a href="#">Huong Dan Dat Ve</a></li>
                    <li class="nav-item"><a href="#">Tin Tuc</a></li>
              </ul>
              
            </div>
          </nav>
<!-- header for all pages -->

