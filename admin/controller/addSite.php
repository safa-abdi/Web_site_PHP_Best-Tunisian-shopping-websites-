<?php
  include_once('..\model\sites.php');
  $st=new sites();
$tablename = $_POST["Nsite"];
$fileName = basename($_FILES["imge"]["name"]); 
$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
$allowTypes = array('jpg','png','jpeg','gif'); 
    $image = $_FILES['imge']['tmp_name']; 
    $imgContent = addslashes(file_get_contents($image)); 

$lien = $_POST["lien"];
$st->ajoutSite($tablename);
$st->ajoutLien($tablename,$lien) ; 
if (isset($_POST['submit'])) {
$req = "insert into ".$tablename."(NomP,prixP,image)values ('Logo','0','$imgContent')";
$st->ajoutLogo($req) ;                                 
}
if ($st) {
    header("location:../view/gerer_site.php");
    alert("Hello World");

}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>