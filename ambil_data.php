<link rel="stylesheet" href="bootstrap.min.css">
<div class="container">
  <script>
    AOS.init();
  </script>
  <div class="row">
<?php

include_once "dbconnect.php";

$posisi = $_POST["page"]*$perhalaman;


$qr = "SELECT * FROM barang ORDER BY id DESC LIMIT $posisi, $perhalaman";
$result = $conn->query($qr);
 while($row = $result->fetch(PDO::FETCH_ASSOC)) {
  
    
   
   
?>

    <div class="col-md-4" data-aos="fade-right" >
      <div class="thumbnail" style = "" >
      
        <a href="barang.php?id=<?php echo $row['id'];?>" target="_blank">
          <img src="./img/<?php echo $row['gambar1'];?>" alt="Lights" style="width:100%; " height="42"  >
          <div class="caption text-center"><?php echo $row['nama'];?></div>
		  <div class="caption text-center ">
            Rp <?php echo number_format($row['harga'],2,',','.');?>
          </div>
        </a>
      </div>
    </div>
    
    


<?php 
} 
?>

  </div>
</div>