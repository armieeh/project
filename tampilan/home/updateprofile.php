<?php 
	session_start();
	include '../../db.php';
	$id = $_SESSION["auth"];

 ?>

<body>
	<?php include '../navbar/nav.php' ?>
	<form action="../../route/web.php" method="post" enctype="multipart/form-data" style="margin-left: 20px;">
		<input type="file" name="file" class="form-control" style="width: 300px;" ><br>
		<button type="submit" name="updateprofile" class="btn btn-outline-dark" value="<?php echo $id; ?>">Upload</button>
	</form>
</body>

