<?php
echo 'Фамилия: ';
$surname = trim(fgets(STDIN));
echo 'Имя: ';
$name = trim(fgets(STDIN));
echo 'Отчество: ';
$patronymic = trim(fgets(STDIN));
echo PHP_EOL;

echo "Полное имя: " . $fullname = mb_ucfirst($surname) . ' ' . mb_ucfirst($name) . ' ' . mb_ucfirst($patronymic). PHP_EOL;
echo  "Аббревиатура: ".$fio = mb_fio($surname) . '.' . mb_fio($name) . '.' . mb_fio($patronymic). '.'. PHP_EOL;
echo  "Фамилия и инициалы: " .$surnameAndInitials = mb_ucfirst($surname). ' ' .mb_fio($name) . '.' . mb_fio($patronymic). '.'. PHP_EOL;

function mb_ucfirst($text) {
    $text = mb_strtolower($text);
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}
function mb_fio($text_2) {
    $text_2 = mb_strtolower($text_2);
    return mb_strtoupper(mb_substr($text_2, 0, 1));
}
exit();