<?php

/*function displayName($name){
    echo $name;
    echo "quetnha";
    echo '<br>';
}
displayName('Phong sida ');
$a= 'Huan ';
displayName($a);
array ();
 */

/*
$name = array('Huan', 'Phong', 'Thai', 'Dat', 'Vuong', 'Nam');

var_dump($name);
echo "<br>";
echo $name[1];

$arr = ["iphone" => 15, "ipad" => 12];
echo "<br>";
var_dump($arr);
echo "<br>";
echo $arr['iphone'];
echo "<br>";


echo "Iphone co gia la " . $arr['iphone'];
echo "<br>";
echo "Ipad co gia la " . $arr['ipad'];
echo "<br>";
foreach ($arr as $x => $x_value) {
    echo "$x has price $x_value";
    echo "<br>";
}
 */

$arr = [
    [
        "id" => 13,
        "name" => "Nguyen Hai Nam",
        "email" => "cz@gmail.com",
        "password" => "123456",
        "created_at" => "2018-08-24 12:05:50",
        "updated_at"
            => "2018-08-24 12:05:50"
    ],
    [
        "id" => 14,
        "name" => "Prof. Elvis Mann V",
        "email" => "rconroy@example.org",
        "password" => "L|^F{L)2^`",
        "created_at" => "2018-08-25 11:16:53",
        "updated_at" => "2018-08-25 11:16:53"
    ], [
        "id" => 15,
        "name" => "Daren Davis",
        "email" => "hlabadie@example.org",
        "password" => "4alYWUNlb!I@%ue^pMi",
        "created_at" => "2018-08-25 11:16:53",
        "updated_at" => "2018-08-25 11:16:53"
    ]
];

var_dump($arr);


?>