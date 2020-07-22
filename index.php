<?php 

require_once("class/session.php");


$maSession=new Session("cornet","roland");


echo($maSession->getUsername()."<br>");
echo ($maSession->getFirstname()."<br>");


// serialize $masession
$objetTxt=$maSession->serializeObjet($maSession);
var_dump($objetTxt);


// deserialize $maSession dans $maSession2
$maSession2=$maSession->deSerializeTxt($objetTxt);

// supprime $maSession
unset($maSession);

var_dump($maSession2);

echo($maSession2->getUsername()."<br>");
echo($maSession2->getFirstname()."<br>");

// ajout avec le __set
$maSession2->age=2;

// recup avec le __get
echo($maSession2->age."<br>");

$maSession2->deconnection();



?>