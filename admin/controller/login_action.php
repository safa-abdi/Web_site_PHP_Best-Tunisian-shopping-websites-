<?php
         $u=$_POST['username'];
         $p=$_POST['password'];
if(($u=='safa') && ($p=='12362790')){
  header("location: ../view/ind.php");
  exit;
}
else {
  header("location:../index.php");
  echo  "<div class='alert alert-danger' role='alert'>
  user inexistant
</div>";
}
         ?>