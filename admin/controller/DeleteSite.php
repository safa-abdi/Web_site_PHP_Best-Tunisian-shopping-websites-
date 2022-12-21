<?php
include_once('..\model\sites.php');
$st=new sites();
$Nsite=$_POST['sites'];
if(isset($_POST['Emp'])){
   $st->ViderSite($Nsite);
}
else if(isset($_POST['dele'])){
   $st->deleteSite($Nsite);
   $st->deleteLien($Nsite);
}
header('location:../view/gerer_site.php')
 
?>