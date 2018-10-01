<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Email: <input type="text" name="email">
  <input type="submit">
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "person";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $email = $_REQUEST['email'];

    if (empty($email)) {
        echo "Name is empty";
    } else {
        echo $email;
    }
}

 
$sql = "DELETE FROM details where email=$email;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 