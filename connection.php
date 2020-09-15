<?php
$username ="root";
$password = "";
$server = "localhost";

$con = mysqli_connect($server,$username,$password);

if ($con){
	?>
	<script> alert('connection successful');</script>
	<?php

}else
{
	?>
	<script> alert('no connection');</script>
<?php
}
$db = 'curdphp';
$database = mysqli_select_db($con, $db);
if ($database){
	?>
	<script> alert('database connect successful');</script>
	<?php

}else
{
	?>
	<script> alert('no database connection');</script>
<?php
}

?>