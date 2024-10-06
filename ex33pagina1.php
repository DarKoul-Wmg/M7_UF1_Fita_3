<h2>Contingut de l'arxiu</h2>

<?php
    $filename = "ex33.txt";
    
    //si hay texto lo seleccionamos, sino creamos text vacio
    if(isset($_POST['text'])){
        $text = $_POST['text'];
    } else{
        $text = "";
    }
    
    //sacamos contenido del archivo
    $content = file($filename);

    if($text){ //Si hay algo en el texto, lo anadimos
        $text .= "\n";
        $content[] = $text;
        file_put_contents($filename, $content);
    }
    

    foreach($content as $comment){
        echo"<p>$comment</p><hr/>";
    }

?>

<form method="post" action="ex33pagina1.php">
    <textarea name="text"></textarea>
    <input type ="submit" value="Envia">
</form>

