<!DOCTYPE html>
<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<title>Jawaban No 2</title>
	</head>
	<body>
		<style type="text/css">
			.input-group-addon.primary {
		color: rgb(255, 255, 255);
		background-color: rgb(50, 118, 177);
		border-color: rgb(40, 94, 142);
		}
		.input-group-addon.success {
		color: rgb(255, 255, 255);
		background-color: rgb(92, 184, 92);
		border-color: rgb(76, 174, 76);
		}
		.input-group-addon.info {
		color: rgb(255, 255, 255);
		background-color: rgb(57, 179, 215);
		border-color: rgb(38, 154, 188);
		}
		.input-group-addon.warning {
		color: rgb(255, 255, 255);
		background-color: rgb(240, 173, 78);
		border-color: rgb(238, 162, 54);
		}
		.input-group-addon.danger {
		color: rgb(255, 255, 255);
		background-color: rgb(217, 83, 79);
		border-color: rgb(212, 63, 58);
		}
		</style>
		<div class="container">
			<div class="row">
				<h2 class="text-center">Jawaban No 2</h2>
			</div>
			<div class="row">
				<div class="col-sm-offset-4 col-sm-4">
					<form method="post">
						<div class="form-group">
							<label for="validate-username">Username</label>
							<div class="input-group" data-validate="username">
								<input type="text" class="form-control" name="username" id="validate-username" placeholder="Username" required>
								<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
							</div>
						</div>
						<div class="form-group">
							<label for="validate-email">Email</label>
							<div class="input-group" data-validate="email">
								<input type="email" class="form-control" name="email" id="validate-email" placeholder="Validate Email" required>
								<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
							</div>
						</div>
						<div class="form-group">
							<label for="validate-number">Phone Number</label>
							<div class="input-group" data-validate="number">
								<input type="text" class="form-control" name="phone_number" id="validate-number" placeholder="0000000000" required>
								<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
							</div>
						</div>
						<button type="submit" class="btn btn-primary col-xs-12" disabled>Submit</button>
					</form>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function() {
		$('.input-group input[required], .input-group textarea[required], .input-group select[required]').on('keyup change', function() {
				var $form = $(this).closest('form'),
		$group = $(this).closest('.input-group'),
					$addon = $group.find('.input-group-addon'),
					$icon = $addon.find('span'),
					state = false;
		
			if (!$group.data('validate')) {
					state = $(this).val() ? true : false;
				}
				else if ($group.data('validate') == "username") {
					state = /^([a-za-z0-9_\.\-]){8}$/.test($(this).val())
				}else if ($group.data('validate') == "email") {
					state = /^([a-za-z0-9_\.\-])+\@(([a-za-z0-9\-])+\.)+([a-za-z0-9]{2,4})+$/.test($(this).val())
				}else if ($group.data('validate') == "number") {
					state = /^([0-9]){3}[0-9]{3}[0-9]{4}$/.test($(this).val());
				}
				if (state) {
						$addon.removeClass('danger');
						$addon.addClass('success');
						$icon.attr('class', 'glyphicon glyphicon-ok');
				}else{
						$addon.removeClass('success');
						$addon.addClass('danger');
						$icon.attr('class', 'glyphicon glyphicon-remove');
				}
		
		if ($form.find('.input-group-addon.danger').length == 0) {
		$form.find('[type="submit"]').prop('disabled', false);
		}else{
		$form.find('[type="submit"]').prop('disabled', true);
		}
			});
		
		$('.input-group input[required], .input-group textarea[required], .input-group select[required]').trigger('change');
		
		
		});
		</script>
		<!-- <script>
		var myInput = document.getElementById("username");
		var letter = document.getElementById("letter");
		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
		document.getElementById("message").style.display = "block";
		}
		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
		document.getElementById("message").style.display = "none";
		}
		// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
		// Validate lowercase letters
		var lowerCaseLetters = /[a-z]/g;
		if(myInput.value.match(lowerCaseLetters)) {
		letter.classList.remove("invalid");
		letter.classList.add("valid");
		} else {
		letter.classList.remove("valid");
		letter.classList.add("invalid");
		}
		}
		</script> -->
	</body>
</html>