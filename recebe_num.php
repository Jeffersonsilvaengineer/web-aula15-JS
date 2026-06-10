<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>

<body>
    <?php
    // $_GET['num'] = '32';
    if(isset($_GET['num'])) {
        echo $_GET['num'] * 3;
    } else {
        echo "0";
    }
    ?>
</body>

</html>