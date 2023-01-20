<?php

// kg and pound conversion

function kgPoundConverter($inputData, $selectbox1, $selectbox2) {
    $result = '';
    if($selectbox1 == 1 && $selectbox2 == 2) {
        $result = $inputData * 2.205;
    }
    return $result;
}