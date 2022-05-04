<?php
	// This my test in Codility 
	// #5 Tape Equilibrium
	function solution($A)
	{
		$ret = array();
		$x = array_sum($A);
		$y = 0;
		echo $x."<br/><br/>".count($A)."<br/> ";
		foreach($A as $key => $val)
		{
			$x -= $val;
			$y += $val;
			$w = $x - $y;
			if($w < 0)
			{
				$w = $w * -1;
			}
			if($key != count($A) -1)
			{
				array_push($ret, $w);
				echo $key." => V: ".$val." ---- P: ".$w." ---- MATH $x  -  $y <br/>";
			}
			
		}
		return min($ret);

	}

	$A = array();
	/*for($i=0;$i<10;$i++)
	{
		array_push($A,rand(1,10));
	}*/
	$A[0] = 3;
	$A[1] = 1;
	$A[2] = 2;
	$A[3] = 4;
	$A[4] = 3;
	print_r($A);
	echo "<br/><br/>";
	print_r(solution($A));
	
	
	echo "<br/>P = 1, difference = |3 − 10| = 7<br/>
P = 2, difference = |4 − 9| = 5<br/>
P = 3, difference = |6 − 7| = 1<br/>
P = 4, difference = |10 − 3| = 7 ";

?>