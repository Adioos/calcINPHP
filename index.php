<!doctype html>
<head>
    <title>Калькулятор</title>
</head>
<style>
    body {
        background-color: powderblue;
        font-family: verdana;
    }

    h1 {
        text-align: center;
    }

    h4 {
        text-align: end;
    }

    form {
        line-height: 800px;
        text-align: center;
    }

</style>
<body>
<h1>Калькулятор онлайн</h1>
<form action="/result.php" name="form">
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" value="Посчитать">
</form>
<h4>© Copyright 2022, Adioos.</h4>
</body>
</html>