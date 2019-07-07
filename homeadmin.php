<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
          
          
      </ul>
    </div>
  </div>
</nav>   
    	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="homeadmin.php">BERANDA</a></li>
                <li><a href="hamadanpenyakit.php">HAMA DAN PENYAKIT</a></li>
                <li><a href="gejala.php">GEJALA</a></li>
                <li><a href="basispengetahuan.php">BASIS PENGETAHUAN</a></li>
                
			</ul>
			<ul class="nav navbar-nav navbar-right">
                <li><p><a href="logout.php"><button type="button" class="btn glyphicon glyphicon-log-out" id="myBtn">LOGOUT</button></a></p></li>
			</ul>
		</div>
	</nav>  
    
<div class="container-fluid text-center">    
  <div class="row content">
       <center><h2>SISTEM PAKAR DIAGNOSA HAMA DAN PENYAKIT TANAMAN BAWANG MERAH DAN CABAI </h2></center><br>
        <center><img src="../TUBES-AI/img/admin.png" height="100px" width="100px"></center>
      &ensp;&ensp;<p>Selamat datang <?php echo $login_session; ?>.Silahkan pilih menu yang diinginkan</p>

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>TUBES AI - S1 INFORMATIKA 05 D</p>
</footer>

</body>
</html>
