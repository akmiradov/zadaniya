<?php

function makeid($len)
{
    $result = '';
    while (strlen($result) < $len) {
        $rnd = rand(0, 1);
        if ($rnd == 0) {
            $rnd = rand(0, 9);
            $char = $rnd;
        } else {
            $rnd = rand(0, 25);
            $char = chr(65 + $rnd);
        }
        $result .= $char;
    }
    return $result;
}

function Generate()
{
    $result = makeid(10);
    $json_result = array('id' => $result);
    return json_encode($json_result);
}
