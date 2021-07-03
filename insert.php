<?php
$Name = filter_input(INPUT_POST, 'Name');
$Email = filter_input(INPUT_POST, 'Email');
if (!empty($Name)){
if (!empty($Email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project-main";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO project (Name,Email)
values ('$Name','$Email')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Email should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
?>