<?php 

	$file=$_POST['fname'];

	if(file_exists($file))

	{

		$fp=fopen($file,"r");

		echo "<br><br>";

		echo "<table border=2 align=center>";

		echo "<tr><th>Roll No</th>";

		echo "<th>Name</th>";

		echo "<th>Syspo</th>";

		echo "<th>TCS</th>";

		echo "<th>CN</th>";

		echo "<th>PHP</th>";

		echo "<th>JAVA</th>";

		echo "<th>BA</th>";

		echo "<th>Percentage</th></tr><br>";

		while(!feof($fp))

		{

			$d=fgets($fp);

			$s=explode(' ',$d);

			if(!empty($s[0]) && !empty($s[1]) && !empty($s[2]) && !empty($s[3]) && !empty($s[4])                     && !empty($s[5])&& !empty($s[6])&& !empty($s[7]))

		{

			$m=array($s[2],$s[3],$s[4],$s[5],$s[6],$s[7]);

			$total=array_sum($m);

			$per=$total/6;

			echo "<tr><td>$s[0]</td>";

			echo "<td>$s[1]</td>";

			echo "<td>$s[2]</td>";

			echo "<td>$s[3]</td>";

			echo "<td>$s[4]</td>";

			echo "<td>$s[5]</td>";

			echo "<td>$s[6]</td>";

			echo "<td>$s[7]</td>";

			echo "<th>$per</th></tr><br>";

			

		}

	

		}

	}

?>