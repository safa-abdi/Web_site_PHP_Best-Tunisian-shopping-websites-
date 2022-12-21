<?php
include_once("modele.php");
class sites extends Modele{
    private $idP,$NomP,$prixP,$image,$tab,$Old,$New,$col,$nom,$prix,$nb;
    function __construct(){
        parent::__construct();
         }
function replace($Old,$New){
    $req="RENAME TABLE $Old TO $New";
    $res=$this->pdo->prepare($req);
   return $res->execute(array());
}
function nbrL(){
    $sql = "SELECT COUNT(*) FROM stage";
    $stmt = $this->pdo->prepare($sql);
    $count = $stmt->fetchColumn();
    return $count;
}
function coloneExist($tab,$col){
    $query = "SELECT * FROM information_schema.COLUMNS 
    WHERE 
    TABLE_SCHEMA = 'stage' 
AND TABLE_NAME = '$tab' 
AND COLUMN_NAME = '$col'";
 $res=$this->pdo->prepare($query);
 $res->execute();
 $result= $res->fetchAll();
 return $result;
}

function deleteSite($New){
    $req="DROP TABLE $New";
    $res=$this->pdo->prepare($req);
   return $res->execute(array());
}
function ViderSite($New){
    $req="truncate table $New";
    $res=$this->pdo->prepare($req);
   return $res->execute();
}
function ajoutSite($query){
   $res=$this->pdo->prepare($query);
   return $res->execute(array());
               }
function listeS(){
    $query="show tables;";
    $res=$this->pdo->prepare($query);
    $res->execute();
    $result= $res->fetchAll();
    return $result;
       }
function show($tab){
$req="select idP from $tab";
$res=$this->pdo->prepare($req);
$res->execute();
$result= $res->fetchAll();
return $result;
}
function lSite($req){
$res=$this->pdo->prepare($req);
$res->execute();
$result= $res->fetchAll();
return $result;
}
function listeCol($tab){
    $req="select * from $tab";
    $res=$this->pdo->prepare($req);
    $res->execute();
    $result= $res->fetchAll();
    return $result;
}
function listeLiens(){
    $query="select * from lien;";
    $res=$this->pdo->prepare($query);
    $res->execute();
    $result= $res->fetchAll();
    return $result;
       }
function addCol($tab,$nom,$prix,$image){
    $req = "insert into ".$tab."(NomP,prixP,image)values ('$nom','$prix','$image')";
    $res=$this->pdo->prepare($req);
    return $res->execute(array());
}
function nbVisites($nom,$nb){
    $query="insert into lien(nbVisites) values($nb) 
    where NomS=$nom";
    $res=$this->pdo->prepare($query);
    return $res->execute(array());
}
    }
?>