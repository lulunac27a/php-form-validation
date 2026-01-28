<!DOCTYPE html>
<html lang="en">

<head>
    <title>Validation Result</title>
</head>

<body>
    <h1>Validation Result</h1>
    <?php
    $name = $email = $date = $dateInput = "";
    $nameErr = $emailErr = $dateErr = $dateInputErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

        if (empty($_POST["date"])) {
            $dateErr = "Date is required";
        } else {
            $date = htmlspecialchars($_POST["date"]);
            $dateTimestamp = strtotime($dateInput);
            if ($dateTimestamp === false) {
                $dateInputErr = "Invalid date format";
            }
        }

        if (empty($_POST["time"])) {
            $timeErr = "Time is required";
        } else {
            $time = htmlspecialchars($_POST["time"]);
            $timeTimestamp = strtotime($timeInput);
            if ($timeTimestamp === false) {
                $timeInputErr = "Invalid time format";
            }
        }
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

    ?>
</body>

</html>