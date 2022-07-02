<?php
include("dbconnect.php");
session_start();
extract($_POST);
$name=$_SESSION['name'];
$class=$_SESSION['class'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Bishop Heber School</title>
	<link
      rel="icon"
      href="images/bhclogo.ico"
    />
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
   <style type="text/css">
<!--
.style1 {color: #000000}
-->
    </style> 
</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
						<a href="mailto:aidhss20440070tpk2@gmail.com" itemprop="email"><i class="fas fa-envelope"></i>aidhss20440070tpk2@gmail.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:0431 2704609" itemprop="telephone"><i class="fas fa-phone"></i>0431 2704609</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
							<ul class="social-list">
								<a href="https://www.facebook.com/pages/category/High-School/Bishop-Heber-Higher-Secondary-schoolTeppakkulamTiruchirapalli-238408146198518/" target="_blank_"
          ><i class="fab fa-facebook-square"></i
        ></a>;&nbsp;&nbsp;&nbsp; 
							<a href="https://www.justdial.com/Trichy/Bishop-Heber-Higher-Secondary-School-Near-Minguard-Gate-Thepakulam-Tiruchirappalli-Townhall/0431PX431-X431-1234263927Z1T2F9-DC_BZDET" target="_blank_"
		><i class="fas fa-phone"></i
	  ></a>;&nbsp;&nbsp;&nbsp; 
								<a href="https://maps.app.goo.gl/q7EzXq7DckbbbEwf6" target="_blank_"
		><i class="fas fa-map-marker-alt"></i>
							</ul>
						</div>
						<div class="login-block">
							<a href="login.php">Login</a>						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
						<img src="images/bhclogo.png" alt="Logo Image">
						<!-- <h1>Education</h1> -->
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								
								<li><a href="fhome.php">Staff Home</a></li>
    <li><a href="attendance.php">Attendance</a></li>
	<li><a href="viewt.php">View Attendance</a></li>

	<li><a href="index.html">LogOut </a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>						</div>
						<div id="close">
							<i class="fas fa-times"></i>						</div>
					</div>
				</div>
			</div>
		</header>
		
		
		<section class="contact-page-section">
			<div class="container">
				<div class="people-info-wrap">
<form action="" method="post">
<div align="center">
<h3>
Select From Date<input type="date" name="date">

<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
Select To Date <input type="date" name="date1">
<br><br>
Enter reg no <input type="text" name="reg" required>
</h3>

<input type="submit" name="btn"/>
</div>
</form>



<br />
<br />
<table width="95%" align="center" border="0">
	
	<?php
	if(isset($_POST['btn']))
	{ ?>
	
	<tr bgcolor="#38b0de">
		<td colspan="6" align="center"><font color="white"><h2>Attendance  Details</font></h2></td>
  </tr>	
		    <tr bgcolor="#66b2ff">

         <td width="16%"><div align="center" class="style6"><strong>Student Name</strong> </div></td>
		  <td width="16%"><div align="center" class="style6"><strong>Register No.</strong> </div></td>
		  <td width="19%"><div align="center" class="style6"><strong>Attendance </strong> </div></td>
		  	  <td width="16%"><div align="center" class="style6"><strong>Hour</strong> </div></td>
			   <td width="14%"><div align="center" class="style6"><strong>Date</strong> </div></td>
			   
        </tr>
		<tr>
		<td colspan="5"></td>
		</tr>
		<?php
	
		$qry=mysql_query("select * from atten where  date between '$date' and '$date1' && reg='$reg'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		
		
		?>
        <tr bgcolor="#cce5ff">

		     <td><div align="center"><?php echo $row['sname'];?></div></td>
			    <td><div align="center"><?php echo $row['reg'];?></div></td>
			   <td><div align="center"><?php echo $row['att'];?></div></td>
			    <td><div align="center"><?php echo $row['hour'];?></div></td>
			   <td><div align="center"><?php echo $row['date'];?></div></td>
			    </tr>
	
        <?php
		$i++;
		}
	}
		?>
			<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>


				</div>

			
		</section>
		
		<!-- Header Close -->
		<section class="page-content" id="course-page">		</section>
		

		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+919698013201"><i class="fas fa-phone"></i> +91 9698013201</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
		<footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap" itemprop="about">
						<header>
							<h1>about</h1>
						</header>
						<p>A great Institution for Education set in beautiful surroundings,
						 seeks to functioning through mutual love and respect and efficiency and creativity, 
						 catering to the educational needs of all poor, the needy and the under privileged, inspired by the love of our Lord Jesus Christ.</p>

						 <h4><a href="tel:+9779813639131"><i class="fas fa-phone"></i> +91 9698013201</a></h4>
						<h4><a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i> info@bishopheberschool.com</a></h4>
						<h4><a href=""><i class="fas fa-map-marker-alt"></i> Kilapalli Road, 
						Tiruchirappalli Townhall, Trichy - 620002, Near Minguard Gate, Thepakulam </a></h4>
					</div>

					

					

					<div class="box-wrap">
						<header>
							<h1>quick contact</h1>
						</header>
						<section class="quick-contact">
							<input type="email" name="email" placeholder="Your Email*">
							<textarea placeholder="Type your message*"></textarea>
							<button>send message</button>
						</section>
					</div>
				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<p>All Copyrights Reserved 2022</p>
						
					</ul>
					<hr class="footer-line">
				</div>
			<div class="footer-last-section">
				<div class="container">
				
				</div>
			</div>
		</footer>

	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
