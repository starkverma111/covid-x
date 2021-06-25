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
	h6{display:none;
	
	background-color: aquamarine;
    color: black;
    border-radius: 40px;
	}
	#lod{display:none;}
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
  


	
<div class="cont">	
	
	<form method="POST" onclick="return false" id="myform">
		<div class="row" id="rowd">
			<div class="col-md-6">
					<div class="d-none d-md-block">
					<img src="https://cdn.pixabay.com/photo/2020/04/09/19/19/cartoon-doctor-5022797_960_720.jpg" class="ig"/>
					</div>
				</div>
						
		<div class="col-md-6 col-lg-6">
		<h2>Report Death</h2>
				<hr/>
  
			 
				<div class="form-group">
				  <label for="text">Name:</label>
					<input type="text" class="form-control" id="name" placeholder="full name" name="name" >
				</div>
				<br/>
				 <div class="form-group">
				  <label for="text">Aadhar Number</label>
					
					<input type="text" class="form-control" 
					id="aadhar" placeholder="aadhar number" name="aadhar" maxlength="12"
					onkeypress="return validateNumber(event)"/>
				</div>
	<script>
    // WRITE THE VALIDATION SCRIPT.
    function validateNumber(e) {
            const pattern = /^[0-9]$/;
            return pattern.test(e.key )
        }
</script>
				
				
				<br/>
				 <div class="form-group">
				  <label for="text">Profession</label>
					<select class="form-select" aria-label="Default select example" name="profession" id="profession" placeholder="profession">
						  <option value="" disabled selected>Select Profession</option>
						  <option value="Farmer">Farmer</option>
						  <option value="Engineer">Engineer</option>
						  <option value="Doctor">Doctor</option>
						  <option value="businessman">businessman</option>
						  <option value="other">other</option>
						</select>
				</div>
				<br/>
				
		 <div class="form-group">
				  <label for="text">Employ Status</label>
					<select class="form-select" aria-label="Default select example" name="estatus" id="estatus">
						  <option value="" disabled selected>Employ Status</option>
						  <option value="Private">Private</option>
						  <option value="Goverment">Goverment</option>	  
						</select>
				</div>
				<br/>
				  
				  
					<div class="row ">
					<label for="text">Date of death</label>
					<div class="col-md-4 mb-2" id="smalls">
					
					<select class="form-select" aria-label="Default select example" id="dod1">
							
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							  <option value="7">7</option>
							  <option value="8">8</option>
							  <option value="9">9</option>
							  <option value="10">10</option>
							  <option value="11">11</option>
							  <option value="12">12</option>
							  <option value="13">13</option>
							  <option value="14">14</option>
							  <option value="15">15</option>
							  <option value="16">16</option>
							  <option value="17">17</option>
							  <option value="18">18</option>
							  <option value="19">19</option>
							  <option value="20">20</option>
							  <option value="21">21</option>
							  <option value="22">22</option>
							  <option value="23">23</option>
							  <option value="24">24</option>
							  <option value="25">25</option>
							  <option value="26">26</option>
							  <option value="27">27</option>
							  <option value="28">28</option>
							  <option value="29">29</option>
							  <option value="30">30</option>
							  <option value="31">31</option>
							</select>
					</div>
					
					
					<div class="col-md-4 mb-2" id="smalls">
					<select class="form-select" aria-label="Default select example" id="dod2">
					 
					  <option value="1">January</option>
					  <option value="2">February</option>
					  <option value="3">March</option>
					  <option value="4">April</option>
					  <option value="5">May</option>
					  <option value="6">June</option>
					  <option value="7">July</option>
					  <option value="8">August</option>
					  <option value="9">September</option>
					  <option value="10">October</option>
					  <option value="11">November</option>
					  <option value="12">December</option>
					</select>
					</div>
					
					<div class="col-md-4 mb-2" id="smalls">
					<select class="form-select" aria-label="Default select example" id="dod3">
						
						  <option value="2019">2019</option>
						  <option value="2020">2020</option>
						  <option value="2021">2021</option>
						  <option value="2022">2022</option>
						  <option value="2023">2023</option>
						  <option value="2024">2024</option>
						  <option value="2025">2025</option>
						</select>
					</div>
					
				
					
					
					
					
				</div>
				<br/>
				 <div class="form-group">
				  <label for="text">Cause of death</label>
					<select class="form-select text-center" aria-label="Default select example" name="sreasion" id="sreasion">
						 
						  <option value="Oxygen">Oxygen</option>
						  <option value="Hospital bed">Hospital bed</option>
						  <option value="Remdesivir injection">Remdesivir injection</option>
						  <option value="Staff irregularity">Staff irregularity</option>
						</select>
				</div>
				<br/>
		<div class="form-group">
				<div class="mb-3">
				  <label for="text">Explain Cause of death</label>
				  <textarea class="form-control" name="ereasion"id="ereasion" rows="3"></textarea>
				</div>
				</div>
				<button type="submit" class="btn btn btl" name="butsave" id="butsave">Submit</button>
<div id="lod">							
							<div class="spinner-grow text-primary" role="status">
					  <span class="sr-only">Loading...</span>
					</div>
					<div class="spinner-grow text-secondary" role="status">
					  <span class="sr-only">Loading...</span>
					</div>
					<div class="spinner-grow text-success" role="status">
					  <span class="sr-only">Loading...</span>
					</div>
					<div class="spinner-grow text-danger" role="status">
					  <span class="sr-only">Loading...</span>
					</div>
					<div class="spinner-grow text-warning" role="status">
					  <span class="sr-only">Loading...</span>
					</div>
					<div class="spinner-grow text-info" role="status">
					  <span class="sr-only">Loading...</span>
					</div></div>

				<br/><br/>
				
				<div class="form-group">
				 
				   <h6 class=" text-center p-2 " id="success"></h6>
				   
				</div>
				<br/>
				
			  
		   </div>
	</div>

</form>	
</div>
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


  
  
  
<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		
		
		var name = $.trim($('#name').val());
		var aadhar = $.trim($('#aadhar').val());
		var profession = $.trim($('#profession').val());
		var estatus = $.trim($('#estatus').val());
		
		var dob1 = $('#dod1').val();
		var dob2 = $('#dod2').val();
		var dob3 = $('#dod3').val();
		var  sl="/";
		
		var date = dob1+sl+dob2+sl+dob3;
		
		var sreasion =  $.trim($('#sreasion').val());
		var ereasion =  $.trim($('#ereasion').val());
		
	if(name!="" && aadhar!="" && profession!="" && estatus!="" && date!="" && sreasion!="" && ereasion!=""){
	$("#butsave").hide();
	$("#lod").show();
	
	$.ajax({
				url: "insert.php",
				type: "POST",
				data: {
					name: name,
					aadhar: aadhar,
					profession: profession,
					estatus: estatus,
					date: date,
					sreasion: sreasion,
					ereasion: ereasion
					
					
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#lod").show();
						$("#lod").delay(1000).fadeIn(500);
						myFunction();
           
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
			
	}
			
			else{
			alert('Please fill all the field !');
			$("#butsave").show();
		}
			
	});
	
	
	function myFunction() {
  setTimeout(function(){ 
						$("#lod").hide();
  						$("#butsave").show();
						$("#success").show();
						$("#success").delay(1000).fadeIn(500);
						$('#success').html('Data Added Successfully !');
						$("#success").delay(1000).fadeOut(5800);
						$('#myform').trigger("reset");
  
  
  }, 3000);
}
});



</script>
  

  
  
  
  
  
  </body>
</html>