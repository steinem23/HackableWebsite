<?php

    $conn = mysqli_connect("student.cs.appstate.edu", "fenwickgg", "900556709", "5450net");
    $username = $_POST["username"];
    $password = $_POST['password'];
    $order = "INSERT INTO Users
        (username, password)
        VALUES
        ('".$username."','".$password."');";
    if (mysqli_query($conn, $order)) {
        echo "New member created successfully";
    }
    else {
        echo "Error creating member";
    }
        ?>
