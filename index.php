<?php

    echo 'Фамилия: ';
$surname = trim(fgets(STDIN));
    echo 'Имя: ';
$name = trim(fgets(STDIN));
    echo 'Отчество: ';
$patronymic = trim(fgets(STDIN));
    echo PHP_EOL;

$nameArray = array(
    "surname" => mb_convert_case($surname, MB_CASE_TITLE, "UTF-8"),
    "name" => mb_convert_case($name, MB_CASE_TITLE, "UTF-8"),
    "patronymic" => mb_convert_case($patronymic, MB_CASE_TITLE, "UTF-8"),
);

$fullName = $nameArray["surname"] . ' ' . $nameArray["name"] . ' ' . $nameArray["patronymic"];
$surnameAndInitials = $nameArray["surname"] . ' ' . $nameArray["name"][0]  . '.' . $nameArray["patronymic"][0] . '.';
$fio = $nameArray["surname"][0] . $nameArray["name"][0]  . $nameArray["patronymic"][0];
    echo "Полное имя: " . $fullName . PHP_EOL;
    echo "Фамилия и инициалы: " . $surnameAndInitials . PHP_EOL;
    echo "Аббревиатура: " . $fio . PHP_EOL;