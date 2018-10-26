



<html>
    <body>
	<h1>Post a message!</h1>
        <form action="foruminsert.php" method="POST">
            Username: <input type="text" name="username"><br>
            Message: <input type="text" name="message"><br>
        <input type="submit" value="Submit">
        </form>


    <h1>Messages</h1>
    </body>
</html>



<?php

    $conn = mysqli_connect('student.cs.appstate.edu', "steinem", "900581306", "5450net");
    if(mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_error();
    }

    $result = mysqli_query($conn, "SELECT username, message FROM forum");

echo "<table border = '1'>
<tr>
    <th>Username</th>
    <th>Message</th>
<tr>"; 


while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
        echo "<td>". $row['username'] . "</td>";
        echo "<td>". $row['message'] . "</td>";
    echo "<tr>";
}
echo "</table>";
mysqli_close($conn);
?>




