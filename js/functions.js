/*javascript functions*/
function changeSrcPoubelleHover(source){
	source.src = "./img/poubelleHover.png";
}

function changeSrcPoubelle(source){
	source.src = "./img/poubelle.png";
}

function changeDisplay(source){
	var commentSource = document.getElementById("commentText"+source.id);
	if(commentSource.style.display != "initial"){
		commentSource.style.display = "initial";
	}
	else
	{
		commentSource.style.display = "none";
	}
}

function showMembers(source){
	var toShow = document.getElementById(source.id+"Members");
	if(source.checked == true){
		toShow.style.display = "block";
	}
	else
	{
		toShow.style.display = "none";
	}
}

/**function show settings groups**/
/*function showSettings(source){
	var toShow = document.getElementById(source.id+"Settings");
	var checkbox = document.getElementById(source.id.substring(4));
	
	if(checkbox.checked == false){
	    checkbox.checked = true;
		toShow.style.display = "none";
	}
	else
	{
	    checkbox.checked = false;
		toShow.style.display = "block";
		toShow.style.border= "1px solid #ebebeb";
		toShow.style.padding= "10px 15px";
		toShow.style.marginTop = "0";
		toShow.style.borderTop = "0.4em solid #ebebeb";
		
	}
}*/
function hideMyAccount(){
	var element = document.getElementById("HideButtonAccount");
	if(element.style.display == "none"){		
		element.style.display = "block";
	}else{
		element.style.display = "none";
	}
}
function hideMyMembers(){
	var element = document.getElementById("HideButtonMembers");
	if(element.style.display == "none"){		
		element.style.display = "block";
	}else{
		element.style.display = "none";
	}
}
/* function pour cacher les teams*/
function hideChangeInfo(){
	var element = document.getElementById("ChangeInfoButton");
	if(element.style.display == "none"){		
		element.style.display = "block";
	}else{
		element.style.display = "none";
	}
}
/*function pour le bouton hide*/
function hideLeftYouPage(source){
	var element = document.getElementById("youHideButtonTarget");
	if(element.style.display == "none"){
		source.innerHTML = "HIDE";
		element.style.display = "block";
	}else{
		source.innerHTML = "SHOW";
		element.style.display = "none";
	}
}

function changeDisplayYou(source){
	var element = document.getElementById("you_"+source.id);
	if(element.style.display == "block"){
		element.style.display = "none";
	}else{
		element.style.display = "block";
	}
}

function approveYou(source){
	var img = document.getElementById(source.id.substring(3)+"Img");
	img.src = "./img/approvedAdmin.png";
	var checkbox = document.getElementById(source.id.substring(3));
	checkbox.checked = true;	
}

function disapproveYou(source){
	var img = document.getElementById(source.id.substring(2)+"Img");
	img.src = "./img/improveAdmin.png";
	var checkbox = document.getElementById(source.id.substring(2));
	checkbox.checked = false;
}

function changeSrc(source){
	var img = document.getElementById(source.id+"Img");
	if(source.checked == true){
		img.src = "./img/approvedAdmin.png";
	}
	else
	{
		img.src = "./img/improveAdmin.png";
	}
}

function setBorderGreen(textarea){
	textarea.className = "borderGreen";
}

function setBorderYellow(textarea){
	textarea.className = "borderYellow";
}

function setBorderRed(textarea){
	textarea.className = "borderRed";
}

function checkRadio(){
	var tableRadio = document.getElementsByClassName("approvedAdmin");
	var tableRadioCheck = document.getElementsByClassName("checkAdmin");
	if(tableRadio[0].checked == true){
		for(var i=1 ; i<tableRadio.length ; i++){
			tableRadio[i].checked = true;
			var textarea = document.getElementById("textareatweet"+i);
			setBorderGreen(textarea);
		}
	}
	else{
		for(var i=1 ; i<tableRadio.length ; i++){
			tableRadio[i].checked = false;
			tableRadioCheck[i-1].checked = true;
			var textarea = document.getElementById("textareatweet"+i);
			setBorderYellow(textarea);
		}
	}
}

