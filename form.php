<!DOCTYPE html>
<html>
<head>
	<title>Get ID Card</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style=" width: 99%">
	<div class="row" style="height: 100vh;">
		<div class="col-6" style="
		padding-left: 100px;
		padding-top: 20px;
		background-color: black; color: white;">
			<p style="font-family: Royal King; font-size: 28px;">CSI PCE</p>
			<p style="font-family: Poppins; font-size: 35px;">
				Get Your <b>Volunteer ID</b> by filling<br>
				out the below details
			 </p>
			 <div style="width: 60% ">
	<form action="sendData.php" method="GET">
  <div class="form-group" =>
    <label for="email">Name:</label>
    <input required="" name = "name" style="background-color: white;" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" required="" name="email" style="background-color: white;" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">Branch:</label>
    <input  required="" name="branch" style="background-color: white;" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="pwd">Phone:</label>
    <input type="number" required="" name="phone" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> I agree to <a>terms and conditions</a></label>
  </div>
  <button type="submit" class="btn btn-default bg-light">Generate ID</button>
</form>
<br><br>
*ID card will be mailed to above mentioned email
			 </div>
		</div>
		<div class="col-6" style="background-color: #E6F6F5;">
			<div style="text-align: center;
			padding-top: 70px;

			 ">
				<img src="id.png">
			</div>

		</div>
	</div>
</body>
</html>