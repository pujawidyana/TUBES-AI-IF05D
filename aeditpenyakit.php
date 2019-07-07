<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
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
    <div class="col-sm-8 text-left"> 
        
      <h2 class="text-center">EDIT HAMA DAN PENYAKIT</h2>
    <form method="post">
      <div class="form-group">
      			<br><label class="control-label col-sm-2">ID :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='idpenyakit' name='idpenyakit' disabled value='".$data['idpenyakit']."'><br>";
                    }
                ?>
     		 </div>
        </div>	
        <div class="form-group">
      			<br><label class="control-label col-sm-2">NAMA :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='namapenyakit' name='namapenyakit' value='".$data['namapenyakit']."'><br>";
                    }
                ?>
     		 </div>
        </div>
        <div class="form-group">
      			<br><label class="control-label col-sm-2">JENIS :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='jenistanaman' name='jenistanaman' value='".$data['jenistanaman']."' data-error='Isi kolom dengan benar'><br>";
                    }
                ?>
     		 </div>
        </div>
         <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">GEJALA :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='".$_GET['id']."' and p.namapenyakit=b.namapenyakit";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='".$data['gejala']."'><br>";
                    }
                echo "<input type='text'  class='form-control' id='jenistanaman' readonly value=''><br>";
                ?>
     		 </div>
        </div>	
               <div class="form-group">
      			<br><label class="control-label col-sm-2">KULTUR TEKNIS :</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea  rows='8' class='form-control' id='kulturteknis' name='kulturteknis' >".$data['kulturteknis']."</textarea><br>";
                    }
                ?>
     		 </div>  
        </div>
         <div class="form-group">
      			<br><label class="control-label col-sm-2">FISIK MEKANIS :</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea rows='8' class='form-control' id='fisikmekanis' name='fisikmekanis'>".$data['fisikmekanis']."</textarea><br>";
                    }
                ?>
     		 </div>  
        </div>
         <div class="form-group">
      			<br><label class="control-label col-sm-2">KIMIAWI :</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea  rows='8' class='form-control' id='kimiawi' name='kimiawi'>".$data['kimiawi']."</textarea><br>";
                    }
                ?>
     		 </div>  
        </div>
          <div class="form-group">
      			<br><label class="control-label col-sm-2">HAYATI :</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea rows='8' class='form-control' id='hayati' name='hayati'>".$data['hayati']."</textarea><br>";
                    }
                ?>
     		 </div>  
        </div>
     <button type="submit" name ="submit" class="btn btn-primary">Simpan</button>
         <?php
                    if(isset($_POST['submit'])){
                      $id = $_GET['id'];
                      $namapenyakit = $_POST['namapenyakit'];
                      $jenistanaman = $_POST['jenistanaman'];
                      $kulturteknis = $_POST['kulturteknis'];
                      $fisikmekanis = $_POST['fisikmekanis'];
                      $kimiawi = $_POST['kimiawi'];
                      $hayati = $_POST['hayati'];     
                      $query="update penyakit SET namapenyakit='".$_POST['namapenyakit']."', jenistanaman='".$_POST['jenistanaman']."', kulturteknis='".$_POST['kulturteknis']."', fisikmekanis='".$_POST['fisikmekanis']."', kimiawi='".$_POST['kimiawi']."', hayati='".$_POST['hayati']."' WHERE idpenyakit='$id'";
                      mysqli_query($konek_db, $query);
                    }
                ?>
        </form><br>
    </div>
  </div>


<footer class="container-fluid text-center">
  <p>TUBES AI - S1 INFORMATIKA 05 D</p>
</footer>

</body>
</html>
