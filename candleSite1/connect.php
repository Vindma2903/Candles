<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=candlebd", "root", "");
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    echo "<table><tr><th>id</th><th>Name</th><th>phone_number</th><th>email</th><th>password</th><th>repeat_password</th><th>\</th></tr>";
    while($row = $result->fetch()){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["phone_number"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["repeat_password"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}






 ?>
