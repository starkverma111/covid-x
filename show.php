<?php

// Turn off error reporting
error_reporting(0);


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
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	
	<!-- link icons  -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- link CSS -->
	<link rel="stylesheet" href="css/sstyle.css">
  	<style>
	
	.conta{width:80%; margin:auto;}
	
	@media only screen and (max-width: 600px) {
   body {
      margin: 0;
      padding: 0;
   }
   .conta {
      width: 90%;
   }
   
 
   
}

	</style>

    <title>Covid-x</title>
	

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
   
	
	
   <div class="conta" > 
	<div class="row d-flex justify-content-between">
   
   
   <?php
    include "config.php";
    
    $query = "SELECT * FROM covid";
	$result = mysqli_query($link, $query);
      
    if ($result)
    {
        // it return number of rows in the table.
        $row = mysqli_num_rows($result);
          
           if ($row)
              {
                 $total =  "Total Case : ".$row;
              }
        else{
			$total = "Waiting";
		}
    }
  
  
  $dt = "SELECT * FROM covid WHERE profession='doctor'";
  $dts = mysqli_query($link, $dt);
      
    if ($dts)
    {
        // it return number of rows in the table.
        $dtrow = mysqli_num_rows($dts);
          
           if ($dtrow)
         {
                 $dttotal =  "Total Doctor death : ".$dtrow;
              }
        else{
			$dttotal = "Waiting";
		}
	}
	
	
	 
  $oxy = "SELECT * FROM covid WHERE sreasion ='Oxygen'";
  $oxxy = mysqli_query($link, $oxy);
      
    if ($oxxy)
    {
        // it return number of rows in the table.
        $dtoxxy = mysqli_num_rows($oxxy);
          
           if ($dtrow)
         {
                 $ox =  "Total Doctor death : ".$dtoxxy;
              }
        else{
			$ox = "Waiting";
		}
	}
	
    
    // Connection close 
    mysqli_close($link);
?>
   
   
	   <div class="col-md-3">
	   <i class="fas fa-hat-wizard " style="font-size:22px;color:#fff; padding:4%;"></i>
	   
	   <span id="pp" style="color:#fff;"><b><?php echo $total;?></b></span>
	   </div>
   
		   <div class="col-md-3">
		   <i class="fas fa-ghost" style="font-size:22px; color:#fff; padding:4%;"></i>
		   
		   	   <span id="pp" style="color:#fff;"><b><?php echo $dttotal;?></b></span>

		   </div>
   
	   <div class="col-md-3" >
	   <i class="fas fa-book-dead" style="font-size:22px;color:#fff; padding:4%;"></i>
	   
	   	   <span id="pp" style="color:#fff;" ><b><?php echo $ox;?></b></span>

	   </div>
   
   </div>
   
   
   
	<div class="row justify-content-center">
		<div class ="col-md-6">
		      <form class="d-flex" id="myFo">
				<input class="form-control me-2" type="search" id="search" placeholder="Search" style="border-radius: 25px; padding-left: 30px; border-color: #2cd2ad;">
				<button type="submit" class="btn btn-default" id="clear" onclick="reloadPage();">
				<i class="fa fa-remove"></i>
				</button>
              </form>
		</div>
    </div>
	</div>
<br/>
  
<div class="conta table-responsive" >
		   <table  class=" table text-center styled-table">
		  <thead>
			<tr>
			  
			  <th scope="col">Name</th>
			  <th scope="col">Aadhar</th>
			  <th scope="col">Profession</th>
			  <th scope="col">Employ Status</th>
			  <th scope="col">Date</th>
			  <th scope="col">Cause of death</th>
			  <th scope="col">Explain Cause of death</th>
			</tr>
		  </thead>
		  <tbody id="table">
		  <tbody id="tabl">
			
		   </tbody>
		  </tbody>
		</table>
  
  </div>
  
       </div>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/>
  
     <footer class="footer d-flex justify-content-center">
      <div class="fcontainer">
        <span><b>Crafted with <span style="font-size:16px; color:#e91e63;" ><i class="fa fa-heart"></i></span> by Stark Verma</b></span>
      </div>
    </footer>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



<script>
$(document).ready(function() {
	$('#clear').hide();
	$('#table').hide();
    $('#table').fadeIn(400);
	load_data();
   
    
function reloadPage(){
        location.reload(true);
		
    }

	  

	function load_data(){
				
				$.ajax({
						url: "View_ajax.php",
						type: "POST",
						cache: false,
						success: function(data){
						$('#table').html(data); 
					}
				});
         
   	}
	
	
     
		   $("#search").on("keyup", function() {
				var search_term = $(this).val();
				
				
				   if(search != '')
					   {
						  
					$.ajax({
								url: "ajax-live-search.php",
								type: "POST",
								data: {search:search_term },
								success: function(data){
									
									$('#table').hide();
									$('#clear').show();
									$('#tabl').html(data);	
									
								}
							});
					   }
					   else{
							//setInterval(function () {
								$('#clear').hide();
									load_data();
									//},1000);
							}
					
				});	

});
	
</script>
  
  
  </body>
</html>