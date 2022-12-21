<?php
include_once("modele.php");
class message extends Modele{
    private $idN;
    function __construct(){
        parent::__construct();
         }

function SuppMessage($idN){
    $req="delete from message where idM = $idN";
    $res=$this->pdo->prepare($req);
   return $res->execute();
}

function listeMessage(){
        $query="select * from message;";
        $res=$this->pdo->prepare($query);
        $res->execute();
        $result= $res->fetchAll();
        return $result;
           }

    }
?>