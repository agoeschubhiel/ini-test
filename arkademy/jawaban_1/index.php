<!DOCTYPE html>
<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<title>Jawaban No 1</title>
	</head>
	<body>
		<div class="container">
			<form action="php_self" method="post">
				<div class="form-group">
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="address" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="hobbies" class="form-control">
				</div>
				<div class="form-group">
					<input type="radio" name="is_married" value="single" class="jenis" class="form-control"> Single
					<input type="radio" name="is_married" value="married" class="jenis" class="form-control"> Married
				</div>
				<div class="form-group">
					<input type="radio" name="school" value="highschool" class="jenis" class="form-control"> HighSchool
					<input type="radio" name="school" value="university" class="jenis" class="form-control"> University
				</div>
				<div class="form-group">
					<input type="text" name="skill" class="form-control">
				</div>
			</form>
		</div>
		<?php
			$myObj->name = "Agus Hermawan Perdana";
			$myObj->address = "Kp. Tambun Permata Desa Pusaka Rakyat Tarumajaya Bekasi 17214";
			$myObj->hobbies = "Nonton Anime & Ngoding";
			$myObj->is_married = "Single";
			$myObj->school = "HighSchool";
			$myObj->skill = "Bootstrap, html, wordpress, css, php, mysql, dll";
			$myJSON = json_encode($myObj);
			echo $myJSON;
		?>
	</body>
</html>