<?php



$MultiArr = [
    "1" => [
        "name" => "Erfan",
        "age" => "35",
        "email" => "erfan@gmail.com",
    ],
    "2" => [
        "name" => "Iman",
        "age" => "45",
        "email" => "iman@gmail.com",
    ],
    "3" => [
        "name" => "Yasin",
        "age" => "33",
        "email" => "yasin@gmail.com",
    ],
];

$jsonStr = json_encode($MultiArr);
echo ($jsonStr);
?>