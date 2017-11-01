<?php
 //var_dump($_POST);
try{
	require_once  'config.php';
	
	$id = $_GET['id'];
	$sql = "delete FROM blogDataBase.user where id = :id ";
	$query = $pdo->prepare($sql);
	$result =  $query->execute([
		'id'=> $id
		]);

	
} catch(Exception $ex){
	echo $ex->getMessage();
}

header("Location:list.php");

?>


