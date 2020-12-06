<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>LAB8</title>
    </head>
    <body>

   SUP!
<?php
    $serverName = "mysql";
    $userName = "root";
    $password = "root";
    $conn = new mysqli($serverName, $userName, $password);
    if ($conn->connect_errno)
        printf($conn->connect_error);
    else {
        $results = $conn->query('SHOW databases;');

        while($row = $results->fetch_assoc())
            $databases[] = $row['Database'];
?>
        <table>
            <tr>
                <th>Databases</th>
            </tr>
            <?php foreach($databases as $val)
                echo '<tr><td>'.$val.'</td></tr>';
    }
            ?>
        </table>
</div>
    </body>
</html>
