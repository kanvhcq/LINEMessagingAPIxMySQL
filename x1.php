  $servername = "localhost";
  $username = "ppdata_kan";
  $password = "Ptc#02290";
  $dbname = "ppdata_kan";
$conn = new mysqli($servername, $username, $password, $dbname);
  mysqli_set_charset($mysql, "utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
