<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="utility/style.css">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">

<title>Croc Shoe Form</title>
 </head>


<!--Forms-->

<body>

			<section class="container">
			<div class="row col-md-12">
		<div class="col-md-8 offset-md-4 my-9 mr-4" style="margin-top: 90px;">
			<div class="row">
			<div class="d-flex align-items-center flex-column">
				<div style="margin-right:auto;">

			<label style="font-size: 35px; font-family:sans-serif; color: #FFFFFF;">DUFIL PRIMA FOODS PLC, OTA</label> 
			<h6 style="margin-right: 25px;">APPROVAL TO USE CROC SHOES ON THE SHOPFLOOR</h6>
				
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<!--Form design-->
<section class="container-fluid">
	<form class="row col-sm-12" action="server" method="POST">
		<div class="containerbutton col-md-5 offset-md-4 card-header" style="background-color: #b388ab; border-radius:5px 5px 5px 5px ;">
			<div class="form-group">
			<label style="font-weight: bold; padding-top: 5px; font-family: sans-serif;">NAME</label>
			<input type="text" name="" value="Babatunde Afolabi" class="form-control" placeholder="Enter fullname" style="font-size: 20px; margin-top:2px;" readonly>			
			</div>
			
			<div class="form-group">
			<label style="font-weight: bold; padding-top: 5px; font-family: sans-serif;">DEPT</label>
			<input type="text" name="" value="MIS" class="form-control" placeholder="Enter Department" style="font-size: 20px; margin-top:2px;" readonly>			
			
			<div class="form-group">
			<label style="font-weight: bold; padding-top: 5px; font-family: Helvetica;">SEVERITY</label>
			<input type="text" name="" class="form-control" placeholder="Provide reasons" style="font-size: 20px; margin-top:2px;" required>			
			</div>
			
			<div class="form-group">
			<label style="font-weight: bold; padding-top: 5px; font-family: Helvetica;">PERIOD</label>
			<input type="text" name="" class="form-control" placeholder="Duration" style="font-size: 20px; margin-top:2px;">			
			</div>

			<div class="form-group">
			<label style="font-weight: bold; padding-top: 5px; font-family: Helvetica;">HR SUPERVISOR SIGN</label>
			<input type="" name="" class="form-control" placeholder="" style="font-size: 20px; margin-top:2px;"readonly>			
			</div>
			
			<div class="form-group">
			<label style="font-weight: bold; padding-top: 5px; font-family: sans-serif;">Q.A SUPERVISOR SIGN</label>
			<input type="signature" name="" class="form-control" placeholder="" style="font-size: 20px; margin-top:2px;"readonly>			
			</div>
			
		</div>

		<div style="margin-top:10px;">
			
			<button class="btn btn-outline-danger" value="Submit" name=""; >PROCEED</button>
		</div>
		
	
	</form>

</section>
  	 	



</body>
</html>