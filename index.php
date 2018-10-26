<?php
    $db = mysqli_connect('student.cs.appstate.edu', 'fenwickgg', '900556709', '5450net') or die("Error connecting to MySQL server.");
    ?>

<html>
    <body>
        <h3>Welcome!</h3>
        <p>Our database info is: TBD</p>
        <form action="login.html">
            <input type="submit" value="Login" >
        </form>
        <form action="signup.html"><input type="submit" value="Sign up"></form>
        <p>The number of users we have is: <b>
        <?php $query = "SELECT COUNT(*) FROM Users";
            mysqli_query($db, $query) or die('Error querying database.');
            $result = mysqli_query($db, $query);
            $res = mysqli_fetch_row($result);
            $num_rows = $res[0];
            echo "$num_rows people"
        ?> </b></p>
        <?php $query = "SELECT COUNT(*) FROM Users";
            mysqli_query($db, $query) or die('Error querying database.');
            $result = mysqli_query($db, $query);
            $res = $mysqli_fetch_row($result);
            echo "$res people"
        ?>             
<script src="scripts/main.js></script>
    </body>
</html>
