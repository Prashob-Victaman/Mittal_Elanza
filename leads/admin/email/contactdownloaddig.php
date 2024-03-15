<?php

$servername = "localhost";
$username = "budindia_enquiry";
$password = "BUD#Enq123";
$dbname = "budindia_enq";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from email_details where status='2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    $list = array();
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["name"];
        $email = $row["email"];
        $tele = $row["tele"];
        $message = $row["message"];
        $date = $row["date"];

        array_push($list, array(
            "Id" => $id,
            "Name" => $name,
            "Email" => $email,
            "Phone" => $tele,
            "Massage" => $message,
            "Date" => $date,
        ));
    }

    function cleanData(&$str) {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if (strstr($str, '"'))
            $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // file name for download
    $filename = "Contact Enquiry" . date('Ymd') . ".xls";

    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");

    $flag = false;
    foreach ($list as $row) {
        if (!$flag) {
            // display field/column names as first row
            echo implode("\t", array_keys($row)) . "\n";
            $flag = true;
        }
        array_walk($row, 'cleanData');
        echo implode("\t", array_values($row)) . "\n";
    }

    exit;
} else {
    echo "0 results";
}
$conn->close();
?>