<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/about_us.css">
	<title>About Us</title>
</head>
<body>
<?php
   require 'header.php';
?>
<section class="techquestionpage">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<img src="images/csd.jpg" class="image">
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="techtext noneshow aboutus_para1">
				<h2 class="font-mont">Why blood donation is necessary?</h2>
				<span class="line"></span><br/>
                <p class="font-nunito text-muted">Blood is the most precious gift that anyone can give to another person the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components red cells, platelets and plasma which can be used individually for patients with specific conditions.</p>
				<!-- <button class="button shadow">Connect With Us</button> -->
			</div>
			</div>
		</div>
	</div>
</section>
<section class="techquestionpage">
	<div class="container mb-5">
		<div class="row">
			<div class="col-md-6 col-lg-6 noneshow aboutus_para2">
				<div class="techtext1">
				<h2 class="font-mont">Why blood donation is necessary?</h2>
				<span class="line"></span><br/>
				
				<p class="font-nunito text-muted">Blood is the most precious gift that anyone can give to another person the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components red cells.</p>
				<ul class="techul">
					<li class="font nuntio text-muted">blood is donted by a person.</li>
					<li class="font nuntio text-muted">blood is donted by a person having great day why <br/>so bha jsdgf khD abcd efgh ijkl mnop qrst.</li>
				</ul>
			</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<img src="images/csd.jpg" class="image">
			</div>
		</div>
	</div>
</section>
<?php
  require 'footer.php';
?>
</body>
<script type="text/javascript">
function myWaypoint(cname,aniname,per=100){
    $('.'+cname).waypoint(function(direction){
        $('.'+cname).addClass('animate__animated '+aniname);
    }, {
        offset: per+'%'
    });    
}

myWaypoint('aboutus_para1','animate__fadeInRight slomo-1x',60);
myWaypoint('aboutus_para2','animate__fadeInLeft slomo-1x',60);
</script>
</html>