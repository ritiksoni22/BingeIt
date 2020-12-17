<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<?php
include "connect.php";
 
// Attempt select query execution
$sql = "SELECT * FROM sign_in";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table id='sign_in'>";
            echo "<tr>";
            echo "<th>First name</th>";
            echo "<th>Fast name</th>";
            echo "<th>Email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            $hashedPassCheck = password_verify($row['pass'], $row['pass']);
            echo "<tr>";
            echo "<td>" . $row['fname'] . "</td>";
            echo "<td>" . $row['lname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
}

?>