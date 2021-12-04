<?php
include '../Model/dbcusD.php';

if(empty($_GET['Search']) or empty(input_data($_GET["customerid"])))
{
    $users = getAllUsers();
}
else
{
    $users = getUsers(input_data($_GET["customerid"]));
}

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

echo "<table>";
echo "<tr>";
echo "<th>Customer_Id</th>"; 
echo "<th>Fullname</th>"; 
echo "<th>Gender</th>";
echo "<th>Date_Of_Birth</th>"; 
echo "<th>Religion</th>"; 
echo "<th>Present_Address</th>";
echo "<th>Permanent_Address</th>"; 
echo "<th>Phone</th>"; 
echo "<th>Email</th>";
echo "<th>Package_Name</th>"; 
echo "<th>Package_time</th>"; 
echo "<th>Package_Id</th>";
echo "<th>Payment_Method</th>"; 
echo "<th>Payment_Status</th>";
echo "<th>Action</th>";  
echo "</tr>";
for($i = 0; $i < count($users); $i++)
{
    echo "<tr>";
    echo "<td>" . $users[$i]["customerid"] . "</td>";
    echo "<td>" . $users[$i]["fullname"] . "</td>";
    echo "<td>" . $users[$i]["gender"] . "</td>";
    echo "<td>" . $users[$i]["dob"] . "</td>";
    echo "<td>" . $users[$i]["religion"] . "</td>";
    echo "<td>" . $users[$i]["praddress"] . "</td>";
    echo "<td>" . $users[$i]["peaddress"] . "</td>";
    echo "<td>" . $users[$i]["email"] . "</td>";
    echo "<td>" . $users[$i]["phone"] . "</td>";
    echo "<td>" . $users[$i]["package"] . "</td>";
    echo "<td>" . $users[$i]["packageid"] . "</td>";
    echo "<td>" . $users[$i]["packagetime"] . "</td>";
    echo "<td>" . $users[$i]["paymentm"] . "</td>";
    echo "<td>" . $users[$i]["payments"] . "</td>";
    echo "<td><a href='"."customerView.php" . "?listID=".$users[$i]["listID"]."'>  Delete</a></td>";
    echo "<td></td>";
    echo "</tr>";
}
?>