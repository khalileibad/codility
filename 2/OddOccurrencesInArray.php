<?php
	// This my test in Codility 
	// #2 Odd Occurrences In Array
	function solution($A)
	{
		$ret = array_count_values($A);
		$x= array_search(1,$ret);
		if($x === false)
		{
			foreach($ret as $key=>$val)
			{
				if($val %2 == 1)
				{
					return $key;
				}
			}
		}
		return $x;
	}

	$A = array();
	for($i=0;$i<700;$i++)
	{
		array_push($A,rand(1,1000));
	}

	echo solution($A);

?>