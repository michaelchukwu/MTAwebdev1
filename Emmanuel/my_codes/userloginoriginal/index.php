<?php
  require "header.php";
?>

  <main>
      <div class="wrapper-main">
         <section class="section-default">
           <?php
              if (isset($_GET['error']) == "wrongpwd" || isset( $_GET['error']) == "nouser"){
              echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                       <div class = "form-group" style ="text-align:center">
                          <p class="danger" style="color: red; font-size:20px;">WRONG PASSWORD OR USERNAME!</p>
                       </div>
                    </div>';
              exit();
              }
              else if (isset($_GET['signup']) == "success"){
                echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                         <div class = "form-group" style ="text-align:center">
                            <p class="danger" style="color: green; font-size:20px;">SIGNUP WAS SUCCESSFUL!</p>
                         </div>
                      </div>';
                exit();
              }
              else if (isset($_GET['update']) == "failed"){
                echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                         <div class = "form-group" style ="text-align:center">
                            <p class="danger" style="color: red; font-size:20px;">UPDATE FAILED, TRY AGAIN LATER!</p>
                         </div>
                      </div>';
                exit();
              }
              else if (isset($_SESSION['userId'])) {
                ?>
                <div class = "container"  style = "margin: 0 auto; width: 40%;">
                   <div class = "form-group" style ="text-align:center">
                     <p class="login-status" style ="color:green; font-size:20px;">WELCOME, YOU ARE LOGGED IN<?php echo " " .ucfirst($_SESSION['userUid']) ; ?>!</p>
                   </div>
                </div>    

                <?php
              }
              else if ( isset($_GET['logout'])== "success"){
                echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                        <div class = "form-group" style ="text-align:center">
                          <p class="login-status" style ="color:red; font-size:20px;">YOU ARE LOGGED OUT</p>
                        </div>
                      </div>';
                exit();
              }
              else if ( !isset($_GET['logout'])== "success") {
                echo '<div class = "container"  style = "margin: 0 auto; width: 40%;">
                         <div class = "form-group" style ="text-align:center">
                            <p class="login-status" style ="color:blue; font-size:20px;">WELCOME TO VIEW ALL PAGE CONTENT, KINDLY REGISTER OR LOGIN</p>
                          </div>
                      </div>';
              }
            ?>
         </section>
      </div>

  </main>
