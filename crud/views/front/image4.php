?>
<!DOCTYPE html>
<html>
<head>
	<title>Dine a Hotels and Restaurants Category Bootstrap Responsive website Template | Gallery :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" /> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<style>
	.formu{
		position: absolute;
		left: 500px;
		top: 500px;
	}
</style>
<body >
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html">Mimosas</a></h1>
				</div> 
				<div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle"> 
						<ul class="toggle-menu">
							<li><a href="index.html"> Home</a></li>
							<li><a href="about.html"> About</a></li> 
							<li><a href="gallery.html" class="active"> Gallery</a></li> 
							<li><a href="codes.html"> Short Codes</a></li>
							<li><a href="icons.html"> Web Icons</a></li>
							<li><a href="contact.html"> Contact Us</a></li>
						</ul>
					</div> 
				</div>   
				<div class="social-w3licon">
					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
					<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
					<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //header --> 
		<!-- banner-text -->
		<div class="banner-text w3labout-bnr"> 
			<div class="container">  
				<h2><a href="index.html">Accueil</a> / Menu</h2>   
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- //banner -->   
	<!-- gallery -->
	
					 <div class="stp" style="float : left">

							<a href="C:\Users\HPC.ALEXANDRE-REOUN\Desktop\front office\gallery.html" title="Dessert au chocolat" class="sb" ><img src="images/g1.jpg" alt=" " class="img-responsive" /></a>
								<p></p>  
		
	</div>
					
	
					 <div class="formu">
<form method="POST" action="ajoutcommande.php">
<table>
<caption>Ajouter Commande</caption>
<tr>
<td>ID</td>
<td><input type="number" name="id_com" id="id" style="border-radius: 12px" required></td>
<td><span id="missid_com"></span></td>
</tr>


<tr>
<td>id_ligne</td>
<td><input type="number" name="id_lig" id="id_ligne" style="border-radius: 12px" required></td>
<td><span id="missid_ligne"></span></td>
</tr>
<tr>
<td>Date</td>
<td><input type="date" name="Date" id="Date" style="border-radius: 12px" required></td>
<td><span id="missDate"></span></td>
</tr>
<tr>
<td></td>
<td><div class="date_btn">
	<input type="submit" name="ajouter" value="ajouter" id="bouton" style="border-radius: 12px"></div></td>
</tr>

</table>
</form>
</div>
<script >
	
	var formValid = document.getElementById('bouton');
            var id = document.getElementById('id');
            var missid = document.getElementById('missid');
            
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (id.validity.valueMissing){
                    event.preventDefault();
                    missid.textContent = 'ID manquant';
                    missid.style.color = 'red';
                //Si le format de données est incorrect
                }else {
                   
                    missid.textContent = 'Format incorrect';
                    missid.style.color = 'orange';
                }
            }
            
            var formValid = document.getElementById('bouton');
            var id_ligne = document.getElementById('id_ligne');
            var missid_ligne = document.getElementById('missid_ligne');
            
            formValid.addEventListener('click', validation2);
            
            function validation2(event){
                //Si le champ est vide
                if (quantite.validity.valueMissing){
                    event.preventDefault();
                    missid_ligne.textContent = 'quantite manquant';
                    missid_ligne.style.color = 'red';
                //Si le format de données est incorrect
                }else {
                    
                    missid_ligne.textContent = 'Format incorrect';
                    missid_ligne.style.color = 'orange';
                }
            }
</script>

</body>

</html>
