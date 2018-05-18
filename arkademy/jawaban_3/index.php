<!DOCTYPE html>
<html>
	<head>
		<title>Jawaban No 3</title>
	</head>
	<body>
		<?php
		$uni_id = rand(10,99);
		$first = $uni_id;
		$chars_to_do = 5 - strlen($uni_id);
		for ($i = 1; $i <= $chars_to_do; $i++) { $first .= chr(rand(48,57)); }
		echo $first;
		$chars_to_do = 5 - strlen($uni_id);
		for ($i = 1; $i <= $chars_to_do; $i++)
		{
			if ($i == "2") { $second[] = $uni_id; }
			$second[] = chr(rand(48,57));
		}
		echo "-" . implode("", $second);
		$chars_to_do = 5 - strlen($uni_id);
		for ($i = 1; $i <= $chars_to_do; $i++)
		{
			if ($i == "3") { $third[] = $uni_id; }
			$third[] = chr(rand(48,57));
		}
		echo "-" . implode("", $third);
		$chars_to_do = 5 - strlen($uni_id);
		for ($i = 1; $i <= $chars_to_do; $i++)
		{
			$fourth[] = chr(rand(48,57));
		}
		$fourth[] = $uni_id;
		echo "-" . implode("", $fourth);
		?>
		<hr>
		<?php
		/*
		* Create a random string
			* @author	XEWeb <>
		* @param $length the length of the string to create
		* @return $str the string
		*/
		function randomString($length = 6) {
			$str = "";
			$characters = array_merge(range('a','z'), range('0','9'));
			$max = count($characters) - 1;
			for ($i = 0; $i < $length; $i++) {
				$rand = mt_rand(0, $max);
				$str .= $characters[$rand];
			}
			return $str;
		}
		?>
		<hr>
		<?php
		$a = mt_rand(100000,999999);
		for ($i = 0; $i<6; $i++)
		{
		$a .= mt_rand(0,9);
		}
		?>
	</body>
</html>