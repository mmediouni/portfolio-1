<?php
function createconnection(){
    $pdo=new PDO('mysql:host=localhost;dbname=folio;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function addComment($name,$email,$message){
    $pdo=createconnection();
    $req=$pdo->prepare('INSERT INTO `comme` (`Name`,`Email`,`Comment`,`Date`) VALUE (:pseudo,:email,:content,NOW())');
    $req->execute(array(
        ':pseudo'=>$name,
        ':email'=>$email,
        ':content'=>$message,
    ));
}



