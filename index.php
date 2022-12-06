
<?php
//1---------
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
/*
посчитать длину массива

!!!!
В php нет понятия как length, Вопрос не корректно поставлен или не полон
    Есть ф-ция    count(Countable|array $value, int $mode = COUNT_NORMAL): int
    Если  mode установлен в COUNT_RECURSIVE (или 1), count() будет рекурсивно подсчитывать количество элементов массива.
    Используется для многомерных массивов
    Можно посчитать кол-во всех значений через  array_count_values(array $array): array

переместить первые 4 элемента массива в конец массива*/
$arr2 = []; // временный массив
$j=0;       // доп индекс
$arr2 = $arr;
for ($i=4; $i <= count($arr)-1; $i++)     //цикл с 5го до последнего эл-та исходного массива и переброс во временный
    {
        $arr2[$i-4] = $arr [$i];
    };
for ($i=count($arr2)-4; $i < count($arr2) ; $i++)   //цикл от 4го с конца эл-та arr2 до последнего эл-та и переброс первых 4х эл-тов
    {
    $arr2[$i] = $arr[$j];     $j++;
    };
//Var_dump ($arr); Echo "<br> ----------------- ";Var_dump ($arr2);


//получить сумму 4,5,6 элемента
$tmpsumm = 0;
for ($i=3; $i <= 5; $i++)     //цикл с 4го по 6й эл-т
{
    $tmpsumm = $tmpsumm + $arr [$i];
};
var_dump($tmpsumm);



//2---------
$firstArr = [
'one' => 1,
'two' => 2,
'three' => 3,
'foure' => 5,
'five' => 12,
];

$secondArr = [
'one' => 1,
'seven' => 22,
'three' => 32,
'foure' => 5,
'five' => 13,
'six' => 37,
];

//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
print_r( array_diff($secondArr , $firstArr));

//найти все элементы которые присутствую в первом и отсутствуют во втором
print_r( array_diff( $firstArr , $secondArr ));

//найти все элементы значения которых совпадают
print_r( array_intersect($firstArr , $secondArr));

//найти все элементы значения которых отличается
print_r( array_diff($firstArr , $secondArr));



//3---------
$firstArr = [
'one' => 1,
'two' => [
    'one'   => 1,
    'seven' => 22,
    'three' => 32,
        ],
'three'     => [
    'one'   => 1,
    'two'   => 2,
                ],

'foure' => 5,
'five' => [
            'three' => 32,
            'foure' => 5,
            'five'  => 12,
            ],
];

//получить все вторые элементы вложенных массивов


//получить общее количество элементов в массиве
print_r( count($firstArr, COUNT_RECURSIVE));

//получить сумму всех значений в массиве
print_r(array_sum($firstArr));

?>
