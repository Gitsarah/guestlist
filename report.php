<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 5.0//EN">
<html>
	<head>
		<?php include('head.php'); ?>
		<title>Report</title>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			/* THOMAS GRAPHIC-CHART1 */
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart1);
				function drawChart1(){
				/*Use Array here (matrice). Don't use "%" as the circle will not be printed !*/
				var data_chart1 = google.visualization.arrayToDataTable([
					['Years old' , 'Percentage'],
					['Celibrites',    15],
					['Powers Users',    80],
					['Casual',    40],
					['Novices',    5],
				]); 

				var options_chart1 = {
					title:'Influence users',
					titleTextStyle:{ color: '#6F6F6F',
  									fontName: 'helvetica',
  									fontSize: 20,
  									bold: 1,
  									},
					legend: 'right',
					pieSliceText: 'none',
					pieHole: 0.7, /*influe on the weight of the graph (0.1 => big weight; 0.9 => light weight)*/
					chartArea:{left:0, width:280},
					slices: {
						0: {color: '#e588b7'},
						1: {color: '#38b27f'},
						2: {color: '#a8a8a8'},
						3: {color: '#23afe4'},
						4: {color: '#a8a8a8'},
					/*etc...
						Modify the color of the background of each part of the graph
						feel free to change the color properties for each part. Add a class and edit the CSS file
						(go to line 208)*/	
					}

				};

				var chart1 = new google.visualization.PieChart(document.getElementById('donutchart_rosetti1'));
				chart1.draw(data_chart1, options_chart1);
			}
			
			/* THOMAS GRAPHIC-CHART2 */
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart2);
			function drawChart2(){
				/*Use Array here (matrice). Don't use "%" as the circle will not be printed !*/
				var data_chart2 = google.visualization.arrayToDataTable([
					['Years old' , 'Percentage'],
					['less than 20',    80],
					['20-30',    40],
					['30-40',    40],
				]); 

				var options_chart2 = {
					title:'Influence age',
					titleTextStyle:{ color: '#6F6F6F',
  									fontName: 'helvetica',
  									fontSize: 20,
  									bold: 1,
  									},
					legend: 'right',
					pieSliceText: 'none',
					pieHole: 0.7, /*influe on the weight of the graph (0.1 => big weight; 0.9 => light weight)*/
					chartArea:{left:0, width:280},
					slices: {
						0: {color: '#a53492'},
						1: {color: '#acacab'},
						2: {color: '#f8bd5b'},
		
						/*etc...
						Modify the color of the background of each part of the graph
						feel free to change the color properties for each part. Add a class and edit the CSS file
						(go to line 208)*/
					}
					
				};

				var chart2 = new google.visualization.PieChart(document.getElementById('donutchart_rosetti2'));
				chart2.draw(data_chart2, options_chart2);
			}
			
			/* THOMAS GRAPHIC-CHART3 */
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart3);
			function drawChart3(){
				/*Use Array here (matrice). Don't use "%" as the circle will not be printed !*/
				var data_chart3 = google.visualization.arrayToDataTable([
					['Years old' , 'Percentage'],
					['> 40 years old Avarage age',    50],
					['< 40 years old Avarage age',    50],
				]); 

				var options_chart3 = {
					title:'50% < 40 years old Avarage age',
					titleTextStyle:{ color: '#6F6F6F',
  									fontName: 'helvetica',
  									fontSize: 20,
  									bold: 1,
  									},
					legend: 'right',
					pieSliceText: 'none',
					pieHole: 0.7, /*influe on the weight of the graph (0.1 => big weight; 0.9 => light weight)*/
					chartArea:{left:0, width:330},
					slices: {
						0: {color: '#773d8e'},
						1: {color: '#e1e1e1'},
						/*etc...
						Modify the color of the background of each part of the graph
						feel free to change the color properties for each part. Add a class and edit the CSS file
						(go to line 208)*/
					}
					
				};

				var chart3 = new google.visualization.PieChart(document.getElementById('donutchart_rosetti3'));
				chart3.draw(data_chart3, options_chart3);
				
			}
					</script>	
	<script type="text/javascript">
			
	/* THOMAS BARGRAPHIC 1 */
			
		google.load("visualization", "1", {packages:["corechart"]});
		google.setOnLoadCallback(drawChart);
		function drawChart() {

       var data = google.visualization.arrayToDataTable([
         ['TestTitle', 'Density', { role: 'style' }],
         ['WEEK1', 5, '#ff6666'],           
         ['WEEK2', 10, '#ff6666'],            
         ['WEEK3', 15, '#ff6666'],
		 ['WEEK4', 30, '#ff6666'],
      ]);

	  var options = {
		legend: 'none',
		chartArea:{width:200},
		 vAxis:{textStyle:{color: '#898989'},baselineColor: '#898989', gridlines:{color: '#ffffff'},},
         hAxis:{textStyle:{color: '#898989'}}
						 
						  };

	var chart = new google.visualization.ColumnChart(document.getElementById('barchart_rosetti1'));

	chart.draw(data, options);

	}
	</script>
	
	<script type="text/javascript">
	
		/* THOMAS BARGRAPHIC 2 */
			
		google.load("visualization", "1", {packages:["corechart"]});
		google.setOnLoadCallback(drawChart2);
		function drawChart2() {

       var data2 = google.visualization.arrayToDataTable([
         ['TestTitle', 'Density', { role: 'style' }],
         ['WEEK1', 5, '#fff146'],           
         ['WEEK2', 10, '#fff146'],            
         ['WEEK3', 15, '#fff146'],
		 ['WEEK4', 15, '#fff146'],
      ]);

	  var options2 = {
		legend: 'none',
		chartArea:{width:200},
		vAxis:{textStyle:{color: '#898989'},baselineColor: '#898989', gridlines:{color: '#ffffff'}},
        hAxis:{textStyle:{color: '#898989'}}
	  };

	var chart2 = new google.visualization.ColumnChart(document.getElementById('barchart_rosetti2'));

	chart2.draw(data2, options2);

	}
		</script>	

	<script type="text/javascript">
	
		/* THOMAS BARGRAPHIC 3 */
			
		google.load("visualization", "1", {packages:["corechart"]});
		google.setOnLoadCallback(drawChart);
		function drawChart() {

       var data = google.visualization.arrayToDataTable([
         ['TestTitle', 'Density', { role: 'style' }],
         ['WEEK1', 5, '#00b0ea'],           
         ['WEEK2', 10, '#00b0ea'],            
         ['WEEK3', 15, '#00b0ea'],
		 ['WEEK4', 15, '#00b0ea'],
      ]);

	  var options = {
		legend: 'none',
		chartArea:{width:200},
		 vAxis:{textStyle:{color: '#898989'},baselineColor: '#898989', gridlines:{color: '#ffffff'},},
         hAxis:{textStyle:{color: '#898989'}},
	  };

	var chart = new google.visualization.ColumnChart(document.getElementById('barchart_rosetti3'));

	chart.draw(data, options);

	}
		</script>	
        <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Months', 'Followers', 'Following'],
          ['Jan', 40, 60],
          ['Feb', 60, 50],
          ['March', 20, 70],
          ['April', 70, 60],
		  ['May', 80, 70],
        ]);
		
        var options = {
		  colors:['#E6E6E6','#39c2ef'],
		  pointSize: 10,
		  chartArea:{left:20, top:10, height:'80%', width:'80%'},
		  vAxis:{textStyle:{color: '#898989'},baseline: 0, baselineColor: '#898989', gridlines:{color: 'white'},},
          hAxis:{textStyle:{color: '#898989'},baseline: 0, baselineColor: '#898989'},
        };
		
	  
        var chart = new google.visualization.LineChart(document.getElementById('chart_followers'));

        chart.draw(data, options);
      }

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart2);
      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Months', 'Posts'],
          ['Jan', 40],
          ['Feb', 60],
          ['March', 20],
          ['April', 70],
		  ['May', 80],
        ]);
		
        var options = {
		  colors:['#39c2ef'],
		  pointSize: 10,
		  chartArea:{left:20, top:20, height:'80%', width:'80%'},
		  vAxis:{minValue: 0, textStyle:{color: '#898989'},baseline: 0, baselineColor: '#898989', gridlines:{color: 'white', count: 10},},
          hAxis:{textStyle:{color: '#898989'},baseline: 0, baselineColor: '#898989', gridlines:{color: '#ebebeb', count: 5}},
        };
		
	  
        var chart2 = new google.visualization.LineChart(document.getElementById('chart_interactions'));

        chart2.draw(data, options);
      }	  

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart3);
      function drawChart3() {
        var data = google.visualization.arrayToDataTable([
          ['Months', 'Top Tweets'],
          ['Jan', 40],
          ['Feb', 60],
          ['March', 20],
          ['April', 70],
		  ['May', 80],
        ]);
		
        var options = {
		  colors:['#39c2ef'],
		  pointSize: 10,
		  chartArea:{left:20, top:20, height:'80%', width:'80%'},
		  vAxis:{minValue: 0, textStyle:{color: '#898989'},baseline: 0, baselineColor: '#898989', gridlines:{color: 'white', count: 10},},
          hAxis:{textStyle:{color: '#898989'},baseline: 0, baselineColor: '#898989', gridlines:{color: '#ebebeb', count: 5}},
        };
		
	  
        var chart3 = new google.visualization.LineChart(document.getElementById('chart_topic'));

        chart3.draw(data, options);
      }	  
	  
    </script>
		
	</head>
	
	<body>
		<header>
			<?php include('header.php'); ?>
		</header>
		
		<section>
			<div class="leftColumn">
				<form method="post" action="#" id="formreport">
					<select class="report_selectAccount">
						<option value="select_account">SELECT ACCOUNT</option>
						<option value="account_1">ACCOUNT 1</option>
						<option value="account_2">ACCOUNT 2</option>
						<option value="account_3">ACCOUNT 3</option>
						<option value="account_4">ACCOUNT 4</option>
					</select>
				</form>
             
                <p class="ChangeContent"><a href="#AUDIENCE">AUDIENCE</a></p>
                <p class="ChangeContent"><a href="#INTERACTION">INTERACTION</a></p>
			</div>
        </section>
        <section class="midMargin">
				<div class="report_floatLeft overflowHidden">
					<h1>DRIFTERS</h1><p><sup>REPORT</sup></p>
					<a class="report_button">DOWNLOAD REPORT</a>
					<form method="post" action="#">
						<select class="report_selectMonth">
							<option value="january">JANUARY</option>
							<option value="february">FEBRUARY</option>
							<option value="march">MARCH</option>
							<option value="april">APRIL</option>
							<option value="may">MAY</option>
							<option value="june">JUNE</option>
							<option value="july">JULY</option>
							<option value="august">AUGUST</option>
							<option value="september">SEPTEMBER</option>
							<option value="october">OCTOBER</option>
							<option value="november">NOVEMBER</option>
							<option value="december">DECEMBER</option>
						</select>
					</form>
				</div>
          </section>
          
          <section class="midMargin"><!--container audience-->
				<div class="borderBottom overflowHidden borderBottom">
					<div class="reportfloatLeft">
						<h2 class="reportH2">Estimated Followers</h2>
						<p class="letterGrey"><strong class="letterBlack">@TAMAKISUSHI</strong> <a href="#"><img class="logoTwitter" src="./img/twitter.png" alt="Twitter"/></a> followers</p><br/>
						<p class="letterGreyp">This month your followers reach<br/>
						the number of :</p>
						<h1 class="numberFollowers">100K</h1>
					</div>
					<div>
						<div id="Handoo_progress">
							<div>
								<h2 class="reportH2">Your Followers Profiles</h2>
								<p style="margin-bottom:15%;">Who is following you? Check the relevance of your work seeing if your followers are in your target audience</p>
								<p class="Handoo_tableRight"><progress value="80" min="0" max="100" title="80%">80%</progress> 80% Male</p>
								<p class="Handoo_tableRight"><progress value="20" min="0" max="100">20%</progress> 20% Female</p>
							</div>
						</div>
					</div>
				</div>
				<div class="marginTop overflowHidden borderBottom">
					<div class="reportfloatRight" id="twitterFollowerDiv">
						<h3 class="letterGreyH3">Twitter followers</h3><p class="nbfollowers">+20^</p>
						<p class="clearBoth">Followers acquisition in month</p>
					</div>
					<div class="clearBoth" id="chart_div">                  
                        <!--need data in php for toggle graph per month week and day-->
                            <ul id="taggraph">
                                    <li><a href="#Month">Month</a></li>|
                                    <li><a href="#week">Week</a></li>|
                                    <li><a href="#Day">Day</a></li>
                            </ul>
							<div class="clearfix"></div>
						
                        <!--line graph followers -->
                        <div id="chart_followers" style="width: 90%; height: 300px; "></div>                  
                     </div>  
				</div>
                <!--Carrousel-->
                <div class="marginTop followers">
                <!--followers-->
                	<h2 class="reportH2">Top 25 followers</h2>
                    <div class="image_carousel">
                        <div id="foo1">
                            <a href="#guestlist"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#ThemifyCloud"><img src="./img/itemtwitter2.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#" onclick="toggle_visibility("Guestlist");"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                        </div>
                        <div class="clearfix"></div>
                        <a class="prev" id="foo1_prev" href="#"><span>prev</span></a>
                        <a class="next" id="foo1_next" href="#"><span>next</span></a>
                        <div class="pagination" id="foo1_pag"></div>
                    </div>
                    <!--Who don’t follow you back-->
                    <h2 class="greyLetter">Who don’t follow you back?</h2>
                    <p class="letterGreen">+ 200</p>
                    <div class="image_carousel">
                        <div id="foo2">
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                        </div>
                        <div class="clearfix"></div>
                        <a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
                        <a class="next" id="foo2_next" href="#"><span>next</span></a>
                        <div class="pagination" id="foo2_pag"></div>
                    </div>
                    <!--influencers-->
                    <h2 class="reportH2">Influencers</h2>
                    <p>Celebrites | Powers Users | Casual | Novices </p>
                    <div class="image_carousel">
                        <div id="foo3">
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                            <a href="#"><img src="./img/itemtwitter1.jpg" alt="Guestlist" /></a>
                        </div>
                        <div class="clearfix"></div>
                        <a class="prev" id="foo3_prev" href="#"><span>prev</span></a>
                        <a class="next" id="foo3_next" href="#"><span>next</span></a>
                        <div class="pagination" id="foo3_pag"></div>
                    </div>
                 </div>
                 <!--ID tweeter-->
                 <div id="profiltwitter">
                     <div id="Guestlist" class="innerDivRightHeight">
                      <iframe id="guestlist" border=0 frameborder=0 height=350 width=250
     src="https://twitframe.com/show?url=https://twitter.com/guestlistdotnet/status/512133859824398337
     "></iframe>
                     <iframe id="ThemifyCloud" border=0 frameborder=0 height=350 width=250
                     src="https://twitframe.com/show?url=https://twitter.com/ThemifyCloud/status/514794276455063553
                     "></iframe>
                     </div>
        		</div>
                <div class="clearfix"></div>
				<div id="chart-container">
					<div id="donutchart_rosetti1"></div>
					<div id="donutchart_rosetti2"></div>
					<div id="donutchart_rosetti3"></div>
                    
				</div>
                <div class="clearfix"></div>
                <!--Graph Donut-->
                <div>
