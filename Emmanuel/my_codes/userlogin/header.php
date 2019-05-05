<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <body>

    
       <nav class ="navbar navbar-default">
         <div class ="container-fluid">
           <div class="navbar-header">
             <a class = "navbar-brand navbar-image" href ="index.php">
               <img src="img/Mikes-Logo-Sets-Black.png" alt ="logo" style = "width:100px; height:50px; margin-top: -15px;">
             </a>
             </div>
             <ul class="nav navbar-nav">
             <li class="active"><a href ="index.php">Home</a></li>
             <li><a href ="#">Services</a></li>
             <li><a href ="#">About</a></li>
             <li><a href ="#">Contact Us</a></li>
             </ul>
               <?php
                if (isset($_GET['signup']) === "success" && !isset($_SESSION['userId'])){
                echo '
                <form  class="navbar-form navbar-right" action ="includes/logout.inc.php" method ="post">
                <button type ="submit" name="logout-submit" class="btn-danger"style ="width:100px; height:32px; margin-right:30px;">Logout</button>
                </form>
                <form class="navbar-form navbar-right" action ="update.php?action=update" method="post">
                  <button type ="submit" class ="btn-success" name="update-submit" style ="width:200px; height:32px;">Update Account</button>
                </form>
                <p style ="color:green; font-size:20px; margin-left:800px;">Signup successful!!!</p>';
                exit();
               }
               else if (isset($_GET['update']) === "failed") {
                echo '<form  class="navbar-form navbar-right" action ="includes/logout.inc.php" method ="post">
                <button type ="submit" class ="btn-danger" name="logout-submit" style ="width:100px; height:32px; margin-right:30px;">Logout</button>
                </form>
                <form class="navbar-form navbar-right" action ="update.php?action=update" method="post">
                  <button type ="submit" class ="btn-success" name="update-submit" style ="width:200px; height:32px;">Update Account</button>
                </form>
                <p style ="color:red; font-size:20px; margin-left:800px;">UPDATE FAILED, TRY AGAIN LATER!!!</p>';
                }
               else if (isset($_GET['action']) === "update") {
                echo '<form  class="navbar-form navbar-right" action ="includes/logout.inc.php" method ="post">
                 <button type ="submit" class ="btn-danger" name="logout-submit" style ="width:100px; height:32px; margin-right:30px;">Logout</button>
                 </form>';
               }
               else if (isset($_GET['update']) === "username") {
                echo '<form  class="navbar-form navbar-right" action ="includes/logout.inc.php" method ="post">
                 <button type ="submit" class ="btn-danger" name="logout-submit" style ="width:100px; height:32px; margin-right:30px;">Logout</button>
                 </form>';
               }
               else if (isset($_SESSION['userId'])) {
                 echo '<form  class="navbar-form navbar-right" action ="includes/logout.inc.php" method ="post">
                  <button type ="submit" class ="btn-danger" name="logout-submit" style ="width:100px; height:32px; margin-right:30px;">Logout</button>
                  </form>
                  <form class="navbar-form navbar-right" action ="update.php?action=update" method="post">
                  <button type ="submit" class ="btn-success" name="update-submit" style ="width:200px; height:32px;">Update Account</button>
                  </form>';
                }
               
                 else {
                 echo '<form class ="navbar-form navbar-right" action ="includes/login.inc.php" method ="post">
                 <div class = "form-group">
                  <input type="text" name="mailuid" class="form-control" style ="margin-right:10px; width: 250px; border-radius:0px;" placeholder="Username/Email...">
                 </div>
                 <div class = "form-group">
                  <input type="password" name="pwd" class="form-control" style ="margin-right:30px; width: 250px; border-radius:0px;"  placeholder="password...">
                 </div>
                 <div class = "form-group">
                  <button type ="submit" name="login-submit" class ="btn-primary" style ="margin-right:30px; width:100px; height:32px;">Login</button>
                 </div>
                 <div class = "form-group">
                  <a href="signup.php" class = "">Signup</a>
                 </div>
                </form>';
             }
          ?>
          </div>
          </nav>
</body>
</html>
