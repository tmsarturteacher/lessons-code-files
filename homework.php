<?php

$arr = [1, 2, 3, 4, 5];

echo func($arr, 4); // 5
echo func($arr, 5); // 5


//function func2(array $arr, int $number): int {
//    foreach ($arr as $key => $value) {
//        if ($value === $number && count($arr) > ($key + 1)) {
//            return $arr[$key + 1];
//        }
//    }
//
//    return $arr[0];
//}

function func(array $arr, int|string $value): int|string
{
    for ($i = 0; $i < count($arr); $i++) {
        $current = $arr[$i];
        if ($current == $value) {
            if ($i == (count($arr) - 1)) {
                return $arr[0];
            }
            return $arr[$i + 1];
        }
    }

    return 0;
}