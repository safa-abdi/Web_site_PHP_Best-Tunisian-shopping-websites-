<?php
include_once("../model/message.php");
include_once("../model/reclamation.php");
$msg=new message();
$rec= new reclamation();
$a=$_POST['name'];
$b=$_POST['email'];
$m=$_POST['message'];
$Sujet=$_POST['a'];
if($Sujet=='DM'){
$msg->ajoutMsg($a,$b,$m);
}
else if ($Sujet=='RM'){
$rec->ajoutRec($a,$b,$m);
}
header("location:../view/contact.php")
?>