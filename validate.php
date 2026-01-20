<html>
    <head>
        <title>Validation Result</title>
    </head>
    <body>
        <h1>Validation Result</h1>
        <?php
        $name = $email = "";
        $nameErr = $emailErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = htmlspecialchars($_POST["name"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = htmlspecialchars($_POST["email"]);
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
        ?>
    </body>
</html>