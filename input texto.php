<?php
session_start();
    $_SESSION['cont']++;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome!</title>
    </head>
    <body>
         <div>  
            <form method="post" action="texto.php">
                <label for="texto">Write your text:</label>
                <input type="text" name="texto" required size="50px" />
                <br>
                <label for="colors">Choose color:</label>
                <input type="color" name="color" value="#000000"/>
                <br>
                <label for="tamaño">Choose font size (10-30):</label>
                <input type="range" list="size" name="tamaño" min="10" max="30">
                <datalist id="size">
                    <?PHP
                        $valor=10;
                        do{
                            echo "<option value=".$valor.">";
                            $valor++;
                        }while($valor<30) 
                    ?>  
                </datalist>
                <br> 
                <p>Choose font:<br>
                <label><input type="radio" name="font" value="Arial">Arial</label>
                <br>
                <label><input type="radio" name="font" value="Helvetica" checked>Helvetica</label>
                <br>
                <label><input type="radio" name="font" value='Times New Roman'>Times New Roman</label>
                <br>
                </p>
                <label>Allow cookies?</label>
                <input type="checkbox" name="cookie">
                <br/>
                <input type="submit" name="aceptar" value="Enviar"/>
            </form>
        </div>  
        <?php
        echo "Llevas ".$_SESSION['cont']." visitas a esta web</br>";
        include "footer.php";
        ?>
    </body>
</html>