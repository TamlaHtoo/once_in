<?php
include 'config/database.php';

$sql = 'SELECT * FROM posts order by id desc';

$result = mysqli_query($link, $sql);

$standards = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach ($standards as $item) {
	$created = date_parse($item['created_at']);
	$year =($created['year']);
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Events Venue Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><?php
include 'config/database.php';

$sql = 'SELECT * FROM posts order by id desc';

$result = mysqli_query($link, $sql);

$standards = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach ($standards as $item) {
	$created = date_parse($item['created_at']);
	$year =($created['year']);
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Events Venue Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--// css -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!-- font -->
	<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<!-- //font -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
</head>
<body>
	<div class="banner">
		<?php include 'adminheader.php'?>	
	</div>

	<div style="padding-top: 50px" class="container">
		
		<div  style="margin-left: 100px;width: 400px" class="col-md-6 contact-form-right">
			<div class="contact-form-top">
				<h3>Add a Suit</h3>
			</div>
			<div class="agileinfo-contact-form-grid">
				<form action="config/admin_suit.php" method="POST">
					
					<input type="text" name="image_link" placeholder="Image Link">
					

					
					<input type="text" name="text" placeholder="Description">
					<h4>Package</h4>

					<select ="hi"  name="package" style="height: 40px;width: 200px;color: gray">
						<option value="standard">standard</option>
						<option value="premium">premium</option>
					</select>
					<br><br>
					<button class="btn1" >Create</button>
				</form>
			</div>
		</div>

	</div>
	

</body>
