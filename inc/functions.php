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

// Fit and Inch conversion

function temperatureConverter($inputData, $selectbox1, $selectbox2) {
    $result = '';
    if($selectbox1 == 1 && $selectbox2 == 2) {
        $result = ($inputData * 9/5) + 32;  // celsius to fahrenheit
        return $result;
    }elseif($selectbox1 == 1 && $selectbox2 == 3) {
        $result = $inputData + 273.15; // celsius to kelvin
        return $result;
    }elseif($selectbox1 == 2 && $selectbox2 == 1) {
        $result = ($inputData - 32) * 5/9; // fahrenheit to celsius
        return $result;
    }elseif($selectbox1 == 2 && $selectbox2 == 3) {
        $result = ($inputData - 32) * 5/9 + 273.15; // fahrenheit to kelvin
        return $result;
    }elseif($selectbox1 == 3 && $selectbox2 == 1) {
        $result = $inputData - 273.15; // kelvin to celsius
        return $result;
    }elseif($selectbox1 == 3 && $selectbox2 == 2) {
        $result = ($inputData - 273.15) * 9/5 + 32; // kelvin to fahrenheit
        return $result;
    }else {
        return $inputData;
    }
}