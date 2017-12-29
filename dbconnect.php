 <?php
$servername = "localhost";
$username = "root";
$password = "";
$perhalaman= 3;
 $conn = new PDO("mysql:host=$servername;dbname=cetik", $username, $password);
try {
    $conn = new PDO("mysql:host=$servername;dbname=cetik", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statuskoneksi =  "Connected successfully";
    }
catch(PDOException $e)
    {
    $statuskoneksi =  "Connection failed: " . $e->getMessage();
    }
?> 