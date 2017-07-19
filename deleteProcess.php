<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>
<?php databaseConnect(); ?>

<div class="container">
	<div class="main">
	    <h1 class="text-center"></h1>

		<?php
			$id = $_POST['newID'];
			$name = $_POST['newname'];
			//QUERY
			$delete = mysql_query("DELETE FROM users WHERE ID='$id'");
			//RESULT
			if(!$delete) {
				die("<h3>Delete Failed</h3><p>User was not deleted.</p>" .mysql_error());
				echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";
			}
			else{
				echo "<h3>Delete Successful</h3><p>{$name} has been deleted.</p>";
				echo "<a href=\"read.php\" class=\"btn btn-default\">Ok</a>";
			}
		?>

	</div>
</div>

<?php include 'footer.php'; ?>
<?php databaseClose(); ?>