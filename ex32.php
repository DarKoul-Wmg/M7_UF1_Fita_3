<form method="post" action="ex32.php">
	<p>INTRODUEIX DADES</p>
	<textarea name="comentari"></textarea>
	<label for="separador">separador:</label>
	<input type="text" name="separador">
	<input type="submit" value="Envia">
	
	<?php
		$filename = "comentaris.txt";
		$text = $_POST['comentari'];
		$separador = $_POST['separador'];

		if($text || $separador){
			// Crear el archivo si no existe
			if (!file_exists($filename)){
				$file = fopen($filename, 'w');
			}
			$text_formated = str_replace(" ","$separador",$line);
		}
	 ?>


</form>