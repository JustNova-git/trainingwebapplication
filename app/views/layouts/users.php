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

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/newprofile.css">

    <link href="/css/fontAwesome/css/all.css" rel="stylesheet">

    <link rel="shortcut icon" href="/img/favicon.ico">

    <title><?= $title ?></title>

</head>

<body>
    <!-- <h1>ШАБЛОН ADMIN</h1> -->
    <?= $content ?>



</body>

<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/fontawesomeKit.js"></script>
<script src="/js/fontawesomeUse.js"></script>


<script src="/js/main.js"></script>
<script src="/js/admin.js"></script>

</html>