<?php 
    $con = mysqli_connect("student.cs.appstate.edu", "fenwickgg", "900556709", "5450net");
    $txtUserId = $_POST['username'];
    echo "hey"
    $query = 'SELECT * FROM Users where username = "' . $txtUserId . '"';
    $result1 = mysqli_query($con, $query);
    //SELECT * FROM Users where username = "" or 1=1 or ""

    //" or 1=1 or "
    //^ This sql injects
    while ($row = $result1->fetch_assoc()) {
        echo $row['username'] . $row['password'] . '<br>';
    }
    ?>
