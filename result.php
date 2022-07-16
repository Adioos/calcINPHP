<?php
$result = require __DIR__ . '/calc.php';
?>
<html>
<head>
    <title>Калькулятор</title>
</head>

<body>
<b>Результат вычислений:</b>
<br>
<?= $result ?>
<br>
<a href="index.php">Назад</a>
</body>
</html>

