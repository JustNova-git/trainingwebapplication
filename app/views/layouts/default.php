<!-- 
Стартовый шаблон для страниц

Виды страниц подключать через переменную $content
$content

 -->


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/favicon.ico">

    <!-- Bootstrap CSS -->

    <title>Default | <?=$title?></title>
</head>

<body>
    <h1>Это шаблон по умолчанию Default</h1>
    А дальше контент:
{
    <?= $content ?>
}



</body>

</html>