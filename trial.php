<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
       $dbhost = 'localhost';
       $dbuser = 'root';
       $dbpass = '';
       $dbname = 'REQUIREMENTS';
       $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO rquirements_tbl (requirements_firstname, rquirements_surname, date_of_birth)
        VALUES ('Breiana', 'Cirilo', 'October 26, 2001')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
      ?>
</body>
</html>