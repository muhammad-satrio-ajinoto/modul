<style type="text/css">
.first{
  position: absolute;	
  width: 100px;	
  height: 100px;
  left: 50%;
  top: 50%;
  margin-top: -50px;
  margin-left: -50px;	
  border: 1px solid #ff0000;
}
</style>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width , initial-scale=1.0">
				<!-- load bootstrap css -->
				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
					<!-- load jquery and bootstrap js -->
					<script src="assets/js/jquery.min.js"></script>
					<script src="assets/js/popper.min.js"></script>
					<script src="assets/js/bootstrap.js"></script>
					
				</head>
<body>
<div class = "container">
<div class="card col-sm-4">
<div class="card-header bg-success text-white" align = "center">
<h4>LOGIN SISWA</h4>
</div>
<div class="card-body">
<form method="POST" action="Tugas1.php">
ID : <input type="text" name="id" class="form-control"><br>
PASSWORD : <input type="password" name="pass" class="form-control"><br>
<br>
<button type = "submit" name = "submit" class = "btn btn-success" value="login">MASUK</button>
<button type = "submit" name = "submit" class = "btn btn-danger" value="keluar">KELUAR</button>
</div>
</div>
</div>
</form>
</body>
</html>