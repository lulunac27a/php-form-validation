<!DOCTYPE html>
<html lang="en">

<head>
    <title>Validation Result</title>
</head>

<body>
    <h1>Validation Result</h1>
    <?php
    $name = $email = $date = $dateInput = $time = $timeInput = $datetimeInput = $datetimeLocalInput = $month = $week = $number = $range = $color = "";
    $invalidInputs = 0;
    $invalidInputFormats = 0;
    $nameErr = $emailErr = $dateErr = $dateInputErr = $timeErr = $timeInputErr = $datetimeInputErr = $datetimeLocalInputErr = $monthErr = $weekErr = $numberErr = $rangeErr = $colorErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
            $invalidInputs++;
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $invalidInputs++;
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $invalidInputFormats;
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

        if (empty($_POST["date"])) {
            $dateErr = "Date is required";
            $invalidInputs++;
        } else {
            $date = htmlspecialchars($_POST["date"]);
            $dateTimestamp = strtotime($dateInput);
            if ($dateTimestamp === false) {
                $dateInputErr = "Invalid date format";
                $invalidInputFormats;
            }
        }

        if (empty($_POST["time"])) {
            $timeErr = "Time is required";
            $invalidInputs++;
        } else {
            $time = htmlspecialchars($_POST["time"]);
            $timeTimestamp = strtotime($timeInput);
            if ($timeTimestamp === false) {
                $timeInputErr = "Invalid time format";
                $invalidInputFormats;
            }
        }

        if (empty($_POST["datetimeInput"])) {
            $datetimeInputErr = "Datetime Input is required";
            $invalidInputs++;
        } else {
            $datetimeInput = htmlspecialchars($_POST["datetimeInput"]);
        }

        if (empty($_POST["datetimeLocalInput"])) {
            $datetimeLocalInputErr = "Datetime Local Input is required";
            $invalidInputs++;
        } else {
            $datetimeLocalInput = htmlspecialchars($_POST["datetimeLocalInput"]);
        }

        if (empty($_POST["month"])) {
            $monthErr = "Month is required";
            $invalidInputs++;
        } else {
            $month = htmlspecialchars($_POST["month"]);
        }

        if (empty($_POST["week"])) {
            $weekErr = "Week is required";
            $invalidInputs++;
        } else {
            $week = htmlspecialchars($_POST["week"]);
        }

        if (empty($_POST["number"])) {
            $numberErr = "Number is required";
            $invalidInputs++;
        } else {
            $number = htmlspecialchars($_POST["number"]);
        }

        if (empty($_POST["range"])) {
            $rangeErr = "Range is required";
            $invalidInputs++;
        } else {
            $range = htmlspecialchars($_POST["range"]);
        }

        if (empty($_POST["color"])) {
            $colorErr = "Color is required";
            $invalidInputs++;
        } else {
            $color = htmlspecialchars($_POST["color"]);
        }
    }
    if ($invalidInputs > 0) {
        echo "<p style='color:red;'>Invalid inputs: $invalidInputs";
    }
    if ($invalidInputFormats > 0) {
        echo "<p style='color:red;'>Invalid input formats: $invalidInputFormats";
    }
    echo "<p>Name: $name</p>";
    if ($nameErr) {
        echo "<p style='color:red;'>$nameErr</p>";
    }
    echo "<p>Email: $email</p>";
    if ($emailErr) {
        echo "<p style='color:red;'>$emailErr</p>";
    }
    echo "<p>Date: $date</p>";
    if ($dateErr) {
        echo "<p style='color:red;'>$dateErr</p>";
    }
    echo "<p>Date Input: $dateInput</p>";
    if ($dateInputErr) {
        echo "<p style='color:red;'>$dateInputErr</p>";
    }
    echo "<p>Time: $time</p>";
    if ($timeErr) {
        echo "<p style='color:red;'>$timeErr</p>";
    }
    echo "<p>Time Input: $timeInput</p>";
    if ($timeInputErr) {
        echo "<p style='color:red;'>$timeInputErr</p>";
    }
    echo "<p>Datetime Input: $datetimeInput</p>";
    if ($datetimeInputErr) {
        echo "<p style='color:red;'>$datetimeInputErr</p>";
    }
    echo "<p>Datetime Local Input: $datetimeLocalInput</p>";
    if ($datetimeLocalInputErr) {
        echo "<p style='color:red;'>$datetimeLocalInputErr</p>";
    }
    echo "<p>Month: $month</p>";
    if ($monthErr) {
        echo "<p style='color:red;'>$monthErr</p>";
    }
    echo "<p>Week: $week</p>";
    if ($weekErr) {
        echo "<p style='color:red;'>$weekErr</p>";
    }
    echo "<p>Number: $number</p>";
    if ($numberErr) {
        echo "<p style='color:red;'>$numberErr</p>";
    }
    echo "<p>Range: $range</p>";
    if ($rangeErr) {
        echo "<p style='color:red;'>$rangeErr</p>";
    }
    echo "<p>Color: $color</p>";
    if ($colorErr) {
        echo "<p style='color:red;'>$colorErr</p>";
    }
    ?>
</body>

</html>