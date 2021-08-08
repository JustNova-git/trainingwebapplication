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

    <link rel="stylesheet" href="/css/mainFront.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/modal.css">

    <link href="/css/fontAwesome/css/all.css" rel="stylesheet">

    <link rel="shortcut icon" href="/img/favicon.ico">
    <title>Вэб-разработка | <?= $title ?></title>

</head>

<body>
    <!-- <h1>ШАБЛОН MAINPAGE</h1> -->
    <?= $content ?>




</body>

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/main.js"></script>




<script>
    Registration();
</script>
<script>
    autorize();
</script>

</html>