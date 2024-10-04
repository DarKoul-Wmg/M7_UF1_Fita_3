
<?php 
	$content = file("contactes31.txt");
	$new_content = [];
	echo "<h1>PROCESSA CONTACTES</h1>";

	echo"<table border='1'>";
	echo"<tr><th>Nom</th><th>Cognom 1</th><th>Cognom2</th><th>Tel</th></tr>";
	
	foreach ($content as $line){
		//echo"<p>$line</p><br/>";
		$new_line = str_replace(",","#",$line);
		$new_content[] = $new_line;

		$fields = explode(",", $line);
		echo"<tr>";
		foreach ($fields as $field){
			echo"<td>$field</td>";
		}
		echo"</tr>";
	}
	echo"</table>";
	file_put_contents("contactes31b.txt",$new_content);
?>