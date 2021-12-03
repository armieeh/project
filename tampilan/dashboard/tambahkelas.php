<?php 
    session_start();
	include '../../db.php';
	include '../../auth/adminSession.php';

	$kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
 ?>
<body>
	<?php include '../navbar/nav.php'; ?>

	<div class="container mt-4 pb-3 pt-3 border-light border border-2">
		<div class="row">
			<h3 class="f-b">Kelas Yang Sudah ada</h3>
		</div>
		<div class="row">
			<div class="col-4">
				<a href="dashboard.php" class="text-decoration-none text-muted up fw-bold utkbtn h5">
					<img src="../../source/svg/caret-square-left-solid.svg" style="width: 20px;"> Kembali
				</a>
			</div>
			<div class="col-4">
				<center class="txt"><h1>List Kelas</h1></center>
			</div>
		</div>
		<div class="row">
			<h5>Tambahkan Kelas :</h5>
					<form action="../../route/web.php" method="post">
						<input type="text" name="kelas">
						<button class="btn btn-outline-dark" type="submit" name="tambahkelas">Konfirmasi</button>
					</form>
		</div>
		<table class="table fw-bold mt-5">
				  <thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Kelas</th>
				      <th scope="col">Edit</th>
				    </tr>
				  </thead>
			<tbody>
				<?php $i=1; ?>
				<?php foreach ($kelas as $key): ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $key["kelas"]; ?></td>
						<td>
							<form action="editkelas.php" method="post">
								<button href="../dashboard/editkelas.php" class="btn bg-dark text-light border border-2 border-dark" name="editkelas" value="<?php echo $key["id_kelas"]; ?>" type="submit">Edit</button>
							</form>
						</td>
					</tr>
				<?php $i++; ?>
				<?php endforeach ?>
			</tbody>
		</table>
		
	</div>
</body>