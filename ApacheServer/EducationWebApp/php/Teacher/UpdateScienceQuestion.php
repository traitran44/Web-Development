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


$oldQuestion = $_REQUEST['oldQuestion'];
$question = $_REQUEST['question'];
$answer1 = $_REQUEST['answer1'];
$answer2 = $_REQUEST['answer2'];
$answer3 = $_REQUEST['answer3'];
$answer4 = $_REQUEST['answer4'];
$correct = $_REQUEST['correct'];


//Insert
$sql = "UPDATE ScienceQuestions
    SET Question='$question', Answer1='$answer1', Answer2='$answer2', Answer3='$answer3', Answer4='$answer4', CorrectAnswer='$correct'
    WHERE Question='$oldQuestion'";

//check error
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Succeed";
} else {
    echo "Error";
}
echo $logName;
echo $logPassword;
echo $logEmail;

mysqli_close($conn);
?>