function changeYellow(source){
	if(source.checked == true){
		var id = source.id.substring(5);
		var textarea = document.getElementById("textareatweet"+id);
		setBorderYellow(textarea);
		document.getElementById("approveAll").checked = false;
	}
}

function changeRed(source){
	if(source.checked == true){
		var id = source.id.substring(7);
		var textarea = document.getElementById("textareatweet"+id);
		setBorderRed(textarea);
		document.getElementById("approveAll").checked = false;
	}
}

function changeGreen(source){
	if(source.checked == true){
		var id = source.id.substring(8);
		var textarea = document.getElementById("textareatweet"+id);
		setBorderGreen(textarea);
	}
}

function toggle() {
	var element = document.getElementById("approveAll");
	element.addEventListener("click", checkRadio, false);
}

function hideCalendar(source){
	var element = document.getElementById("tweetsTableJS");
	if(element.style.display != "initial"){
		source.innerHTML = "HIDE CALANDER";
		element.style.display = "initial";
	}else{
		source.innerHTML = "SHOW CALANDER";
		element.style.display = "none";
	}
}
/*tags account for graph*/
$(document).ready(function($) {

    $('#tabs').tabulous({
    	effect: 'scale'
    });
    
    $('#tabsteam').tabulous({
    	effect: 'scale'
    });
	
});


/*carousel*/
$(function() {
//	Scrolled by user interaction
		$("#foo1").carouFredSel({
		circular: false,
		infinite: false,
		auto 	: false,
		prev	: {	
			button	: "#foo1_prev",
			key		: "left"
		},
		next	: { 
			button	: "#foo1_next",
			key		: "right"
		},
		pagination	: "#foo1_pag"
	});
		
		$("#foo2").carouFredSel({
		circular: false,
		infinite: false,
		auto 	: false,
		prev	: {	
			button	: "#foo2_prev",
			key		: "left"
		},
		next	: { 
			button	: "#foo2_next",
			key		: "right"
		},
		pagination	: "#foo2_pag"
	});	

		$("#foo3").carouFredSel({
		circular: false,
		infinite: false,
		auto 	: false,
		prev	: {	
			button	: "#foo3_prev",
			key		: "left"
		},
		next	: { 
			button	: "#foo3_next",
			key		: "right"
		},
		pagination	: "#foo3_pag"
	});	
	
	
	$("#profiltwitter").hide();
	var links=$(".image_carouse a");
		links.click(function() {
        var activeiframe = $(this).find("#profiltwitter iframe[id]");
        $(activeiframe).show();
        return false;
    });
	
});



