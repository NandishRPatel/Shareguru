
<?php
		$command = `python stock.py`;
		//echo $command;
		$c=(string)$command;
		$arr = explode('###',$c);
		//echo $arr[0];
		echo "<br/>";
		echo "<table border=1 align=center cellpadding=5px><tr><td>CODE</td><td>NAME</td><td>PRICE</td><td>CHANGE</td><td>CHANGE IN %</td><td>HIGH</td><td>LOW</td><td>PREVIOUS CLOSE</td><td>OPEN</td></tr>";
		 /*foreach( $arr as $value ) {
            $arr2=explode('$$$',$value);
		 }*/
		 //echo $arr2[0];
		for( $i = 0; $i<10; $i++ ) {
				echo "<tr>";
				$x=explode("$$$",$arr[$i]);
				for( $j = 0; $j<9; $j++ ){
					echo "<td>";
					echo $x[$j];
					echo "</td>";
				}
				echo "</tr>";
         }
		 echo "</table>";
		 ?>
	