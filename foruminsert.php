
<?php

    $conn = mysqli_connect("student.cs.appstate.edu", "steinem", "900581306", "5450net");
    $username = $_POST["username"];
    $message = $_POST['message'];
    $order = "INSERT INTO forum
        (username, message)
        VALUES
        ('".$username."','".$message."');";
    if (mysqli_query($conn, $order)) {
        echo "Message posted!";
    }
    else {
        echo "Error posting message.";
    }
        ?>
