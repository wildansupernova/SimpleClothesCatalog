<?php
session_start();
include "dbconnect.php";
include "header.php";



$result = $conn->PREPARE("SELECT * FROM barang WHERE nama LIKE ? ORDER BY id DESC");

$id = $_GET['namabarang'];
$result ->execute(array("%$id%"));
$count = $result->rowCount();

$totalhalaman = ceil($count/$perhalaman);
?>


		<script type="text/javascript">
$(document).ready(function() {

	var track_click = 0; 
	
	var total_halaman = <?php echo $totalhalaman; ?>;
	$('#hasil').load("search.php", {'page':track_click,'namabarang': <?php echo "'".$_GET['namabarang']."'"; ?>}, function() {track_click++;}); //data awal

	$(".load_more").click(function (e) { 
	
		$(this).hide(); 
		

		if(track_click <= total_halaman) 
		{

			$.post('search.php',{'page':track_click,'namabarang': <?php echo "'".$_GET['namabarang']."'"; ?>}, function(data) {
			
				$(".load_more").show(); 
				
				$("#hasil").append(data); 
				

				
				

			
	
				track_click++;
			
			}).fail(function(xhr, ajaxOptions, thrownError) { 
				alert(thrownError);
				$(".load_more").show();
				
			});
			
			
			if(track_click >= total_halaman-1)
			{
				$(".load_more").attr("disabled", "disabled");
			}
		 }
		  
		});
});
</script>
			<h3 class="text-center" style=" font-family:'Comfortaa', cursive;" >Hasil pencarian</h3>
			<hr style="border: 2px solid black;
    -ms-transform: skew(20deg); 
    -webkit-transform: skew(20deg); 
    transform: skew(20deg);
" class="container center-block">
		<div class="container">
			<div id="hasil">
			
			</div>
			<button class="center-block w3-section btn btn-danger    load_more " id="load_more_button"><i class="material-icons">add</i> More</button>
		</div>