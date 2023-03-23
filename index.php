<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Создание подписи</title>
</head>
<body>
<form method="post" action="signature.php">
    <div>
        <label>Введите текст подписи</label>
    </div>
    <div>
        <input type="text" name="text" placeholder="Текст подписи">
    </div>
    <div>
        <label>Введите ФИО</label>
    </div>
    <div>
        <input type="text" name="name" placeholder="Имя">
    </div>
    <div>
        <label>Введите телефон</label>
    </div>
    <div id="tel">
        <input type="tel" name="tel[]" placeholder="Телефон"><br>
    </div>
    <div>
        <button type="button" onclick="addTel()">Добавить телефон</button>
    </div>
    <div>
        <label>Введите EMAIL</label>
    </div>
    <div id="email">
        <input type="email" name="email[]" placeholder="Email"><br>
    </div>
    <div>
        <button type="button" onclick="addEmail()">Добавить Email</button>
    </div>
    <div>
        <input class="sbmt" type="submit">
    </div>
</form>
</body>
</html>