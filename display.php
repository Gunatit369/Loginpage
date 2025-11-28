<?php
$conn = mysqli_connect("localhost", "root", "","login");
$sql = "SELECT * FROM mydata";
$result = mysqli_query($conn, $sql);

?>
<html>
    <head>
        <title>Display Data</title>
    </head>
    <body>
        <h1>Display Data from Database</h1>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
              

            </tr>
            <?php
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
             
                echo "</tr>";
            }
            ?>
            
        </table>
    </body>
</html>
