<?php
  require "header.php";
?>
  <main>

      <div class="container" style = "margin-top:13rem;">
         <section class="section-default">
             <?php
                if (isset($_GET['error'])) {
                  if ($_GET['error'] == "emptyfields") {
                    echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                             <div class = "form-group" style ="text-align:center">
                                <p class="signerror" style="color: red; font-size:20px;"> FILL IN ALL FIELDS!</p>
                             </div>
                          </div>';
                  }
                  else if (($_GET['error'] == "invalidmailuid")){
                    echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                             <div class = "form-group" style ="text-align:center">      
                                <p style="color: red; font-size:20px;">Invalid USERNAME and E-MAIL!</p>
                             </div>
                          </div>';
                  }
                  else if (($_GET['error'] == "invalidmail")){
                    echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                             <div class = "form-group" style ="text-align:center">
                                <p class="danger" style="color: red; font-size:20px;">Invalid E-MAIL!</p>
                             </div>
                          </div>';
                  }
                  else if (($_GET['error'] == "invaliduid")){
                    echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                              <div class = "form-group" style ="text-align:center">
                                 <p class="danger" style="color: red; font-size:20px;">Invalid USERNAME!</p>
                              </div>
                          </div>';
                  }
                  else if (($_GET['error'] == "passwordlen")){
                    echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                             <div class = "form-group" style ="text-align:center">                          
                                <p class="danger" style="color: red;" font-size:20px;>PASSWORD MUST BE AT LEAST EIGHT(8) CHARACTER!</p>
                             </div>
                          </div>';
                  }
                  else if (($_GET['error'] == "passwordcheck")){
                    echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                             <div class = "form-group" style ="text-align:center">
                                <p class="danger" style="color: red; font-size:20px;">PASSWORD MUST MATCH!</p>
                             </div>
                          </div>';
                  }
                  else if (($_GET['error'] == "usertaken")){
                    echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                             <div class = "form-group" style ="text-align:center">
                                <p class="danger" style="color: red; font-size:20px;">USERNAME ALREADY TAKEN!</p>
                             </div>
                          </div>';
                  }
                
                }
                
              ?>
              <div class = "container"  style = "margin: 0 auto; width: 40%; background: rgb(243, 240, 240); border-radius:15px;">
               <div class ="form-group" style ="text-align:center">
               <h1 style ="">Signup</h1>
               </div>
             <form action="includes/signup.inc.php" method="post">
             <div class = "form-group">
             <label for= "username">Username</label>
               <input type="text" class ="form-control" name="uid" placeholder="Username" value="<?php 
               if (isset($_GET['error'])){
                 if ($_GET['error'] == "emptyfields" || ($_GET['error'] == "invalidmail") || ($_GET['error'] == "passwordlen") || ($_GET['error'] == "passwordcheck") ){
                      echo $_GET['uid'];
                 }
                 else{
                   echo " ";
                 }
               } ?>">
              </div>
             <div class = "form-group">
             <label for= "email">Email</label>
               <input type="text" class ="form-control" name="mail" placeholder="E-mail" value="<?php 
               if (isset($_GET['error'])){
                 if ($_GET['error'] == "emptyfields"){
                      echo $_GET['mail'];
                 }
                 else if ($_GET['error'] == "invaliduid") {
                   echo $_GET['mail'];
                 }
                 else if  ($_GET['error'] == "passwordlen") {
                  echo $_GET['mail'];
                }
                else if  ($_GET['error'] == "passwordcheck") {
                  echo $_GET['mail'];
                }
                else if  ($_GET['error'] == "usertaken") {
                  echo $_GET['mail'];
                }
                else {
                  echo " ";
                }
               } ?>">
              </div>
             <div class = "form-group">
             <label for= "password">Password</label>
               <input type="password" name="pwd" class ="form-control" placeholder="Password">
              </div>
             <div class = "form-group">
             <label for= "repeatpassword">Repeat Password</label>
               <input type="password"class ="form-control" name="pwd-repeat" placeholder="Repeat password">
               <div>
             <div class = "form-group">
               <button type="submit" name="signup-submit" class ="form-control btn btn-info" style =" border-radius:5px; margin-top:25px;">Signup</button>
              </div>
              </form>
              </div>
         </section>
      </div>
  </main>

  
