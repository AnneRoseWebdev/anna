<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container-fluid">


<div class="alert alert-warning mt-2 text-center" role="alert" ><h3>Ajout de données</h3></div>

<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact';

//Recup variables du formulaire

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$sujet=$_POST['sujet'];
$text=$_POST['text'];

//TRY pour effectuer l'essai, Catch pour capturer l'erreur
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $sql=$conn->prepare("INSERT INTO `users` (`PRENOM`, `NOM`, `EMAIL`, `SUJET`, `TEXT`) VALUES (:prenom, :nom, :email, :sujet, :text);");

//BINDPARAM : Lie une variable PHP à un marqueur nommé correspondant dans une requête SQL utilisée pour préparer la requête.

    $sql->bindParam(':prenom',$prenom);
    $sql->bindParam(':nom',$nom);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':sujet',$sujet);
    $sql->bindParam(':text',$text);


    $sql->execute();

    

    echo '<div class="alert alert-success" role="alert" >'.'Données ajoutées !'.'</div>';



} catch(PDOException $e) {
    
      echo '<div class="alert alert-danger" role="alert" >'.'Erreur : '.$e->getMessage().'</div>';


}



?>




<!-- fin conteneur -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
