<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<title>Jawaban No 6</title>
</head>
<body>
	<table class="table table-striped table-hover">
		<thead class="thead-dark">
			<tr>
				<th>Post Title</th>
				<th>CreatedBy</th>
				<th>Comment</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql="SELECT*FROM user,posts,comments";
				$result=mysqli_query($conn, $sql);
				if($result){
					while($row=mysqli_fetch_row($result)){
						echo "<tr>";
						echo "<td>$row[3]</td>";
						echo "<td>$row[2]</td>";
						echo "<td>$row[7]</td>";
						echo "</tr>";
						}
						mysqli_free_result($result);
					}
			?>
		</tbody>
	</table>
</body>
</html>