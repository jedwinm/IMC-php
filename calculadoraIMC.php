<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>
    <h1>Calculadora IMC</h1>
    <form action="" method="post">
        <label for="peso">Peso en KG</label>
        <input type="number" name="peso" require>
        <label for="altura">Altura en Mts</label>
        <input type="number" name="altura" step="0.01" require>
        <button type="submit">Calcular IMC</button>
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $PESO = $_POST['peso'];
            $ALTURA = $_POST['altura'];

            if ($PESO > 0 && $ALTURA > 0 ) {
                
                $IMC = $PESO / ($ALTURA * $ALTURA);

                //determinar la categoria
                $categoria = "";
                $img="";
                if ($IMC < 18.5 ) {
                    $categoria = 'Bajo peso';
                    $img ="<img href='https://urldelaimagen.jpg'>"; 
                }elseif ($IMC >= 18.5 && $IMC < 25) {
                    $categoria = "Peso normal";
                    $img ="<img href='https://urldelaimagen.jpg'>"; 
                }elseif ($IMC >= 25 && $IMC < 30) {
                    $categoria ="Sobrepeso";
                    $img ="<img href='https://urldelaimagen.jpg'>"; 
                }else{
                    $categoria ="Obesidad";
                    $img ="<img href='https://urldelaimagen.jpg'>"; 
                }

                echo "<h2>Resultado:</h2>";
                echo "Su IMC es: ". number_format($IMC, 2 ) . "<br>";
                echo "Su Categoria es: ". $categoria . "<br>";

            }

        }
    
    ?>

</body>
</html>