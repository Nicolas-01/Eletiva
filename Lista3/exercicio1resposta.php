<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 1 Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Resposta do Exercício 1</h1>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $i = 1;
            $menor = PHP_INT_MAX; // valor máximo possível
            $pos = 0;

            while ($i <= 7) {
                $numero = $_POST["numero$i"];

                if ($numero < $menor) {
                    $menor = $numero;
                    $pos = $i;
                }
                $i++;
            }
            echo "\nO menor número é $menor na posição $pos.";

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>