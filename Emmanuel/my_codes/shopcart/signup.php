<?php
  require "header.php";
?>
  <main>

      <div class="container" style = "margin-top:19rem;">
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
              <div class = "container" style="width:40%">
               <div class ="form-group" style ="text-align:center">
               <h1 class ="text-info">Signup</h1>
               </div>
             <form action="includes/signup.inc.php" method="post">
             <div class = "form-group">
            <!-- <label for= "username" class ="text-info">Username</label>-->
               <input type="text" class ="form-control" style="background-color:black; color:#31708f;border:none; border-bottom:.05rem solid" name="uid" placeholder="Username" value="<?php 
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
             <!--<label for= "email" class ="text-info">Email</label>-->
               <input type="text" class ="form-control" name="mail" style="background-color:black; color:#31708f; border:none; border-bottom:.05rem solid" placeholder="E-mail" value="<?php 
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
             <!--<label for= "password" class ="text-info">Password</label>-->
               <input type="password" name="pwd" class ="form-control"style="background-color:black; color:#31708f; border:none; border-bottom:.05rem solid" placeholder="Password">
              </div>
             <div class = "form-group">
            <!-- <label for= "repeatpassword" class ="text-info">Repeat Password</label>-->
               <input type="password"class ="form-control" name="pwd-repeat" style="background-color:black; color:#31708f; border:none; border-bottom:.05rem solid" placeholder="Repeat password">
               <div>
             <div class = "form-group">
               <button type="submit" name="signup-submit" class ="form-control btn btn-primary" style =" border-radius:2px; margin-top:3rem;">Signup</button>
              </div>
              </form>
              </div>
         </section>
      </div>
  </main>

  
