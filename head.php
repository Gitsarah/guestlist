<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<meta name="msapplication-tap-highlight" content="no"/>
<link rel="stylesheet" href="./css/main.css"/>
<link rel="stylesheet" href="./css/manageteams.css"/>
<!--Script for the pop-up button-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
	jQuery(function($){
	//Lorsque vous cliquez sur un lien de la classe poplight
		$('a.poplight').on('click', function() {
			var popID = $(this).data('rel'); //Trouver la pop-up correspondante
			var popWidth = $(this).data('width'); //Trouver la largeur

			//Faire apparaitre la pop-up et ajouter le bouton de fermeture
			$('#' + popID).fadeIn().css({ 'width': popWidth}).prepend('<a href="#" class="close"><img src="img/close_pop.jpg" class="btn_close" title="Close Window" alt="Close" /></a>');
			
			//Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
			var popMargTop = ($('#' + popID).height() + 80) / 2;
			var popMargLeft = ($('#' + popID).width() + 80) / 2;
			
			//Apply Margin to Popup
			$('#' + popID).css({ 
				'margin-top' : -popMargTop,
				'margin-left' : -popMargLeft
			});
			
			//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues d'anciennes versions de IE
			$('body').append('<div id="fade"></div>');
			$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
			
			return false;
		});
	
		//Close Popups and Fade Layer
		$('body').on('click', 'a.close, #fade', function() { //Au clic sur le body...
			$('#fade , .popup_block').fadeOut(function() {
				$('#fade, a.close').remove();  
			}); //...ils disparaissent ensemble	
			return false;
		});
	});
</script>