<?php
// Работа с флагами


// 1.   Дан массив с числами. Проверьте, что в этом массиве есть число 5.
//      Если есть - выведите 'да', а если нет - выведите 'нет'.

//$arr = [1,4,6,8,5,3,2,1];
//
//$flag = false;
//
//foreach ($arr as $item) {
//    if ($item == 5)
//    {
//        echo 'Да';
//        break;
//    }
//
//}

// 2.   Дано число, например 31. Проверьте, что это число не делится ни на одно другое число кроме себя самого и единицы.
//      То есть в нашем случае нужно проверить, что число 31 не делится на все числа от 2 до 30.
//      Если число не делится - выведите 'нет', а если делится - выведите 'да'.


//$item = 31;
//
//for ($i = 1; $i <= 31; $i++)
//{
//    if($item / $i == 1 || $item / $i == 31)
//        echo 'Да'. '<br>';
//    else
//    {
//        echo 'Нет' . '<br>';
//    }
//
//}

// 3.  Дан массив с числами. Проверьте, есть ли в нем два одинаковых числа подряд.
//     Если есть - выведите 'да', а если нет - выведите 'нет'. 


//$arr = [1,2,2,5,5,6,7,8,9,0];
//
//foreach ($arr as $item) {
//    if ($item == $k)
//    {
//        echo 'Есть';
//    }
//
//    $k = $item;
//
//}