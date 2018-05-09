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
                          // Create database connection
                          $db = new mysqli("localhost", "root", "123456789a", "user");





                        session_start();
                        $email=$_SESSION["email"];
                        $sql = "SELECT id,name,lastname,adresse,travaille,numtel FROM users WHERE email='$email'" ;
                        $result=$db->query($sql);
                        $row = $result->fetch_assoc();
						$id=$row["id"];
						echo"<section class='wapper'>
                           <div class='inner'>
                           <div class='highlights'>
						   <section>
						   <div class='content'>
							   <header>
									<img src='./images/profile.png' width='250px'>
                            		<div style='color:red'>  Nom: </div>  ".$row["name"]."
                            		<div style='color:red'> Prenom: </div>  ".$row["lastname"]."
                            		<div style='color:red'> Adresse: </div>    ".$row["adresse"]."
                            		<div style='color:red'> Travaille : </div>    ".$row["travaille"]."
									<div style='color:red'>Téléphone: </div>   ".$row["numtel"]."
								</header>
							</div>
							</section>
							</div>
                        </div> 
                        
                        </section>";



                             // Initialize message variable
                          $msg = "";

                          // If upload button is clicked ...
                          if (isset($_POST['upload'])) {
                            // Get image name
                            $image = $_FILES['image']['name'];
                            // Get text
                            $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
                        
                            // image file directory
                            $target = basename($image);
                        
                            $sql = "INSERT INTO images (image,id_user,image_text) VALUES ('$image',$id,'$image_text')";
                            // execute query
                            $db->query($sql);
                        
                            move_uploaded_file($_FILES['image']['tmp_name'], $target) ; 

                          }
                      
                        ?>
                        <form method="POST" action="profile.php" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <div>
                            <input type="file" name="image">
                            </div>
                            <div>
                            <textarea 
                                id="text" 
                                cols="40" 
                                rows="4" 
                                name="image_text" 
                                placeholder="Say something about this image..."></textarea>
                            </div>
                                <button type="submit" name="upload">POST</button>
                        </form>

                        
                        <?php
                            echo $msg;
                            echo "<br>";
                            echo "<br>";
                            echo "<style>

                                .center {
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                            }
                            </style> ";


                            $sqla= "SELECT id,image,image_text from images WHERE id_user= '$id'";
							$resulta= $db->query($sqla);
							echo"<section class='wapper'>
							<div class='inner'>
							<div class='highlights'>
							<section>";
 
                            while ($rowa = $resulta->fetch_assoc()) {
								echo "<section>
								<div class='content'>
									<header>";
                                if ($rowa['image']===""){
                                            echo "<center>".$rowa['image_text']."</center>";
                                            echo "<center> <a href='deletepost.php?id=".$rowa["id"]."'>delete </a> </center>";
                                }
                                else {
                                echo "<img src='".$rowa['image']."' style:' height='400px' ;width='400px ' ;    class='center'>                         ";
                                echo "<center>".$rowa['image_text']."</center>";
                                echo "<center> <a href='deletepost.php?id=".$rowa["id"]."'>delete </a> </center>";
                            }
							echo"</header>
							</div>";     
							}
							echo "	</section>
									</div>
                        			</div> 
                       				</section>";
                        ?>
			
				</div>
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
							<h4>Développeurs</h4>
							<ul class="alt">
								<li><a href="#">Iyadh Jedidi</a></li>
								
							</ul>
						</section>
						<section>
							<h4>Les médias sociaux</h4>
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