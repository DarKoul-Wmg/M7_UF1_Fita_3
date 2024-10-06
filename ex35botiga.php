<h1>Lista de productos:</h1>

<?php

    $file_products = "productes.txt";
    $file_save = "comandes.txt";

   

    if(isset($_POST['nombre'])){
        $username = $_POST['nombre'];
        $selected_products = $_POST['products'];

        //sacar info 
        $users_info = file($file_save);

        if($selected_products){
            $actual_user = $username;

            foreach($selected_products as $product){
                $actual_user .= "," . trim($product);
            }
            echo "$actual_user";

            //anadir info a lo que existe
            $actual_user .= "\n";
            $users_info[] = $actual_user;

            //convertir a string para anadirlo
            file_put_contents($file_save,$users_info);

        }else{
            echo "<p>Selecciona un producto</p>";
        }
    } else{
        echo "<p>Introduce tu nombre</p>";
    }
    
    $products = file($file_products);
    echo"<form method = 'post' action = 'ex35botiga.php'>";

    //products[] Al agregar [] al nombre, PHP trata todos los checkboxes seleccionados como un array. 
    // Si el usuario selecciona varios productos,aparecen todos esos valores en $_POST['products'].
    foreach($products as $product){
        echo"<input type='checkbox' name='products[]' value='$product'> $product <br/>";
    }
    echo"<hr/>";
    echo"<label for='nombre'>Usuario: </label>";
    echo"<input type='text' name='nombre'>";
    echo"<input type='submit' value='Enviar'>";
    echo"</form>";

?>