<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first site </title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </div>

    <div class="about_me">

        <h1>  <?php echo $p ?> </h1>

        <div class="data">
            <div class="myImg">
                <?php
                echo '<img src="/img/hellokitty.png">';
                ?>
            </div>

            <div class="fullname">
                <p> Меня зовут
                    <?php echo $name, ' ', $surname, ',' . '<br>';
                    echo 'я из города', ' ', $city, '.'; ?>
                </p>

                <p> Мне
                    <?php echo $age; ?>
                    лет. </p>
                <p> Я успешно установила локальный веб-сервер и создала свой <span class="colorText"> сайт</span>. </p>
            </div>
        </div>

        <div class="knowledge">

            <?php include 'knowledge.inc.php'; ?>
            <?php
            echo $a, ' ', $b, ' ', $c;
            ?> <br>

            <?php
            $a = 2;
            $b = 8;
            $c = $a ** $b;
            echo 'Например, могу посчитать, что ', $a, ' в степени ', $b, ' будет ', $c, '.';
            ?> <br>
            <?php
            echo $compare;
            ?> <br>

            <?php
            echo 'А ещё пытаюсь разобраться с рекурсивными функциями:',
            recursion(1), '. ', PHP_EOL,
            'Правда, круто?';
            ?> <br>

            <?php
            echo 'Между прочим, сегодня уже ' . date('d-m-Y') . '. Осталось ' . $datediff . ' дней до Нового года!';
            ?>

        </div>

        <div class="article">
            <p class="text">
                Рассказ о себе. Я учусь в десятом классе и в будущем планирую поступать на программиста. В свободное время я занимаюсь рисованием либо общаюсь с друзьями.
        </div>
    </div>

    <?php include 'footer.inc.php' ?>

</div>

</body>
</html>