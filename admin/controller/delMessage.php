<?php
include_once('..\model\message.php');
$ms=new message();
$Hid=$_POST['mes'];
$ms->SuppMessage($Hid);
header('location:../view/messages.php')

?>