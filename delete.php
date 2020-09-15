<?php
include 'connection.php';
$id = $_GET['id'];
$deletequery = "DELETE FROM registration WHERE id = $id";
$query = mysqli_query($con, $deletequery);

if ($query){
	?>
	<script> alert(' data delete successful');</script>
	<?php
	header('location:select.php');
}else
{
	?>
	<script> alert('no data delete');</script>
<?php
}

?>