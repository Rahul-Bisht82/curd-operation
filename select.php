<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'links.php'; ?>
</head>
<body>
<div class="main-div">
	<h1>list of candidates for web developer job</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<th>id</th>
					<th>name</th>
					<th>mobile no</th>
					<th>refer</th>
					<th>qualification</th>
					<th>email</th>
					<th colspan="2">operation</th>
				</thead>
				<tbody>
					<?php
					 include 'connection.php';
					$select = "select * from registration";
					$query = mysqli_query($con, $select);
					
					while ($result =mysqli_fetch_assoc($query)) {
					?>
					<tr>
					<td><?php echo $result['id']; ?></td>
					<td><?php echo $result['name']; ?></td>
					<td><?php echo $result['mobile']; ?></td>
					<td><?php echo $result['refer']; ?></td>
					<td><?php echo $result['qualification']; ?></td>
					<td><?php echo $result['email']; ?></td>
					<td><a href="update.php?id=<?php echo $result['id']; ?>"> <i class="fa fa fa-edit"></i> </a></td>
					<td><a href="delete.php?id=<?php echo $result['id']; ?>"> <i class="fa fa fa-trash"></i> </a></td>
					</tr>
					<?php
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>