<?php
require 'dashboard/db.php';
$newsbox=mysqli_query($mysqli,"SELECT * FROM news ORDER BY id DESC");
$newsdate=mysqli_query($mysqli,"SELECT * FROM news ORDER BY id DESC LIMIT 1");
?>















<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

<title>Department of Computer Science | Gauhati University</title>
<!-- ========================= php tag ========================= -->



<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" >
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/logo.png">


<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>


<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css/docs.css" rel="stylesheet" type="text/css"/>
<link href="css/flatly.css" rel="stylesheet" type="text/css"/>
<link href="css/slider.css" rel="stylesheet" type="text/css"/>



</head>
<body>
<!-- ========================= SECTION HEADER ========================= -->
<?php include('modules/navbar.php'); ?>	
<?php include('modules/slider.php'); ?>	
<!-- ========================= SLIDER PART ========================= -->



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- ========================= SECTION 1 ========================= -->

<div class="container">

	<div class="row  justify-content-center">
		<main class="col-sm-6 text-center"> 
			<h3>Department of Computer Science</h3>
			<h4 class="lead b">Gauhati University<br> <small>Jalukbari, Guwahati, Assam. </small></h4>
			<hr>
		</main>

		<div class="row">
			<div class="col-lg-7">
				<main class="text-center" >
					<p style="width:90%; ">
						The department was founded in the year 1985. It started a one-year Post Graduate
						Diploma Course in Computer Science and Applications with thirty seats in 1986 under
						the headship of Prof. Malay Dutta.  At that time there were only a few institutions
						in the entire country offering post graduate courses in Computer Science.
							The objectives of the course were to produce Computer Programmers, Research Scholars,
							Teachers, Instructors, Computer Professionals. The course continued till 2000.
							Ph.D program in the department was also started immediately after its inception.
					</p>
					<p style="width:90%; ">
						In January 2001 the department started a two-year MSc program<br> in Computer Science after obtaining formal approval from UGC <br>replacing the PGDCSA course, with a student intake of 15 per batch.<br> The capacity was later on increased to 30.
					</p>

					<p style="width:90%; ">
						In 2005 the Department started a second M.Sc program - MSc in <br>Information Technology together with the existing MSc programme <br>in Computer Science.

					</p>
				</main>
			</div>

			<div class="col-lg-5">
				<div class="card mb-3">
              		<h3 class="card-header"><i>Words from the HOD</h3><hr>
                	
  					<img src="images/abhijitsir.jpg" hieght="100" width="100">
  					<div class="card-body">
   						 <p class="card-text">    MCA (Dibrugarh) ,PhD (IITG),

                                                                         Computer Networks<br>

                         abhijit@gauhati.ac.in<br>
						 Head of the department (HOD)</p>
  					</div>
  				<ul class="list-group list-group-flush">
					<li class="list-group-item">
	                    ~~computer science has actually changed the world in a very few decades ,<br> 
						we here try to provide education in a very structured way so that students <br>
						from here can solve real life computing problems~~
						   </li>


						   
						  		
				
			</div>












			</div>
		</div>
		<div class="padding-top">
			<a src="mission.php" class="btn btn-lg btn-outline-primary"> Mission & Vision </a>
		</div>
		
	</main>

	
</div>
	<!-- ========================= PHP CODE ========================= -->
	<div class="container col-lg-5 mt-5">
		<div class="alert alert-danger">NEWS & Notifications</div>
			
		<?php

			while($news=mysqli_fetch_array($newsbox))
			{
				echo "<div class=\"alert alert-info \">";
				echo $news['news'];
				echo "</div>";
			}
		?>	
		
	</div>
</div><!-- container //  -->
</section>

<!-- ========================= SECTION 1 END// ========================= -->

<!-- ========================= SECTION FOOTER ========================= -->
<!-- ========================= SECTION FOOTER PHP ========================= -->
<?php include('modules/footer.php'); ?>	
<footer class="doc-section-footer text-center border-top padding-y-sm" id="page_footer">
	<div class="container-fluid"><br>

	<a href="#">...</a>
	</div><!-- container //  -->
</footer>
<!-- ========================= SECTION FOOTER END // ========================= -->


</body>
</html>
