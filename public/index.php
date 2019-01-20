<?php

function a($dir)
{
    $dir = new DirectoryIterator($dir);
    foreach ($dir as $item) {
        if (!$item->isDot()) {
            if ($item->isDir()) {
                echo '<ul>'.'<b>' . $item . '</b>' . '<br>';
                a($item->getPathname());
            } else {
                echo '<li>' . $item . '</li>' . '<br>'.'</ul>';
            }
        }
    }
}
echo '<ul>';
a("./");

echo '--------------------------------------------<br><br><br>';



$count = 1000000;
$last = memory_get_usage();
echo 'Операций:' . $count . '<br><br>';

$begin = microtime();
$arr = [];
for ($i=0; $i < $count; $i++) {
    $arr[] = $i;
}
echo 'Оператор for<br>';
echo 'Время:   <br>';
print_r(microtime() - $begin);
echo "<br>";
echo 'Память:   ';
echo ((memory_get_usage() - $last)/1048576) . PHP_EOL;
$last = memory_get_usage();

echo "<br><br>";

$j=0;
$begin = microtime();
foreach ($arr as $item) {
    $j++;
}
echo 'Оператор foreach<br>';
echo 'Время:   <br>';
print_r(microtime() - $begin);
echo "<br>";
echo 'Память:   ';
echo ((memory_get_usage() - $last)/1048576) . PHP_EOL;
$last = memory_get_usage();

echo "<br><br>";


$begin = microtime();
$obj = new ArrayIterator([]);
for ($i=0; $i < 1000000; $i++) {
    $obj->append($i);
}
echo 'Итератор<br>';
echo 'Время:   <br>';
print_r(microtime() - $begin);
echo "<br>";
echo 'Память:   ';
echo ((memory_get_usage() - $last)/1048576) . PHP_EOL;
$last = memory_get_usage();