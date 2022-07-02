<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

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
		><i class="fas fa-phone"></i></a>;&nbsp;&nbsp;&nbsp; 
								<a href="https://maps.app.goo.gl/q7EzXq7DckbbbEwf6" target="_blank_"
		><i class="fas fa-map-marker-alt"></i>
							</ul>
						</div>
						<div class="login-block">
							<a href="login.php">Login</a>
							
						</div>
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
								<li><a href="adminhome.php">Admin Home</a></li>
								<li><a href="views.php">View Student</a></li>
									<li><a href="viewf.php">View Staffs</a></li>
									<li><a href="index.html">LogOut </a></li>

								
								
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
			<!-- Header Close -->
		<section class="page-content" id="course-page">
		
		
	<div align="center">		
	
		<font size="5"><b>Faculty Details</b></font>
</div>
		<br>
<table width="100%" align="center">
	<tr >
		<td colspan="10">&nbsp;</td>
		</tr>	
		    <tr bgcolor="#8b8989">
          <td width="1%">&nbsp;</td>
          <td width="6%"><div align="center" class="style6"><strong><font color="white">Id</font></strong> </div></td>
		   <td width="12%"><div align="center" class="style6"><strong><font color="white">Faculty Name</font></strong> </div></td>
		  	 <td width="11%"><div align="center" class="style6"><strong><font color="white">Class</font></strong> </div></td>
			  <td width="11%"><div align="center" class="style6"><strong><font color="white">Section</font></strong> </div></td>
			  <td width="11%"><div align="center" class="style6"><strong><font color="white">Designation</font></strong> </div></td>
		    <td width="14%"><div align="center" class="style6"><strong><font color="white">Email</font></strong> </div></td>
			 <td width="16%"><div align="center" class="style6"><strong><font color="white">Phone</font></strong> </div></td>
	        </tr>
		<tr>
		<td colspan="7">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from fregister");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>
	
	      <tr bgcolor="#e8e7e7">
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
			  <td><div align="center"><?php echo $row['name'];?></div></td>
			 <td><div align="center"><?php echo $row['dept'];?></div></td>
			  <td><div align="center"><?php echo $row['class'];?></div></td>
			  <td><div align="center"><?php echo $row['desig'];?></div></td>
			    <td><div align="center"><?php echo $row['email'];?></div></td>
			  <td><div align="center"><?php echo $row['phone'];?></div></td>
			  	 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		
		?>
				<tr>
		<td colspan="7" align="center">&nbsp;</td>
		</tr>
		
</table>

		
			</section>
		<!-- Header Close -->
	

		<section class="query-section">
			<div class="container">
			<p>Any Queries? Ask us a question at<a href="tel:0431 2704609"><i class="fas fa-phone"></i> 0431 2704609</a></p>
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

						 <h4><a href="tel:0431 2704609"><i class="fas fa-phone"></i> 0431 2704609</a></h4>
						 <h4><a href="mailto:aidhss20440070tpk2@gmail.com"><i class="fas fa-envelope"></i> aidhss20440070tpk2@gmail.com</a></h4>
						 <h4><a href=""><i class="fas fa-map-marker-alt"></i> WB Road, Singarathope, Teppakulam, Tamil Nadu 620002 </a></h4>
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
