<?php
include "dbconnect.php";
include "header.php";

$id =abs((int)$_GET['id']);
$result = $conn->query("SELECT * FROM barang where id = $id");
$row = $result->fetch(PDO::FETCH_ASSOC)


?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
<body >
	<img class="img-responsive text-center center-block w3-animate-right" alt="Chania" src="./img/<?php echo $row['gambar1'];?>"></img>
	<h1 class="text-center w3-animate-left"><?php echo $row['nama'];?></h1>
	<h2 class="text-center w3-animate-opacity"> Rp <?php echo number_format($row['harga'],2,',','.');?></h2>
</body>