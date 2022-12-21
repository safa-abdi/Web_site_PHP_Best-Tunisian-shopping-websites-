<?php
include_once("modele.php");
class reclamation extends Modele{
    private $idR;
    function __construct(){
        parent::__construct();
         }

function SuppReclamation($idR){
    $req="delete from reclamation where idRec = $idR";
    $res=$this->pdo->prepare($req);
   return $res->execute();
}

function listeReclamation(){
        $query="select * from reclamation;";
        $res=$this->pdo->prepare($query);
        $res->execute();
        $result= $res->fetchAll();
        return $result;
           }

    }
?>