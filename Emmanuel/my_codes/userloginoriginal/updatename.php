<?php
if (isset($_POST['updatename'])) { //check if user accessed page by clicking change username button
  require "header.php";
  require "includes/dbh.inc.php";
  $userId = $_SESSION['userId'];
  $sql = "SELECT * FROM users where idUsers='$userId'";
  $results= mysqli_query($conn, $sql);
  $user = mysqli_fetch_array($results);

  ?>
<main>

<div class="container" style = "margin-top: 13rem;">
   <section class="section-default">
        <div class = "container"  style = "margin: 0 auto; width: 50%; background:; border-radius:15px;">
        <div class ="form-group" style ="text-align: center">
         <h1 class ="info">Update Username</h1>
         </div>
       <form action="includes/updatename.inc.php" method="post">
       <input type="hidden" name="id" value="<?php echo $user['idUsers']; ?>">
       <div class = "form-group">
       <label for= "Current username">Current Username</label>
         <input type="text" class ="form-control" name="currentusername" placeholder="Current Username" value="<?php echo $user['uidUsers']; ?>">
        </div>
       <div class = "form-group">
       <label for= "New Username">New Username</label>
         <input type="text" class ="form-control" name="newusername" placeholder="New Username">
        </div>
       <div class = "form-group">
       <label for= "password">Password</label>
         <input type="password" name="pwd" class ="form-control" placeholder="Password">
        </div>
        <div class ="form-group">
         <button type="submit" name="updatename-submit" class ="form-control mt-6 btn btn-info">Update</button>
        </div>
         </form>
        </div>
   </section>
</div>
</main>


<?php
}
else{
    header("Location: index.php" );
}
?>