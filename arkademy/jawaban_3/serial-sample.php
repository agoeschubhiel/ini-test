<?php
$inputString = '';
$inputLength = 4;
$serialString = '';
if(isset($_POST['inputString']) && !empty($_POST['inputString']))
{
	require_once 'Serial.php';
	$inputString = addslashes(strip_tags($_POST['inputString']));
	$inputLength = (int)$_POST['length'];
	$serial = new Serial($inputLength);
	$serialString = "Generated serial (user input): <strong>{$serial->generate($inputString)}</strong>";
}
if(isset($_GET['random']))
{
	require_once 'Serial.php';
	$serial = new Serial();
	$serialString = "<strong>{$serial->generate()}</strong>";
}
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?' . '>'?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title>Example of serial number generation</title>
		<style type="text/css">
			html, body{
				font-size:12px;
				font-family:Arial;
				text-align:center;
				margin:0;
				padding:0;
			}
			h1{
				font-size:22px;
				margin-top:50px;
			}
			a{
				color:green;
			}
			form{
				margin:0 auto;
				width:300px;
				border:1px solid #ccc;
				padding:10px;
			}
			form p{
				text-align:left;
			}
			form p label{
				width:80px;
				display:inline-block;
				margin-right:10px;
			}
			#serial{
				font-size:16px;
				text-align:center;
			}
			#obs{
				font-size:10px;
				color:#777;
			}
			#obs span{
				color:red;
			}
		</style>
	</head>
	<body>
		<h1>Serial number generation</h1>
		<a href="?random" title="">Generate a random serial</a>
		<?php echo "<p id='serial'>{$serialString}</p>";?>
		<?php
		$text = 'abcdefghijklmnopqrstuvwxyz123457890';
		$panj = 4;
		$txtl = strlen($text)-1;
		$result1 = '';
		for($i=1; $i<=$panj; $i++){
		$result1 .= $text[rand(0, $txtl)];
		}
		$result2 = '';
		for($i=1; $i<=$panj; $i++){
		$result2 .= $text[rand(0, $txtl)];
		}
		$result3 = '';
		for($i=1; $i<=$panj; $i++){
		$result3 .= $text[rand(0, $txtl)];
		}
		$result4 = '';
		for($i=1; $i<=$panj; $i++){
		$result4 .= $text[rand(0, $txtl)];
		}
		// echo "$result1-";
		// echo "$result2-";
		// echo "$result3-";
		// echo "$result4 <br>";
		?>
		<?php
		$name = array("$result1", "$result2", "$result3", "$result4");
		shuffle($name);
		for ($i = 0; $i < count($name); $i++) {
		echo $name[$i]."<br />";
		}
		?>
	</body>
</html>