<?php
//Set variables
$servername = "localhost";
$username = "cedrictstallwort";
$password = "";
$dbname = "STALLWORTHcedric";

// Create connection
$con=mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }  else {
  	//echo "Successfully Connected to MySQL<br/>" ;
  }

//Set up query
//$sql = "SELECT * FROM questionAnswers";
$sql = "SELECT * FROM questionAnswers WHERE (GRADE = 4 ) AND (SUBJECT = 'social')";
//$sql = "SELECT FirstName FROM artists";
//$sql = "SELECT * FROM questionAnswers WHERE (GRADE == 4) ORDER BY FirstName DESC";


//Run Query
$result = mysqli_query($con, $sql);


//Make output data table
echo ' <table id="dataTable"> ';
echo ' <tr> ';
echo ' <th>QID</th><th>GRADE</th><th>SUBJECT</th><th>QUESTION</th><th>ANSWER</th> ';
echo ' </tr> ';




//Execute and test
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row["QID"] . '</td>';
        echo '<td>' . $row["GRADE"] . '</td>';
        echo '<td>' . $row["SUBJECT"] . '</td>';
        echo '<td>' . $row["QUESTION"] . '</td>';
        echo '<td>'. $row["ANSWER"] . '</td>';
        echo "</tr>";
    }
} else {
    echo "0 results";
}

echo ' </table> ';


//if ($_SERVER["REQUEST_METHOD"] == "POST") {

//Close server connection
mysqli_close($con);
?>
