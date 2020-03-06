<?php
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    if (is_numeric($number)) {
        if ($number > 0) {
            if ($number % 3 == 0) {
                if ($number % 5 == 0) {
                    $message = "PE";
                } else {
                    $message = "P";
                }
            } elseif ($number % 5 == 0) {
                $message = "E";
            } else {
                $message = $number;
            }
        } else {
            $message = $number;
        }
    } else {
        $message = "Please enter a number";
    }
} else {
    $message = "Please pass a argument";
}

echo json_encode(array('response' => $message));