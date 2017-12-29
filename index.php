<?php
session_start();
include "dbconnect.php";
include "header.php";



$result = $conn->query("SELECT * FROM barang");
$count = $result->rowCount();

$totalhalaman = ceil($count/$perhalaman);
?>


<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.mySlides {display:none;}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
</head>
	<body>
		<div class="w3-content w3-section center-block" style="max-width:500px; max-height: 500px;">
			<img class="mySlides w3-animate-left" src="1.jpg" style="width:100%">
			<img class="mySlides w3-animate-left" src="2.jpg" style="width:100%">
			<img class="mySlides w3-animate-left" src="4.jpg" style="width:100%">
			
		</div>
		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			  x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 2500);    
		}
		</script>
		
		<script type="text/javascript">
$(document).ready(function() {

	var track_click = 0; 
	
	var total_halaman = <?php echo $totalhalaman; ?>;
	$('#hasil').load("ambil_data.php", {'page':track_click}, function() {track_click++;}); //data awal

	$(".load_more").click(function (e) { 
	
		$(this).hide(); 
		$('.animation_image').show(); 

		if(track_click <= total_halaman) 
		{

			$.post('ambil_data.php',{'page': track_click}, function(data) {
			
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
			<h1 class="text-center" style=" font-family:'Comfortaa', cursive;" >Our Products</h1>
			<hr style="border: 4px solid black;
    -ms-transform: skew(20deg); 
    -webkit-transform: skew(20deg); 
    transform: skew(20deg);
" class="container center-block">
		<div class="container">
			<div id="hasil">
			
			</div>
			<button class="center-block w3-section btn btn-danger    load_more " id="load_more_button"><i class="material-icons">add</i> More</button>
		</div>
	</body>
	
</html>