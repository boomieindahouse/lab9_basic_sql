<?php
require("conDB_64172310345-0.php");

$sql1 = "SHOW columns FROM mypet";
$sql2 = "SELECT * FROM mypet";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th {
        background-color: lightcoral;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
        padding-left: 10px;
        padding-right: 10px;
    }

    td {
        background-color: lightskyblue;
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        padding: 5px;
    }
</style>

<body>
    <table>
        <tr>
            <?php while ($row1 = mysqli_fetch_array($result1)) { ?>
                <th>
                    <?php echo $row1[0] ?>
                </th>
            <?php } ?>
        </tr>

        <?php while ($row2 = mysqli_fetch_array($result2)) { ?>
            <tr>
                <td><?php echo $row2[0] ?>  </td>
                <td><?php echo $row2[1] ?></td>
                <td><?php echo $row2[2] ?></td>
                <td><?php echo $row2[3] ?></td>
                <td><?php echo $row2[4] ?></td>
                <td><?php echo $row2[5] ?></td>

            </tr>
        <?php } ?>
    </table>
    <a href="show&add_table_64172310345-0.php">กลับสู่หน้าหลัก</a>
</body>

</html>