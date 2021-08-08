<!-- 
Стартовый шаблон для страниц

Виды страниц подключать через переменную $content
$content

 -->

<!doctype html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/messages.css">

    <!--load all styles -->

    <link href="/css/fontAwesome/css/all.css" rel="stylesheet">

    <link rel="shortcut icon" href="/img/favicon.ico">
    <title><?= $title ?></title>
    <!-- <script defer src="/css/fontAwesome/js/all.js"></script> -->

</head>

<body>

    <!-- <h1>ШАБЛОН MAIN</h1> -->
    <?php include "functions/staticConnect.php"; ?>
    <?= $content ?>
    <!-- <h1>ШАБЛОН MAIN</h1> -->
</body>
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/fontawesomeKit.js"></script>
<script src="/js/fontawesomeUse.js"></script>
<script src="/js/main.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/slider.js"></script>

</html>