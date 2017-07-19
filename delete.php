<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>
<?php databaseConnect(); ?>

<div class="container">
	<div class="main">
	    <h1 class="text-center"></h1>

		<?php
		//QUERY
		$idRequest = $_REQUEST['ID'];
		$query = mysql_query("SELECT * FROM Users WHERE id = '$idRequest'");

	    //RETURN
		while($read = mysql_fetch_array($query)){
		$id = $read['ID'];
		$name = $read['name'];
		$email = $read['email'];
		$password = $read['password'];
		}

			echo "<h1 class=\"text-center\">Delete User</h1><p>Are you sure you want to delete the user named: {$name}?</p>";
		?>

		<form action="deleteProcess.php" method="POST" class="form-horizontal">
			<input type="hidden" name="newID" value="<?php echo $id; ?>">
			<input type="hidden" name="newname" value="<?php echo $name; ?>">
			<div class="form-group">		
				<div class="col-lg-6">
					<button class="btn btn-default form-control" type="submit" name="submit" id="jsSubmit">Yes</button>
				</div>
				<div class="col-lg-6">
					<a href="read.php" class="btn btn-default form-control">No</a>
				</div>
			</div>
		</form>

	</div>
</div>

<?php include 'footer.php'; ?>
<?php databaseClose(); ?>