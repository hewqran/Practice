<?php
$a = 'Я знаю математику на';
$b = 70;
$c = 'баллов из 100.';
?>

<?php
$num1 = 3;
$num2 = 4;
if (M_PI > $num1 && M_PI < $num2)
    $compare = "Или то, что число π находится между $num1 и $num2.";
?>

<?php
function recursion($r)
{
    if ($r <= 10) {
        echo ' ' . "$r";
        recursion($r + 1);
    }
}

?>

<!--Вычисляем дату до Нового года.-->
<?php
$today = time();
$newYear = strtotime("2023-01-01");
$datediff = floor(($newYear - $today) / (60 * 60 * 24));
?>
