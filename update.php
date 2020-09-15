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
										<?php
										include 'connection.php';
										$id = $_GET['id'];
										$select = "select * from registration where id=$id";
										$query = mysqli_query($con, $select);
										$result = mysqli_fetch_assoc($query);

										if(isset($_POST['submit'])){
										$name =mysqli_real_escape_string($con, $_POST['name']);
										$mobile =mysqli_real_escape_string($con, $_POST['mobile']);
										$refer =mysqli_real_escape_string($con, $_POST['refer']);
										$qualification =mysqli_real_escape_string($con, $_POST['qualification']);
										$email =mysqli_real_escape_string($con, $_POST['email']);
										$updatequery =" update registration set id=$id, name='$name', mobile ='$mobile', refer='$refer',qualification='$qualification',email ='$email' where id = $id" ;
										$query = mysqli_query($con, $updatequery);
										if ($query){
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
										
										
										<input type="text" class="form-control" placeholder="Enter your name" name="name" value="<?php echo $result['name']; ?>" required="">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Enter mobile no" name="mobile" value="<?php echo $result['mobile']; ?>" required="">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Any Refrence" name="refer" value="<?php echo $result['refer']; ?>">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="enter your qualification" name="qualification" required="" value="<?php echo $result['qualification']; ?>">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter your email" name="email" required="" value="<?php echo $result['email']; ?>" >
									</div>
									
									<a href="update.html"><button type="submit" class="btn btn-primary" name="submit">Update</button></a>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</body>
</html>