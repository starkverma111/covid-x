<?php
// Turn off error reporting
error_reporting(0);


if(isset($_POST["submit"])){
	
	

	$to = "starkverma111@gmail.com";
	$from = $_POST['wemail'];
	$subject = $_POST['wsubject'];
	$bb = $_POST['wmessage'];
	$body = "From: ".$from."<br/>".$bb;
	$headers = "From: sender\'s ruhi210singh@gmail.com";
 
if($from!="" && $subject!="" && $bb!=""){
		mail($to, $subject, $body, $headers);
		$msg = "<span style='background-color:#8bc34a9e; padding:6px;'>Email successfully sent</span>";
	} 
	else {
		$msg = "<span style='background-color:red; padding:6px;'>Email sending failed...</span>";
	}
} 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
	
	<!-- link icons  -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- link CSS -->
	<link rel="stylesheet" href="css/istyle.css">

    <title>Covid-x</title>
	<style>

	.conta{width:40%; margin:auto;}
	.row{background-color:#fff; padding:5%; border-radius:5px;
	 margin:auto;}
	hr{width:90%;}
	
	@media only screen and (max-width: 600px) {
   body {
      margin: 0;
      padding: 0;
   }
   .conta {
      width: 90%;
   }
   
 
   
}
#inpu{border: 2px solid #57e7b6;
	   border-radius: 25px;
	   border-color:#57e7b6
   }
	
	.btn{background-color:#3bbe96;
	
	width:200px;
	border: 2px solid #3bbe96;
	border-color:#3bbe96;
	
	}
	
	
	</style>
  </head>
  <body>
  <div class="shadow-sm p-1 mb-5 bg-white rounded" >

  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation" id="hid">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php"> <i class="fa fa-heartbeat" style="font-size:20px; color:#59c480;"></i>
	<span style="font-size:24px; color:#59c480;"><b> Covid-x </b></span></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="sf">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item fromCenter" >
          <a class="nav-link" href="show.php">Show Statistics</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
  </div>
  
<div class="conta">
<div class="row justify-content-center">
<div class="col-md-12">
<h1 class="text-center">Contact Us Covid-x</h1>
<br/>
<?php echo $msg;?>
<form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="wsubject" id="inpu">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="wemail" id="inpu">
  </div>
  
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Message</label>
        <textarea class="form-control" rows="6" name="wmessage" id="inpu"></textarea>
</div>
  
  <button type="submit" name="submit" class="btn btn-primary">Send</button>
  
  <br/>
  <br/>
  
</form>



</div>
</div>
</div>


 <br/>
  <br/>
   <br/>
  <br/>
   <br/>
  <br/>
   <br/>
  <br/>
  
  
      <footer class="footer d-flex justify-content-center">
      <div class="fcontainer">
        <span><b>Crafted with <span style="font-size:16px; color:#e91e63;" ><i class="fa fa-heart"></i></span> by Stark Verma</b></span>
      </div>
    </footer>
	
	  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


  
  </body>
</html>