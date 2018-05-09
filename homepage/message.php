<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>5adamni</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
		<header id="header">
				<a class="logo" href="index.html">Home</a>
				<input class="logo" type="text" style="background-color:white;color: black;height: 50px;width: 400px"  placeholder="Recherche">
				<a class="logo" href="./profile.php">Profile</a>
				<a class="logo" href="./message.php">Messages</a>
				
				
				


					<nav>
						<a href="#menu">Menu</a>
					</nav>
			</header>


		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>5adamni</h1>
					<p>el site mta3na ya3tik el forssa bech tnajem t3aref b 5edemtek w tal9a el source bech tkawen flous<br />
				</div>
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
               
                <?php
                            $conn = new mysqli("localhost", "root", "123456789a", "user");

                            session_start();
                            $email=$_SESSION["email"];
                            //echo $email;
                            $sql="SELECT id from users where email= '$email'";
                            $result=$conn->query($sql);
                            $row= $result->fetch_assoc();
                            $id=$row["id"];
                            //echo $id;
                            $sql="SELECT id_source,message from messages where id_destination= '$id'";
                            $result=$conn->query($sql);
                            echo "<style>
                                    table, tr, td {
                                    border: 1px solid black;
									align-self: center;
									
                                    }
                                    </style> " ;
                            echo "<table align='center' >";
                                echo "<tr>";
                                echo "<td> Name </td>";
                                echo "<td>Message</td>";
                                // echo "<td>Date</td>";
                                echo "</tr>";
                            while($row= $result->fetch_assoc())
                            {
                                $id_source=$row["id_source"]."";
                                $sqla="SELECT name,email from users where id= '$id_source'";
                                $resulta=$conn->query($sqla);
                                $rowa= $resulta->fetch_assoc();

                                echo "<tr>";
                                echo "<td><a href='otherprofile.php?id=".$id_source."'>".$rowa["name"]."</a></td>";
                                echo "<td>".$row["message"]."</td>";
                               
                                echo "</tr>";
                            }
                            echo "</table>";


                        ?>
			
					
				
			</section>

			

		<!-- Testimonials -->
			
                
			

		<!-- Footer -->
		<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>5adamni</h3>
							<p>el site mta3na ya3tik el forsa bech tlawej 3ala 5edma w t3awen rou7ek fel masrouf w tal9a kifech t3abi wa9tek bel 5edma wel 7ajet el behia w kol </p>
						</section>
						<section>
							<h4>Devellopers</h4>
							<ul class="alt">
								<li><a href="#">Iyadh Jedidi</a></li>
								
							</ul>
						</section>
						<section>
							<h4>Socials</h4>
							<ul class="plain">
								<li><a href="https://www.facebook.com/profile.php?id=100010163085311"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="https://github.com/Iyadh-Jedidi/"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
					</div>
				</div>
			</footer>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>