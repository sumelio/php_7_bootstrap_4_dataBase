
<?php
 //var_dump($_POST);
try{
require_once  'config.php';

  $queryResult = $pdo->query("SELECT * FROM blogDataBase.user");
 


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
		<h1>List Users</h1>
		<ul>
			<li><a href="index.php" >Home</a></li>
			<li><a href="add.php" >Add Users </a></li>
			
		</ul>	

		<table class="table" >

			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Remove</th>
			</tr>
			<?php
			while($row = $queryResult-> fetch(PDO::FETCH_ASSOC) ){
				echo '<tr>';
				echo '<td>';
				echo $row['name'] . '</td><td>'.$row['email'];
				echo '</d>';
				echo '<td>';	
				echo '<a href="update.php?id='.$row['id'].'" >Edit</a>';
				echo '</td>';
				echo '<td>';	
				echo '<a href="remove.php?id='.$row['id'].'" >Remove</a>';
				echo '</td>';
				echo '</tr>';
			}

			?>

		</table>
	</div>
</body>
</html>

