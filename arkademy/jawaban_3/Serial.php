<?php
class Serial
{
	private $length = null;
	public function __construct($length = 4)
	{
		if(($length > 0) && ($length <= 10))
			$this->length = $length;
		else
			throw new Exception('Invalid length');
	}
	public function generate($input = null)
	{
		// check to see if we have some input string
		if(is_null($input))
			$input = uniqid(microtime(), true);
		// first we encode the input string with the sha1 algorithm.
		$encodedInput = sha1($input);
		// our secret is the ASCII value of the first digit
		$secret = ord($input{0});
		// and we define some commom variables
		$serial = array();
		$blockSize = $this->length;
		$blockCount = -1;
		// loop the four main blocks of the serial
		while(++$blockCount < 4)
		{
			// our initial blocks will be retrived from the encoded string
			$block = substr($encodedInput, ($blockCount * $blockSize), $blockSize);
			$ascii = array();
			// we get the ASCII codes from each digit in the block and add the
			// secret
			for($i = 0; $i < strlen($block); $i++)
				$ascii[] = $secret + ord($block{$i});
			// now we limit the ASCII array to 20 numbers
			$ascii = array_slice($ascii, 0, 20);
			$serialPart = '';
			// loop through the ASCII array
			foreach($ascii as $numbers)
			{
				switch($numbers)
				{
					case $numbers > 122:
						$numbers -= 40;
						break;
					case $numbers <= 48:
						$numbers += 40;
						break;
				}
				// we get the ASCII character from the new ASCII code
				$serialPart .= chr($numbers);
			}
			// new that we have the ASCII string, we encode it with the MD5
			// algorithm
			$serialPart = md5($serialPart);
			$finalSerialPart = '';
			$x = -1;
			// loop 'till the block size to get the digits from the MD5 string
			while(++$x < $blockSize)
			{
				// our index will be the current position in the string
				// multiplied by the number of the current block plus 1
				$index = $x * ($blockCount + 1);
				// if the index is greater then the string length, we
				// recalculate using two blocks before to avoid errors with the
				// offset
				if($index >= strlen($serialPart))
					$index = $x * (($blockCount / 2) + 1);
				$finalSerialPart .= $serialPart{$index};
			}
			// we add the final block string to the serial's array
			$serial[$blockCount] = $finalSerialPart;
		}
		// we return the final string separated by dashes
		return implode('-', $serial);
	}
	/**
	* Checks whether the given serial was generated with the given input
	* string.
	*
	* Returns true if the resulting serial number of the input string matches
	* the serial given, or false otherwise.
	* @param string $serial Serial number.
	* @param string $input Input string.
	* @return bool
	*/
	public function validate($serial, $input)
	{
		return strcmp($this->generate($input), $serial) === 0;
	}
}
?>