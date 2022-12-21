<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stage";/* put your database name here */
/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$nom=$_POST['np'];
$prix=$_POST['prixP'];
$fileName = basename($_FILES["ima"]["name"]); 
$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
$allowTypes = array('jpg','png','jpeg','gif'); 
    $image = $_FILES['ima']['tmp_name']; 
    $imgContent = addslashes(file_get_contents($image)); 
if(isset($_POST['submit'])){
    if(!empty($_POST['taskOption'])) {
        $selected = $_POST['taskOption'];
        $req = "insert into ".$selected."(NomP,prixP,image)values ('$nom','$prix','$imgContent')";
    } else {
        echo 'Please select the value.';
    }
    }
if (mysqli_query($conn, $req)) {
    header("location:../view/gerer_site.php");
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>