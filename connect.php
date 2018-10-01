<? php
$db="person";
$server="localhost";
$usename="root";
$pwd="";
$conn=mysqli_connect($server,$usename,$pwd,$db);
echo 'hi';
if($conn)
echo 'SUCCESS';
else
echo 'ERROR';
echo 'hi';

?>