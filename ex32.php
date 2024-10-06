<form method="post" action="ex32.php">
	<p>INTRODUEIX DADES</p>
	<textarea name="comentari"></textarea>
	<label for="separador">separador:</label>
	<input type="text" name="separador">
	<input type="submit" value="Envia">
</form>
	<?php
		$filename = "comentaris.txt";
		$text = $_POST['comentari'];
		$separador = $_POST['separador'];

		if($text || $separador){
			// Crear el archivo si no existe
			if (!file_exists($filename)){
				fopen($filename, 'w');
			}

			//contenido del archivo
			$content = file($filename);
			echo "<p>$text</p><br/>";
			
			$text .= "\n";
			//cambiamos los " " por el separador y lo anadimos al contenido del archivo
			$text_formated = str_replace(" ","$separador",$text);
			echo "<p>$text_formated</p><br/>";
			$content[] = $text_formated;
			file_put_contents($filename, $content);
		}else{
			echo"<p>Falta introduir un separador</p>";
		}
	?>


