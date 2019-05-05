<?php
if (isset($_POST['update-submit'])) { //check if user accessed page by clicking 'update' button
  require "header.php";
echo '
  <main>
         <div class="container" >
            <section class="section-default">
                   <div class = "container"  style = "margin: 0 auto; width: 40%;">
                   <div class ="form-group" style ="text-align:center">
                      <h1 style ="margin-bottom:40px;">Update Account</h1>
                   </div>
                    <form action = "updatename.php?update=username" method = "post">
                    <button type="submit"  style = "margin-bottom:20px;" name= "updatename" class ="form-control btn btn-info"><b>Change Username<b></button>
                    </form>
                    <form action = "updatepass.php" method = "post">
                    <button type="submit" style = "margin-bottom:20px;" name="updatepwd"  class ="form-control btn btn-success"><b>Change Password<b></button>
                    </form>
                  
                     <a type="button" href="index.php"  class ="form-control btn btn-danger"><b>Cancel<b></a>
                
         </section>
      </div>
  </main>';
}
else {
   header("Location: index.php"); // redirects if unauthorized access attempt
}
  ?>