<!DOCTYPE html>
<html lang="en">
<head>
  <title>Batik Cetik</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 5px 20px 5px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    float:right;
}

input[type=text]:focus {
    width: 100%;
}

@media only screen and (max-width: 770px) {
	input[type=text] {
    width: 100%;
}
	
}

</style>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <link href="aos.css" rel="stylesheet">
  <script src="aos.js"></script>
</head>
<body>

<nav class="navbar navbar-default" style = "border-bottom : 4px solid black;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://cethik.ga/">Cethik </a>
    </div>
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="http://cethik.ga/"><a href="">Our Products</a></li>
       
        <li><a href="howtobuy.php">How to Buy?</a></li>
        
		<li>
      </ul>
		<form class="nav navbar-nav navbar-form navbar-right" action="cari.php" >
		<input type="text" name="namabarang" placeholder="Search..">
		</form>
    </div>
	
  </div>
 
</nav>
  


</body>
</html>


