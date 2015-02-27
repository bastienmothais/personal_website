<?php
header( 'content-type: text/html; charset=utf-8' );
try
{
	$bdd = new PDO('mysql:host=bastienmxoxo.mysql.db;dbname=bastienmxoxo;charset=utf8', 'bastienmxoxo', 'KmgTYjhYyMcR');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$email = $_POST['email'];
		   
$r = $bdd->prepare('INSERT INTO email(Email) VALUES(?)');
$r->execute(array($email));

if($r === false){
	echo 'An error has occurred!';
} else {
	header('Location: http://www.bastienmothais.com/');
}
?>