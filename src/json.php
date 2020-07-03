<?php


$users = ['user' => ['name' => 'Dima', 'nickname' => 'Dimanych'],
    'user1' =>
        ['name' => 'Kolya', 'nickname' => 'Kolyan']];

$mudvins = json_encode($users);


$newmudvins = file_put_contents('output.json', $mudvins);

$huy = file_get_contents('output.json');

//$bighuy = str_shuffle($huy);


if (mt_rand(0, 1)) {
    unset($users['user1']);
}
$huy1 = json_encode($users);

$huy2 = file_put_contents('output2.json', $huy1);

$huy3 = file_get_contents('output2.json');

$megahuy = json_decode($huy,true);

$maegahuy1 = json_decode($huy3,true);

$defference = array_diff_assoc($megahuy ,$maegahuy1);

var_dump($defference);

if (!empty($defference)){
    echo 'Defference is ' . print_r($defference);
}else{
    echo 'Массивы не отличаются';
}





//array_push($arrayhuy2,'Nikolaev');






//if ($megahuy == $huy){
//    echo "There is no difference";
//}else{
//    echo "There is a difference " . $huy . ' between ' . $megahuy;
//}






