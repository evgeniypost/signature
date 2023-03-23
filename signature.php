<?php
require_once 'HandlerSignature.php';

?>
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
<?php
foreach (Color::cases() as $value) {
    HandlerSignature::paint($value);
}
?>
<button onclick="document.location='index.php'">Вернуться назад</button>
</body>
</html>
