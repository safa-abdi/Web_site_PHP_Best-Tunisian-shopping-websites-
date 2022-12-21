<?php
include_once('..\model\reclamation.php');
$rec=new reclamation();
$Hid=$_POST['idToDelete'];
$rec->SuppReclamation($Hid);
header('location:../view/reclamation.php')

?>