<hr>
                </div>
         </section>
        <div class="clearfix"></div>
		
         <section class="midMargin"><!--container intetaction -->       
				<div class="marginTop overflowHidden borderBottom">
				<div id="chart_div">
                	<h2 class="reportH2">Interactions</h2>
                    <!--graph line-->
                        <ul id="taggraph">
                                <li><a href="#Month">Month</a></li>|
                                <li><a href="#week">Week</a></li>|
                                <li><a href="#Day">Day</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div id="chart_interactions" style="width: 90%; height: 300px;"></div>
                         
                     
                    <div class="clearfix"></div>
					<div class="reportfloatLeft width33">
						<h1 class="letterGreyH3noFloat" style="margin-left: 50px;"><strong class="letterRed">#</strong>Mentions</h1>
                        <p class="NbInteration">25</p>
						<div id="barchart_rosetti1"></div>
					</div>
					<div class="reportfloatLeft width33">
						<h1 class="letterGreyH3noFloat" style="margin-left: 50px;"><strong class="letterYellow">#</strong>Favorite</h1>	
                        <p class="NbInteration">100</p>
						<div id="barchart_rosetti2"></div>
					</div>
					<div class="reportfloatLeft width33">
						<h1 class="letterGreyH3noFloat" style="margin-left: 50px;"><strong class="letterBlue">#</strong>Retweets</h1>
                        <p class="NbInteration">20</p>
						<div id="barchart_rosetti3"></div>
					</div>
					
				</div>
				</div>
				<div class="marginTop">
                	<h2 class="reportH2">Top Topics</h2>
						<ul id="taggraph">
                                <li><a href="#Month">Most Retweets</a></li>|
                                <li><a href="#week">Most Favourited</a></li>|
                                <li><a href="#Day">Most Reply</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div id="chart_topic" style="width: 90%; height: 300px; "></div>
                     <div class="clearfix"></div>
                    					
				</div>
				<div class="marginTop" id="sizetweet">
							<style type="text/css">#twitter-widget-0{width:760px;}
							</style>
					<h2 class="greyColor">Number of retweets</h2>
						<div class="retweet">
							<div class="reportfloatLeft">
								<h1 class="NbRetweets">20</h1>
							</div>
                            <div class="reportfloatLeft">                            
								<blockquote class="twitter-tweet" data-cards="hidden">
                                <p>Keep it small and sophisticated with some sushi slices! 
                                <a href="http://t.co/6gBYKUI9NT">http://t.co/6gBYKUI9NT</a>
                                </p>&mdash; Ta-Maki Sushi (@TaMakiSushi)
                                <a href="https://twitter.com/TaMakiSushi/status/514021392950775809">22 Septembre 2014</a></blockquote>
								<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
							</div>
					   </div>
					   <div class="clearfix"></div>
						
					 <div class="retweet">
							<div class="reportfloatLeft">
								<h1 class="NbRetweets">15</h1>
							</div>
                            <div class="reportfloatLeft">
								<blockquote class="twitter-tweet" data-cards="hidden"><p><a href="https://twitter.com/hashtag/Didyouknow?src=hash">#Didyouknow</a> it was only in 2007 that the prize money for male and female tennis players was equalised at <a href="https://twitter.com/hashtag/Wimbledon?src=hash">#Wimbledon</a></p>&mdash; Ta-Maki Sushi (@TaMakiSushi) <a href="https://twitter.com/TaMakiSushi/status/513704410388889600">21 Septembre 2014</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

							</div>
					   </div>
					   <div class="clearfix"></div>
					 <div class="retweet">
							<div class="reportfloatLeft">
								<h1 class="NbRetweets">10</h1>
							</div>
                            <div class="reportfloatLeft">
								<blockquote class="twitter-tweet" data-cards="hidden" width="600"><p>For more great pictures like this to wet your appetite come and see us over on Facebook <a href="http://t.co/EGj7bj6Vnn">http://t.co/EGj7bj6Vnn</a></p>&mdash; Ta-Maki Sushi (@TaMakiSushi) <a href="https://twitter.com/TaMakiSushi/status/513342038168043521">20 Septembre 2014</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								
							</div>
					   </div>
					   <div class="clearfix"></div>
					
					
				</div>
				
			</div>
		</section>
		
		<footer>
			<?php include('footer.php'); ?>
		</footer>
	</body>
</html>