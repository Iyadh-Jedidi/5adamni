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
                                session_start();
        
                                $conn = new mysqli("localhost", "root", "123456789a", "user");
                                echo "<br>";
                                $id=$_REQUEST['id'];
                                $sql = "SELECT name,lastname,adresse,travaille,numtel FROM users WHERE id='$id' ";
                                $result=$conn->query($sql);
                                $row = $result->fetch_assoc();
                                echo "<ul>
                                <li> <div style='color:red'> Name: </div> ".$row["name"]."</li>
                                <li>   <div style='color:red'> Lastname:</div>   ".$row["lastname"]."</li>
                                <li>   <div style='color:red'>Address: </div>   ".$row["adresse"]."</li>
                                <li>   <div style='color:red'>Job is :</div>    ".$row["travaille"]."</li>
                                <li>  <div style='color:red'>Telephone:  </div> ".$row["numtel"]."</li>
                                </ul> ";
                                echo "<br>";
                                echo "<br>";
                            ?>

                             <form action="otherprofile.php?id=<?php echo $id ?> " method="post">
                                    Message:   <br>
                                    <textarea id="text" cols="40" rows="4" name="message" placeholder=" leave your Message here.." oninput="message()"></textarea><br>
                                    <label  id="error" style='color:red;'></label>
                                    <button  type="submit" name="send" >Send</button>
                             </form>
                             
                            <?php

                                $sqla= "SELECT image,image_text from images WHERE id_user= '$id'";
                                $resulta= $conn->query($sqla);
                                while ($rowa = $resulta->fetch_assoc()) {
                                    echo "<div id='img_div'>";
                                    if($rowa['image']===""){
                                                echo $rowa['image_text'];
                                    
                                    }
                                    else{
                                    echo "<img src='".$rowa['image']."'height='150' width='150' >                         ";
                                    echo $rowa['image_text'];
                                }
                                    echo "</div>";
                                    echo "<br>";
                                    echo "<br>";      
                                }
                        
                        
                        
                            ?>

                            <?php
                                $source_email=$_SESSION["email"];
                                $sql="SELECT id from users where email= '$source_email'";
                                $result=$conn->query($sql);
                                $row= $result->fetch_assoc();
                                $source=$row["id"];
                                $message=$_POST["message"];
                                echo "<br>";
                                if($message!=""){
                                    $sql="INSERT INTO messages (id_source,id_destination,message) VALUES ('$source','$id','$message')";
                                    $result=$conn->query($sql);
                                
                                }
        

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