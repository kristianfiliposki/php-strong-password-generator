<?php 


$password = $_GET["lenght"];
$simboli = [ 
    "minuscole" => "abcdefghijklmnopqrstuvwxyz",
    "maiuscole" => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
    "numeri" => '1234567890',
    "caratteri_speciali" => '!?~@#-_+<>[]{}',
];
$caratteri = $simboli["minuscole"] . $simboli["maiuscole"] . $simboli["numeri"] . $simboli["caratteri_speciali"];
$simboli_lunghezza = strlen($caratteri) - 1; 
$arreyPass= [];

?>