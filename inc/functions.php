<?php

// kg and pound conversion

function kgPoundConverter($inputData, $selectbox1, $selectbox2) {
    $result = '';
    if($selectbox1 == 1 && $selectbox2 == 2) {
        $result = $inputData * 2.205;
        return $result;
    }elseif($selectbox1 == 2 && $selectbox2 == 1) {
        $result = $inputData / 2.205;
        return $result;
    }else {
        return $inputData;
    }
}

// Fit and Inch conversion

function fitInchConverter($inputData, $selectbox1, $selectbox2) {
    $result = '';
    if($selectbox1 == 1 && $selectbox2 == 2) {
        $result = $inputData * 12;
        return $result;
    }elseif($selectbox1 == 2 && $selectbox2 == 1) {
        $result = $inputData / 12;
        return $result;
    }else {
        return $inputData;
    }
}