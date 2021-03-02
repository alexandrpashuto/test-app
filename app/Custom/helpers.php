<?php
function ArrTest($data)
{
    $arr = $data['arr'];
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $a1
            = array_filter(array_slice($arr, 0, $i), function ($k) use ($data) {
            return $k == $data['mynumber'];
        });
        $a2
            =  array_filter(array_slice($arr, $i),function ($k) use ($data) {
            return $k != $data['mynumber'];
        });
        if((count($a1) === count($a2)) && count($a2) !== 0){
            return $i;
        }
    }
    return -1;
}
