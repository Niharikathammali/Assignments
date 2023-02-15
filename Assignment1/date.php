<?php

echo "Enter a date in the format YYYY-MM-DD: ";
$date = trim(fgets(STDIN));

$dateParts = explode("-", $date);
$year = $dateParts[0];
$month = $dateParts[1];
$day = $dateParts[2];

$valid = true;

// Validate the year
if (strlen($year) != 4 || !is_numeric($year)) {
    echo "Invalid year\n";
    $valid = false;
}

// Validate the month
if ($month < 1 || $month > 12 || !is_numeric($month)) {
    echo "Invalid month\n";
    $valid = false;
}

// Validate the day
if ($day < 1 || $day > 31 || !is_numeric($day)) {
    echo "Invalid day\n";
    $valid = false;
} else {
    // Check if the day is valid for the given month
    if (($month == 4 || $month == 6 || $month == 9 || $month == 11) && $day > 30) {
        echo "Invalid day for the given month\n";
        $valid = false;
    } elseif ($month == 2) {
        // Check if the year is a leap year
        $leap = false;
        if ($year % 4 == 0) {
            if ($year % 100 == 0) {
                if ($year % 400 == 0) {
                    $leap = true;
                }
            } else {
                $leap = true;
            }
        }

        if ($leap && $day > 29) {
            echo "Invalid day for the given year and month\n";
            $valid = false;
        } elseif (!$leap && $day > 28) {
            echo "Invalid day for the given year and month\n";
            $valid = false;
        }
    }
}

if ($valid) {
    $newDate = date("Y-m-d", strtotime("$date + 10 days"));
    echo "The date after 10 days is: $newDate\n";

    $lastYear = date("Y-m-d", strtotime("$date - 1 year"));
    echo "The date last year was: $lastYear\n";
}

?>
