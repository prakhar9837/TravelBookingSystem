<html>
<head>
	<title>Customer Booking</title>
	<link rel="stylesheet" type="text/css" href="s1.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<form action="../booking/insert.php" method="post">
	<div class="booking-from-box">
		<div class="radio-btn">
			<!-- <input type="radio" class="btn" name="check" checked="checked"> -->
			<!-- <span>Round trip</span> -->
			<input type="radio" class="btn" name="check" checked="checked"><span>One way</span>

			<!-- <input type="radio" class="btn" name="check" checked="checked"><span>Multicity</span> -->
		</div>
		<div class="booking-form">
			<label>From:</label>
			<input type="text" class="form-control" placeholder="Enter City name" name="from">
			<label>To:</label>
			<input type="text" class="form-control" placeholder="Enter City name" name="to">
		    <label>UserName:</label>
			<input type="text" class="form-control" placeholder="Enter your username" name="uname">
		<div class="input-grp">	
			<label>Date:</label>
						<input type="date" class="form-control select-date" name="date">
					</div><br><br>

		<div class="input-grp1">
			<input  type="submit" class="btn btn-primary flight" name="done">
		</div>
		<br>
		<!--<div class="input-grp1">
			<a href="MyCMS/test1.php"> <button type="button" class="btn btn-primary flight" formtarget="/MyCMS/test1.php ">Proceed For Payment
				
				</button></a>
		</div><br>-->

		</div>
	</div>
	<button class="btn btn-secondary flight" style="margin-left: 545px; margin-top:10px;">Back</button>
</form>
</body>
</html>