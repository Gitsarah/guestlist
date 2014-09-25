<!DOCTYPE html>
<html lang="en">
    <head>
    
        <?php include('head.php');?>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart);
			function drawChart(){
				/*Use Array here (matrice). Don't use "%" as the circle will not be printed !*/
				var data = google.visualization.arrayToDataTable([
					['Task' , 'Percentage completed'],
					['Name1',     40],
					['Name2',     60],
					['Name3',	  20],
					['Name4',	  35],
					['Name5',	  20],
				]);

				var options = {
					title: 'USER PROGRESS',
					legend: 'none',
					pieSliceText: 'none',
					pieHole: 0.8, /*influe on the weight of the graph (0.1 => big weight; 0.9 => light weight)*/
					/*
					slices: {
						0: {color: '#ff0000'},
						1: {color: '#00ff00'},
						/*etc...
						Modify the color of the background of each part of the graph
						feel free to change the color properties for each part. Add a class and edit the CSS file
						(go to line 208)
					}
					*/
				};

				var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
				chart.draw(data, options);
			}
		</script>
		<title>Manage Teams</title>
    </head>
    <body>
    <header>
			<!--Contain the navigation menu-->
			<?php include('header.php');?>
	</header>
    <section>
		<!--Left column-->
		<div class="leftColumn">
				<div class="top">
					<p class="ChangeInfoButton">
						<a href="#" class="poplight" data-rel="popup_changeInfo" onClick="hideChangeInfo">OHMAGOOD</a>
					</p>
					<div class="formLeft2">
						<div id="ChangeInfoButton">
						<!-- dans un lien mettre data-rel qui appelle le id du pop -->
							<!--Pop-up-->
							<!--WARNING : data-rel related to this id. data-rel does not accept punctuation-->
							<div id="popup_changeInfo" class="popup_block">
								<section class="commentTextConnection">
									<h1 class="title">CHANGE YOUR INFOS</h1>
									<form method="post" action="./index.php?admin=true">
										<input type="email" name="newEmail" required placeholder="Email"/><br>
										<input type="password" name="oldPassword" required placeholder="Old password"/><br>
										<input type="password" name="newPassword" required placeholder="New password"/></br>
										<button type="submit" name="editInfos" value="EDIT YOUR INFOS" class="login">EDIT YOUR INFOS</button>
									</form>
								</section>
							</div>
						</div>
					</div>
				</div>
				
				<form method="get" action="#">
                <div class="formLeft">
                	<div>
                    	<div class="pourcent">80%</div>
                    	<div class="nameteam"> 
							<input checked type="checkbox" name="thai_square" class="checkbox" value="thai_square" id="PROJECT_1" onchange="showMembers(this)"/><label for="PROJECT_1" class="labelLeft">TEAM 1</label>  
                    	</div>               
							<!--This is a div who contain members of the team. Add a PHP loop here-->
							<!--This will be the same for each team, who's not done on this example-->
							<!--Don't forget that id of the input is "re-used" in the id of tis div with the "Members"-->
							<div class="youMembers">
								<!--id of the div bellow = id of the input + Members without any space between-->
								<div id="PROJECT_1Members"><!--Don't forget to add the correct php code inside the ID balises-->
                                    <h3>ACCOUNTS</h3>
									<p>@Jamais Vu<a class="poplight" data-rel="popup_quitGroup_thai_square"><span class="falseDeleteOption">X</span></a></p>
									<p>@Guestlist<a class="poplight" data-rel="popup_quitGroup_thai_square"><span class="falseDeleteOption">X</span></a></p>
									<p>@Roomft<a class="poplight" data-rel="popup_quitGroup_thai_square"><span class="falseDeleteOption">X</span></a></p>
                                    <p class="showMoreButton" ><a href="#" class="button poplight" data-rel="popup_addaccount">ADD ACCOUNT</p></a></p>
                                    <hr />
                                    
									<h3>USERS</h3><!--loop: list of the thai square's users-->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td>Oshi - </td>
                                        <td><span class="dropdown">
                                        <form method="post" action="./index.php?admin=true">
                                          <select name="one" class="dropdown-select">
                                            <option value="Admin">Admin</option>
                                            <option value="Proof">Proof</option>
                                            <option value="Writer">Writer</option>
                                          </select>
                                         </form>
                                    	</span></td>
                                        <td><a class="poplight" data-rel="popup_quitGroup_thai_square"><span class="falseDeleteOption">X</span></a></td>
                                      </tr>
                                      <tr>
                                        <td>David -</td>
                                        <td><span class="dropdown">
                                         <form method="post" action="./index.php?admin=true">
                                          <select name="one" class="dropdown-select">
                                            <option value="Admin">Admin</option>
                                            <option value="Proof">Proofreader</option>
                                            <option value="Writer">Writer</option>
                                          </select>
                                         </form>
                                    </span></td>
                                    <td><a class="poplight" data-rel="popup_quitGroup_thai_square"><span class="falseDeleteOption">X</span></a></td>
                                      </tr>
                                      <tr>
                                        <td>Nelly -</td>
                                        <td><span class="dropdown">
                                     <form method="post" action="./index.php?admin=true">
                                      <select name="one" class="dropdown-select">
                                        <option value="Admin">Admin</option>
                                        <option value="Proof">Proofreader</option>
                                        <option value="Writer">Writer</option>
                                      </select>
                                     </form>
                                    </span></td>
                                    <td><a class="poplight" data-rel="popup_quitGroup_thai_square"><span class="falseDeleteOption">X</span></a></td>
                                      </tr>
                                    </table>
                                    <p class="showMoreButton" ><a href="#" class="button poplight" data-rel="popup_adduser">ADD USER</p></a></p>	                                 	
								</div>
							</div>
                            
                           <div id="popup_addaccount" class="popup_block">
							<section class="commentTextConnection">
								<h1 class="title">ADD ACCOUNT</h1>
								<form method="post" action="./index.php?admin=true">
									<input type="email" name="email" required placeholder="Email"/><br>
									<input type="text" name="textInfo" required placeholder="Write a comment!"/><br>
									<button type="submit" name="addaccount" required value="ADD ACCOUNT" class="login">ADD ACCOUNT</button>
								</form>
							</section>
						</div>
                        <div id="popup_adduser" class="popup_block">
							<section class="commentTextConnection">
								<h1 class="title">ADD USER</h1>
								<form method="post" action="./index.php?admin=true">
									<input type="email" name="email" required placeholder="Email"/><br>
									<input type="text" name="textInfo" required placeholder="Write a comment!"/><br>
									<button type="submit" name="adduser" required value="ADD USER" class="login">ADD USER</button>
								</form>
							</section>
						</div>
                            <!--Pop-up-->
							<!--WARNING : data-rel related to this id. data-rel does not accept punctuation-->
							<div id="popup_quitGroup_thai_square" class="popup_block">
								<p>ARE YOU SURE ?</p>
								<div class="choose">         
									<a href="#" class="deleteOption">QUIT</a>
									<a href="#" class="deleteOption">NO</a>
								</div>
							</div>
                            
							<!--Script here executed on load (onload properties does not work with input)-->
							<script type="text/javascript">
								var source = document.getElementById("PROJECT_1");/*Replace here by PHP variable (id of the input)*/
								var toShow = document.getElementById(source.id+"Members"); /*Replace here by PHP variable*/
								if(source.checked == true){
									toShow.style.display = "initial";
								}
								else
								{
									toShow.style.display = "none";
								}
							</script>
						</div>
                        <div style="clear:both;"></div>
						<div>
                        	<div class="pourcent">10%</div>
                    		<div class="nameteam"> 
							<input type="checkbox" name="PROJECT_2" class="checkbox" value="PROJECT_2" id="PROJECT_2" onchange="showMembers(this)"/><label for="thai_square" class="labelLeft">TEAM 2</label>  
                    		</div>
						</div>
                        <div style="clear:both;"></div>
                        <div>
                        	<div class="pourcent">50%</div>
                    		<div class="nameteam"> 
							<input type="checkbox" name="PROJECT_3" class="checkbox" value="PROJECT_3" id="PROJECT_3" onchange="showMembers(this)"/><label for="thai_square" class="labelLeft">TEAM 3</label>  
                    		</div>
						</div>
				</div>
                
                </form>
			</div>
		</div>
	</section>	
		<!-- colonne de droite-->

	<section>
		<?php if(isset($_GET['admin']) AND $_GET['admin'] == true){ ?> <!--If user is SU, we show him the page-->
		<!--Left column-->
		<div class="midMargin">
			<h1 class="greyColor">WRITING PROGRESS</h1>
            <ul id="taggraph">
                    <li><a href="#Month">Month</a></li>|
                    <li><a href="#week">Week</a></li>|
                    <li><a href="#Day">Day</a></li>
            </ul>
            <div style="clear:right;"></div>
            <div id="tabs">
                <ul class="innerDivLeft">
                <h2>ACCOUNTS</h2>
                <?php /*insert here php code to change the accounts when we click on one of the tab poject*/?>
                    <li><a href="#JamaisVu" title="">@Jamais Vu</a></li>
                    <li><a href="#Guestlist" title="">@Guestlist</a></li>
                    <li><a href="#Roomft" title="">@Roomft</a></li>
                   </ul>           
                <div class="tabs_container">
                    <div id="JamaisVu" class="innerDivRight">
                    
                        <?php /*insert here php code to create the toggle per Month week Day and change the pourcent for each graph*/?>
                        <p>TO WRITE</p>
                        <P class="progress">
                            <span style="width: 20%;"><span>20%</span></span>
                        </P>
                        <p>TO IMPROVE</p>
                        <P class="progress">
                            <span class="green" style="width: 40%;"><span>40%</span></span>
                        </P>
                        <p>TO PROOF</p>
                        <P class="progress">
                            <span class="orange" style="width: 60%;"><span>60%</span></span>
                        </P>
                        <p>DONE</p>
                        <P class="progress">
                             <span class="red" style="width: 80%;"><span>80%</span></span>
                        </P>
                    </div>
                    <div id="Guestlist" class="innerDivRight">
                        <p>TO WRITE</p>
                        <P class="progress">
                            <span style="width: 80%;"><span>80%</span></span>
                        </P>
                        <p>TO IMPROVE</p>
                        <P class="progress">
                            <span class="green" style="width: 40%;"><span>40%</span></span>
                        </P>
                        <p>TO PROOF</p>
                        <P class="progress">
                            <span class="orange" style="width: 70%;"><span>70%</span></span>
                        </P>
                        <p>DONE</p>
                        <P class="progress">
                             <span class="red" style="width: 90%;"><span>70%</span></span>
                        </P>
                    </div>
                    <div id="Roomft" class="innerDivRight">
                        <p>TO WRITE</p>
                        <P class="progress">
                            <span style="width: 50%;"><span>50%</span></span>
                        </P>
                        <p>TO IMPROVE</p>
                        <P class="progress">
                            <span class="green" style="width: 40%;"><span>40%</span></span>
                        </P>
                        <p>TO PROOF</p>
                        <P class="progress">
                            <span class="orange" style="width: 60%;"><span>60%</span></span>
                        </P>
                        <p>DONE</p>
                        <P class="progress">
                             <span class="red" style="width: 70%;"><span>80%</span></span>
                        </P>
                    </div> 
                    </div>             		
                </div><!--End tabs container graph-->
               <div id="tabsteam">
                    <ul class="innerDivLeft">
                        <h2>TEAMS</h2>
                    <?php /*insert here php code to change the accounts when we click on one of the tab poject*/?>
                        <li><a href="#TEAM_1" title="">TEAM 1</a></li>
                        <li><a href="#TEAM_2" title="">TEAM 2</a></li>
                        <li><a href="#TEAM_3" title="">TEAM 3</a></li>
                    </ul>
                    <div class="tabs_container team">
                            <?php /*insert here php code to create the toggle per Month week Day and change the pourcent for each graph*/?>
                        <div id="TEAM_1" class="innerDivRight">
                            <p>Oshi - <em>Admin</em></p>
                            <p>David - <em>Writer</em></p>
                            <p>Nelly - <em>Proofrearder</em></p>
                        </div>
                        <div id="TEAM_2" class="innerDivRight">
                            <p>Oshi - <em>Admin</em></p>
                            <p>David - <em>Writer</em></p>
                            <p>Nelly - <em>Proofrearder</em></p>
                        </div>
                        <div id="TEAM_3" class="innerDivRight">
                            <p>Oshi - <em>Admin</em></p>
                            <p>David - <em>Writer</em></p>
                            <p>Nelly - <em>Proofrearder</em></p>          
                        </div>	
                    </div>
    			</div><!--End tabs-->	
		</div>
		<!--End of left column-->
		<?php } ?>
	</section>
	<footer>
			<?php include('footer.php'); ?>
	</footer>
    </body>
</html>
