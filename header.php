<nav class="nav">
	<li class="leftLogo">
		<a href="./writeTweets.php"><img src="./img/logo.png" class="logoGL"/></a>
	</li>
	<li class="left">
		<a href="./writeTweets.php" class="guest">GuestlistSocial</a>
	</li>
	<li class="center">
		<a href="./writeTweets.php">MANAGE TWEETS</a>
		<a href="./manageTeams.php?admin=true">TEAMS</a>
		<a href="./report.php">REPORT</a>
	</li>
	<li class="right">
		<a href="#" class="link">oshi@guestlist.net</a>
		
		<!--uncomment all and you'll be able to connect yourself from all page-->
		<!-- if you do that, the index.php lost is way to live (poor index)-->
		<!--delete the "(true)" and edit the conditions if you do that-->
		<!--The CSS exist already-->
		<?php if(true)/*(isset($_SESSION['connecte']) AND $_SESSION['connecte'])*/ {?>
			<a href="./index.php" class="link" alt="LOG OUT"><img class="logoGL" src="./img/logout.png"></a>
		<?php } else{ ?>
			<!--<a href="#" data-width="400" data-rel="popup_connection" class="poplight link"><img src="./img/login.png" id="Connection"/></a>
			
			<div id="popup_connection" class="popup_block">
				<section class="commentTextConnection" id="commentTextConnection">
					<h1 class="title">CONNECTION</h1>
					<form method="post" action="./index.php?admin=true">
						<input type="email" name="email" placeholder="Email"/>
						<input type="password" name="password" placeholder="Password"/>
						<input type="submit" name="login" value="LOGIN" class="login"/>
					</form>
				</section>
			</div>-->
			
		<?php } ?>
	</li>
</nav>