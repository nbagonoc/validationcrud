<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>

<div class="container">
  <div class="main">
    <h1 class="text-center">Create Users</h1>
	<form action="createProcess.php" method="POST" id="createForm" class="form-horizontal">
		
		<div class="form-group">		
			<label class="col-lg-2 control-label">Name:</label>
			<div class="col-lg-10">
				<input class="form-control" type="text" name="name" id="jsName" placeholder="your name"/>
			</div>
		</div>

		<div class="form-group">		
			<label class="col-lg-2 control-label">Email:</label>
			<div class="col-lg-10">
				<input class="form-control" type="text" name="email" id="jsEmail" placeholder="your email"/>
			</div>
		</div>

		<div class="form-group">		
			<label class="col-lg-2 control-label">Password:</label>
			<div class="col-lg-10">
				<input class="form-control" type="password" name="password" id="jsPassword" placeholder="your password"/>
			</div>
		</div>
		
		<div class="form-group">		
			<div class="col-lg-6">
				<button class="btn btn-default form-control" type="submit" name="submit" id="jsSubmit">Submit</button>
			</div>
			<div class="col-lg-6">
				<a href="index.php" class="btn btn-default form-control">Cancel</a>
			</div>
		</div>
	</form>
  </div>
<div id="jsMessage"></div>
</div>

<?php include 'footer.php'; ?>