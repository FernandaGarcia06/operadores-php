<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operações Aritméticas</title>
</head>
<body>
    <div class="card">
        <h1>Operações Aritméticas</h1>
        <hr>
        <form action="calcular.php" method="post">
            <p>
                <label for="n1">
                    informe um número:
                    </label>
                    <input type="number" name="n1" id="n1" required>
                    </p>
            <p>
                <label for="n1">
                    informe outro número:
                    </label>
                    <input type="number" name="n2" id="n2" required>
                    </p>
                    <p>
                        <input type="submit" value="calcular">
                        <input type="reset" value="limpar">
                    </p>


</form>
</div>
</body>
</html>