<!-- 
Стартовый шаблон для страниц

Виды страниц подключать через переменную $content
$content

 -->


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="/img/favicon.ico">

    <title><?= $title ?></title>
    <style>

    </style>
</head>

<body>
    <!-- <h1>ШАБЛОН TEST</h1> -->
    <?php include "functions/staticConnect.php"; ?>
    <?= $content ?>




</body>

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/fontawesomeKit.js"></script>
<script src="/js/fontawesomeUse.js"></script>

<script src="/js/main.js"></script>

</html>