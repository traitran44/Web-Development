<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$logName = $_REQUEST['username'];
$logPassword = $_REQUEST['password'];
$logEmail = $_REQUEST['email'];

//Insert
$sql = "INSERT INTO Students (Username, Email, Password)
    VALUES ('$logName', '$logEmail', '$logPassword')";

/* MathTotalAnswered int, */
/* ScienceCorrect int, */
/* ScienceTotalAnswered int, */
/* HistoryCorrect int, */
/* HistoryTotalAnswered int, */
/* EnglishCorrect int, */
/* EnglishTotalAnswered int */

//check error
if ( mysqli_query($conn, $sql)) {
    echo "Succeed!";
} else {
    echo "Error!";
}

echo $logName;
echo $logPassword;
echo $logEmail;

/* //get last iserted ID */
/* if (mysqli_query($conn, $sql)) { */
/*     $last_id = mysqli_insert_id($conn); */
/*     echo "New record created successfully. Last inserted ID is: " . $last_id; */
/* } else { */
/*     echo "Error: " . $sql . "<br>" . mysqli_error($conn); */
/* } */
mysqli_close($conn);
?>
