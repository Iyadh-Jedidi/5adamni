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
                        $sql = "SELECT id,email,password,name,lastname,adresse,travaille,numtel,age FROM users " ;
                        $result=$conn->query($sql);
                        echo "<style>
                                table, tr, td {
                                border: 1px solid black;
                                }
                              </style> " ;
                        echo "<table>";
                        echo "<tr>";
                        echo "<td> id </td>";
                        echo "<td> email </td>";
                        echo "<td> name </td>";
                        echo "<td> lastname </td>";
                        echo "<td> job </td>";
                        echo "<td> adress </td>";
                        echo "<td> age </td>";
                        echo "<td> numtel </td>";
                        echo "</tr>";

                        while($row = $result->fetch_assoc()) {
                            
                        
                        echo "<tr>";
                        echo "<td> ".$row["id"]."</td>";
                        echo "<td> ".$row["email"]."</td>";
                        echo "<td> ".$row["name"]."</td>";
                        echo "<td> ".$row["lastname"]."</td>";
                        echo "<td> ".$row["travaille"]."</td>";
                        echo "<td> ".$row["adresse"]."</td>";
                        echo "<td> ".$row["age"]."</td>";
                        echo "<td> ".$row["numtel"]."</td>";
                        echo "<td> <a href='delete.php?id=".$row["id"]."'> delete </a>";
                        echo "<td> <a href='images.php?id=".$row["id"]."'> List Of Pictrues </a>";
                        echo "</tr>";
                        
                    }
                    echo "</table>";

                        ?>
				</div>
			</section>

			

		<!-- Testimonials -->
			
                
			

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Accumsan montes viverra</h3>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
						</section>
						<section>
							<h4>Sem turpis amet semper</h4>
							<ul class="alt">
								<li><a href="#">Dolor pulvinar sed etiam.</a></li>
								<li><a href="#">Etiam vel lorem sed amet.</a></li>
								<li><a href="#">Felis enim feugiat viverra.</a></li>
								<li><a href="#">Dolor pulvinar magna etiam.</a></li>
							</ul>
						</section>
						<section>
							<h4>Magna sed ipsum</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
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