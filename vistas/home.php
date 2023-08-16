<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
  <link rel="stylesheet" href="http://localhost/INVENTARIO%20-%20copia/css/style.css"> 
</head>
<body>
<div class="container is-fluid">
	<h1 class="title">Home</h1>
	<h2 class="subtitle">¡Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>!</h2>
	<section class="game-section">
  	<h2 class="line-title">CLUB JOVENES CRACK F.C</h2>

  	<div class="owl-carousel custom-carousel owl-theme">
    	<div class="item active" style="background-image: url(https://scontent.flim19-1.fna.fbcdn.net/v/t39.30808-6/352732794_276748664919625_6105974431990954553_n.jpg?stp=cp6_dst-jpg&_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFYysQtg04YnhLmVmwssZifAX5lW34F4Z0BfmVbfgXhnb-KxgX6bExWrAC1hpot_Vyi3Oq4G1f5zX6wBlutgMwK&_nc_ohc=pB6HjqDMzF8AX8qIvDs&_nc_ht=scontent.flim19-1.fna&oh=00_AfAMA7ZoD8SCjQwhjcKGgjR3n7ULx8yypuu8vGk1EN88xw&oe=64E118E8);">
      		<div class="item-desc">
        		<h3>Seleccion Sub-17</h3>
        		<p>💯⚽️💪🏻🇵🇪FAMILIA JÓVENES CRACK FC</p>
      		</div>
    	</div>
    	
    	<div class="item" style="background-image: url(YOUR_SECOND_IMAGE_URL);">
      		<div class="item-desc">
        		<h3>Nombre de la imagen</h3>
        		<p>Descripción de la imagen</p>
      		</div>
    	</div>
  	</div>
	</section>
</div>
</body>
</html>

