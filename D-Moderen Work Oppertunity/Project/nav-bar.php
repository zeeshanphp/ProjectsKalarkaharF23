<?php

?>

<ul class="primary-nav">
			 <li><a href="home.php" >HOME</a></li>
			  <li><a href="workers.php">WORKERS</a></li>
			  <li><a href="search-workers.php">SEARCH WORKERS</a></li>
			  <?php if(empty($_SESSION['clientId'])){?>
				<li><a href="home.php">ABOUT US</a></li>
			  <li><a href="home.php">CONTACT US</a></li>
			  <li><a href="signin.php">LOGIN</a></li> 
			  <li><a href="signup.php">REGISTER</a></li><?php } else{?>
			  <li><a href="my_hiering.php">MY REQUESTS</a></li>
			  <li><a href="logout.php">LOGOUT</a></li><?php } ?>
			
			  
			  
			</ul>