/*Graphique Line*/
/*$(document).ready(function(){
	var ctx = $("#line").get(0).getContext("2d"),
	myLineChart = new Chart(ctx).Line(
		data = {
    		labels: [" ","Jan","Feb","March","April","May", " "],
    		datasets: [
				{
					label: "My First dataset",
					fillColor : "rgba(255, 255, 255, 0)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(0,176,236,1)",
					pointStrokeColor : "rgba(0,176,236,1)",
					pointHighlightFill : "#FFF",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : [ null,65, 59, 80, 81, 56, null]
				},
				{
					label: "My Second dataset",
					fillColor : "rgba(255, 255, 255, 0)",
					strokeColor : "rgba(1,115,181,1)",
					pointColor : "rgba(1,115,181,1)",
					pointStrokeColor : "rgba(1,115,181,1)",
					pointHighlightFill : "#FFF",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data: [ null,60, 39, 59, 67, 75, null]
						}
					]
				}
				, 
	 			{responsive: true,
                bezierCurve : false,
 				scaleShowGridLines : true,
				datasetStroke : true,
				showScale: true,
				scaleOverride: true,
				scaleSteps: 5,
				scaleStepWidth: 20,
				scaleStartValue: 0,
				scaleLabel: "<%=value%>",
				scaleBeginAtZero: true,
				scaleFontFamily: "'GothamBook', 'Helvetica', 'Arial', sans-serif",
				scaleFontStyle: "normal",
				scaleFontColor: "#b7b7b7",
				showlegend: true,
				tooltipFillColor: "#EFEFEF",
				tooltipFontFamily: "'GothamBook', 'Helvetica', 'Arial', sans-serif",
				tooltipTitleFontFamily: "'GothamBook', 'Helvetica', 'Arial', sans-serif",
				tooltipTitleFontStyle: "bold",
				tooltipTitleFontColor: "#6F6F6F",
				tooltipFontColor:"#6F6F6F",
				tooltipXPadding: 20,
				});

	
	var ctx = $("#chart_interactions").get(0).getContext("2d"),
	myLineChart = new Chart(ctx).Line(
		data = {
    		labels: [" ","Jan","Feb","March","April","May", " "],
    		datasets: [
				{
					label: "My First dataset",
					fillColor : "rgba(255, 255, 255, 0)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(0,176,236,1)",
					pointStrokeColor : "rgba(0,176,236,1)",
					pointHighlightFill : "#FFF",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : [ null,65, 59, 80, 81, 56, null]
				}]
				}
				, 
	 			{responsive: true,
                bezierCurve : false,
 				scaleShowGridLines : true,
				datasetStroke : true,
				showScale: true,
				scaleOverride: true,
				scaleSteps: 5,
				scaleStepWidth: 20,
				scaleStartValue: 0,
				scaleLabel: "<%=value%>",
				scaleBeginAtZero: true,
				scaleFontFamily: "'GothamBook', 'Helvetica', 'Arial', sans-serif",
				scaleFontStyle: "normal",
				scaleFontColor: "#b7b7b7",
				showlegend: true,
				tooltipFillColor: "#EFEFEF",
				tooltipFontFamily: "'GothamBook', 'Helvetica', 'Arial', sans-serif",
				tooltipTitleFontFamily: "'GothamBook', 'Helvetica', 'Arial', sans-serif",
				tooltipTitleFontStyle: "bold",
				tooltipTitleFontColor: "#6F6F6F",
				tooltipFontColor:"#6F6F6F",
				tooltipXPadding: 20,
				tooltipYPadding: 20,
				});
				
	var ctx = $("#chart_toptweets").get(0).getContext("2d"),
	myLineChart = new Chart(ctx).Line(
		data = {
    		labels: [" ","Monday","tuesday","Wesnday","Thurday","Friday", "Saturday", "Sunday", " "],
    		datasets: [
				{
					label: "My First dataset",
					fillColor : "rgba(255, 255, 255, 0)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(0,176,236,1)",
					pointStrokeColor : "rgba(0,176,236,1)",
					pointHighlightFill : "#FFF",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : [ null,65, 59, 80, 81, 56, 90, 70, null]
				}]
				}
				, 
	 			{responsive: true,
                bezierCurve : false,
 				scaleShowGridLines : true,
				datasetStroke : true,
				showScale: true,
				scaleOverride: true,
				scaleSteps: 5,
				scaleStepWidth: 20,
				scaleStartValue: 0,
				scaleLabel: "<%=value%>",
				scaleBeginAtZero: true,
				scaleFontFamily: "'GothamBook', 'Helvetica', 'Arial', sans-serif",
				scaleFontStyle: "normal",
				scaleFontColor: "#b7b7b7",
				showlegend: true,
				tooltipFillColor: "#EFEFEF",
				tooltipFontFamily: "'GothamBook', 'Helvetica', 'Arial', sans-serif",
				tooltipTitleFontFamily: "'GothamBook', 'Helvetica', 'Arial', sans-serif",
				tooltipTitleFontStyle: "bold",
				tooltipTitleFontColor: "#6F6F6F",
				tooltipFontColor:"#6F6F6F",
				tooltipXPadding: 20,
				tooltipYPadding: 20,
				});				

	})(); */              



