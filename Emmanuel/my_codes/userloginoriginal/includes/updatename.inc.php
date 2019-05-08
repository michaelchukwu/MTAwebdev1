<?php
   if (isset($_POST['updatename-submit'])) {
      //session_start();
      require "dbh.inc.php";
      $curUser = mysqli_real_escape_string($conn, $_POST['currentusername']);//initializing and sanitizing variables
      $newUser = mysqli_real_escape_string($conn, $_POST['newusername']);
      $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
      $id =  $_POST['id'];


      if (empty($curUser) || empty($pwd) || empty($newUser))  {
         header ("Location: ../updatename.php?update=emptyfields&username=".$curUser ."&newuser=".$newUser);
         exit();
      }
      else{
         $sql = "SELECT * FROM users WHERE uidUsers= '$curUser' AND idUsers='$id'";
         $result = mysqli_query($conn, $sql);
         $resultCheck = mysqli_num_rows($result);
         if($resultCheck < 1) {
            header ("Location: ../updatename.php?update=nouser&newuser=".$newUser);
            exit(); 

         }
         else{
           if ($row = mysqli_fetch_assoc($result)) {
              $hashedPwdCheck = password_verify($pwd, $row['pwdUsers']);
              if ($hashedPwdCheck == false) {
               header ("Location: ../updatename.php?update=error2");
               exit();  
              }
              else if ($hashedPwdCheck == true) {
               $sql = "UPDATE users set uidUsers = '$newUser' WHERE uidUsers= '$curUser'AND idUsers='$id'"; 
               $result = mysqli_query($conn, $sql);
               if ($result) {
                  echo 'updated!!!';
                 // header("Location: ../index.php?signup=success");
                  exit();
               }
              }
           }
         }
      }
      mysqli_close($conn);
   }
   else{
      header("Location: ../index.php?update=failed");
      exit();
   }

   

































   /*$userid = isset($_SESSION['userId']);

   $sql =  "SELECT * FROM users WHERE idUsers=$userid";

   $send = mysqli_query($conn, $sql);

   if($send){
      $data = mysqli_fetch_array($send);
      // var_dump($data);
   }else{
      echo 'wrong';  
   }*/