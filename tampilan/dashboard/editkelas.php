<?php 
  session_start();
  include '../../db.php';
  include '../../auth/adminSession.php';
  
  $id = $_POST["editkelas"];

  $datakelas = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas = '$id' ");
  $kelas = mysqli_fetch_assoc($datakelas);
 ?>

 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/login.css"> -->
  <?php include '../../public/head/head.php'; ?>
</head>

<body class="dy">
  <div class="cont">
    <form action="../../route/web.php" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Ubah Kelas</p>
      <div class="input-group">
        <input type="text" name="kelas" value="<?php echo $kelas["kelas"]; ?>" placeholder="Masukan Kelas Baru" required>
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="updatekelas" value="<?php echo $kelas["id_kelas"] ?>">Kirim</button>
      </div>
    </form>
  </div>
</body>

