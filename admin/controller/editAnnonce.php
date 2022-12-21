<?php
include_once('..\model\sites.php');
$st=new sites();
if(isset($_POST['submit'])){
    if(!empty($_POST['siteName'])) {
        $selected = $_POST['siteName'];
        echo $selected;
    } else {
        echo 'Please select the value.';
    }
    }
echo "<select name='ss'>";
$result=$st->show($selected);
if (array($result)){
    foreach($result as $row){
        echo"<option value=".$row[0].">".($row[0])."<option />";

                     }
   echo" </select>";
                                }
?>