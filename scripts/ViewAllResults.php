<?php

include '../includes/dbconnection.php';

$sql3 = "select subject,ICA01,ICA02,ICA03 from asdata where regno='2013/ICT/18'";
$results = mysqli_query($conn, $sql3);

echo '<div align="center" style="margin-top: 2%;width: 100%"> <h1>View All Results 2016</h1>';
echo '<table ><table border="1">
                <tr>
                    <th align="center">
                        Subject
                    </th>
                    <th align="center">
                        ICA01
                    </th>
                    <th align="center">
                        ICA02
                    </th>
                    <th align="center">
                        ICA03
                    </th>
                </tr>';
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo '<tr><td >' .
        $row['subject'] . '</td><td align="center">' .
        $row['ICA01'] . '</td><td align="center">' .
        $row['ICA02'] . '</td><td align="center">' .
        $row['ICA03'] . '</td></tr align="center">';
    }
} else {
    echo "0 results";
}
echo '</table></div>';



