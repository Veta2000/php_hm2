<?php

// Створіть функцію, яка обчислює середнє арифметичне значення з масиву чисел.
function average($arr) {
    return array_sum($arr) / count ($arr);
}
echo average([1, 2, 8, 67, 45]) . "<br>";

// Напишіть функцію для перевертання рядка.
function toString($arr) {
    return strrev($arr);
}
echo toString('slovo'). "<br>";

// Створіть функцію, яка приймає масив чисел і повертає новий масив, в якому всі елементи збільшені на 10.
function add10($arr){
    return array_map(function($num) {
        return $num + 10;
    }, $arr);
}
print_r(add10([1, 2, 3]));
echo "<br>";
// Напишіть функцію для визначення кількості голосних літер у рядку.
function vowels($str) {
    return preg_match_all('/[aeiouAEIOU]/', $str);
}
echo vowels('palmo');
echo "<br>";

// Створіть функцію для видалення дублікатів з масиву.
function remDuplicates($arr) {
    return array_unique($arr);
}
print_r(remDuplicates([16, 42, 42, 3, 3, 5]));
echo "<br>";

// Напишіть функцію для перевірки того, чи є слово паліндромом.
function isPalindrome($str) {
    return $str === strrev($str);
}
echo isPalindrome('sagas'); 
echo "<br>";

// Створіть функцію, яка повертає масив, який складається з парних чисел від 1 до 50.
function evenNumber(){
        return range(2, 50, 2);
}
print_r(evenNumber());
echo "<br>";

// Напишіть функцію для знаходження найменшого та найбільшого значення в масиві чисел.
function minMax($arr) {
    return['min' => min($arr), 'max' => max($arr)];
}
print_r(minMax([20, 4, 2000, 888, 2]));
echo "<br>";

// Створіть функцію, яка приймає асоціативний масив і повертає новий масив зі значеннями, відсортованими за алфавітом за ключами.
function sortArray($arr) {
    ksort($arr);
    return $arr;
}
$arr = ['c' => 3, 'a' => 1, 'b' => 2];
print_r(sortArray($arr));
echo "<br>";

// Напишіть функцію для обчислення факторіалу числа.
function fact($n) {
    if ($n <= 0) return 1;
    return $n * fact ($n-1);
}
echo fact(4);
echo "<br>";

// Створіть функцію, яка знаходить всі прості числа в заданому діапазоні.
function findPrimes($start, $end) {
    $primes = [];
    for ($i = $start; $i <= $end; $i++) {
        $gmpNum = gmp_init($i);
        if (gmp_prob_prime($gmpNum) > 0) {
            $primes[] = $i;
        }
    }
    return $primes;
}

$primes = findPrimes(1, 10000);
print_r($primes);
echo "<br>";

// Напишіть функцію для об'єднання двох масивів без повторень.
function margeArrays($arr1, $arr2) {
    return array_unique(array_merge($arr1, $arr2));
}
print_r(mergeArrays([1, 2, 3], [2, 3, 4]));
echo "<br>";

// Створіть функцію, яка приймає рядок та повертає новий рядок, в якому кожне слово починається з великої літери.

// Напишіть функцію для генерації випадкового пароля заданої довжини.

// Створіть функцію для знаходження суми елементів на головній діагоналі квадратної матриці.

// Напишіть функцію для видалення всіх HTML-тегів з рядка.

// Створіть функцію для реверсу асоціативного масиву (замініть ключі на значення і навпаки).

// Напишіть функцію для перетворення рядка у крапковану нотацію (camelCase).

// Створіть функцію, яка перевіряє, чи є число ступенем двійки.

// Напишіть функцію для сортування масиву об'єктів за значенням конкретного ключа

?>
