<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include 'links.php'; ?>
		<?php include 'connection.php'; ?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<h1>WELCOME</h1>
					<p>Please fill the all details carefully. This form can change your life.</p>
					<a href="select.php"><input type="button" name="" value="Check Form"></a>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<form action="" method="POST">
									<div class="form-group">
										
										<input type="text" class="form-control" placeholder="Enter your name" name="name" required="">
									</div>
									<div class="form-group">							
										<input type="text" class="form-control" placeholder="Enter mobile no" name="mobile" required="">
									</div>
									<div class="form-group">							
										<input type="text" class="form-control" placeholder="Any Refrence" name="refer">
									</div>
									<div class="form-group">							
										<input type="text" class="form-control" placeholder="enter your qualification" name="qualification" required="">
									</div>
									<div class="form-group">							
										<input type="email" class="form-control" placeholder="Enter your email" name="email" required="">
									</div>
									
									<button type="submit" class="btn btn-primary" name="submit">Registration</button>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<?php
if(isset($_POST['submit'])){
	
	$name =mysqli_real_escape_string($con, $_POST['name']);
	$mobile =mysqli_real_escape_string($con, $_POST['mobile']);
	$refer =mysqli_real_escape_string($con, $_POST['refer']);
	$qualification =mysqli_real_escape_string($con, $_POST['qualification']);
	$email =mysqli_real_escape_string($con, $_POST['email']);

	$insert ="insert into registration(name, mobile,refer,qualification,email) values('$name','$mobile','$refer','$qualification','$email')";
$res = mysqli_query($con, $insert);
	if ($res){
	?>
	<script> alert(' insert data successful');</script>
	<?php

}else
{
	?>
	<script> alert('no data insert');</script>
<?php
}
}


?>