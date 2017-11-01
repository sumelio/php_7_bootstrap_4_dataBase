
<?php
 //var_dump($_POST);
try{
require_once  'config.php';
if( ! empty($_POST))	{
   $id = $_POST['id'];
   $newName = $_POST['name'];
   $newEmail = $_POST['email'];

  $sql = "UPDATE blogDataBase.user set name=:name , email=:email WHERE id=:id";

  $query = $pdo->prepare($sql);
 
 $result =  $query -> execute([
  'id' => $id,
  'name' =>$newName,
  'email' =>$newEmail

  	]);
  $nameValue = $newName;
  $emailValue = $newEmail;

}else {
  $id = $_GET['id'];
   $sql = "SELECT * FROM blogDataBase.user where id = :id ";
   $query = $pdo->prepare($sql);
   $query->execute([
        'id'=> $id
   	]);

   $row = $query->fetch(PDO::FETCH_ASSOC);

   $nameValue = $row['name'];
   $emailValue = $row['email'];
	
}
  

} catch(Exception $ex){
	echo $ex->getMessage();
}

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DataBases with Platzi</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body> 
	<div class="container">
		<h1> update user</h1>
		<a href="list.php">List user</a>
		    <?php
        if ($result) {
            echo '<div class="alert alert-success">Success!!!</div>';
        }
    ?>

		<form method="POST">

			<label for="name"  >name</label>
			<input type="text" name="name" id="name" value="<?php echo $nameValue; ?>" >
			<br>
			<label for="email"   >email</label>
			<input type="text" name="email" id="email" value="<?php echo $emailValue; ?>" >
			<br>
			<input type="hidden"  name="id" value="<?php echo $id ?>">
			<input type="submit" value="update">
		</form>	
	</div>
</body>
</html>

