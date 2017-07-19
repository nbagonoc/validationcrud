<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>
<?php databaseConnect(); ?>

<div class="container">
  <div class="main">
    <h1 class="text-center">Welcome to BootsCRUD</h1>
	<?php
		
		//QUERY
		$query = mysql_query("SELECT * FROM users");

	  	echo "<table class=\"table table-striped\">";
	    echo "<thead>";
		echo "<tr>";
	    echo "<th>Name</th>";
	    echo "<th>Email</th>";
		echo "</tr>";
	    echo "</thead>";
	    echo "<tbody>";

	    //RETURN
		while($read = mysql_fetch_array($query)){
		$id = $read['ID'];
		$name = $read['name'];
		$email = $read['email'];
		$password = $read['password'];
		echo "<tr><td>$name</td><td>$email</td></tr>";
		}
		
		echo "</tbody>";
		echo "</table>";

	?>
  </div>
</div>

<?php include 'footer.php'; ?>
<?php databaseClose(); ?>