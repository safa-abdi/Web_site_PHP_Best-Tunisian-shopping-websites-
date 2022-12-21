<?php
include_once('..\model\sites.php');
$st=new sites();
$sit=$_POST['stes'];
echo $sit;
$repn=$_POST['Sn'];
$st->replace($sit,$repn);
header('location:../view/gerer_site.php')
?>