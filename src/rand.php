<?php


$array = [];

for ($i = 0; $i <= 50; $i++) {

    $array[] = mt_rand(0, 100) . ' ,';
}
print_r($array);

echo '<hr>';

$fo = fopen('file.csv', 'r');
if (!$fo) {
    echo 'file is not exists';
    die();
}
$ret = [];

while ($str = fgetcsv($fo, 1000 * 1000, ',')) {
    $ret[] = $str;
}



foreach ($ret as $ar => $value) {
    $sum = array_sum($value);
    print_r($sum);
}
echo '<hr><br>';

foreach ($value as $item){
    if ($item % 2 == 0){
        $newitem[] = (int)$item;

       }
    }
//var_dump($newitem);
echo array_sum($newitem);



















