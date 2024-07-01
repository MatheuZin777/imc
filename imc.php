<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
<form method="post">
            <h1>IMC</h1>
            <input type="number" placeholder="Seu peso" name="peso">
            <input type="text" placeholder="Sua Altura" name="altura">
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];
        }function imc($altura, $peso){
            $altura = str_replace(',', '.', $altura);
            $result = $peso/pow($altura, 2);
            return $result;
        }
        if (isset($peso) && isset($altura)) {
            $imc = imc($altura, $peso);
            echo "Seu IMC é: ". round($imc, 2);
        }
    ?>
</body>
</html>