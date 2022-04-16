<?php
	// This my test in Codility 
	/* #4 Perm Missing Element
		Find the missing element in a given permutation
	*/
	function solution($A)
	{
		if(empty($A))
		{
			return 1;
		}
		sort($A);
		
		foreach($A as $key => $val)
		{
			$n = $key+1;
			if($n != $val)
			{
				return $n;
			}
		}
		return count($A)+1;
	}

	$A = array();
	/*for($i=0;$i<10;$i++)
	{
		array_push($A,rand(1,10));
	}*/
	$A[0] = 6;
	$A[1] = null;
	$A[2] = 2;
	$A[3] = 4;
	$A[4] = 7;
	print_r($A);
	echo "<br/><br/>";
	print_r(solution($A));
	

?>