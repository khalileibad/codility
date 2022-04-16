<?php
	/* 
		This my test in Codility 
		#3
		that, given three integers X, Y and D, 
		returns the minimal number of jumps from position X to a position equal to or greater than Y.
	*/
	function solution($X, $Y, $D) 
	{
		// write your code in PHP7.0
		$a = ($Y - $X)/$D;
		$int = (int) $a;
		if ( $int != $a) {
			return $int +1;
		}
		return $a;
	}

	
	echo solution(10,85,30);

?>