<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>SITE</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-black opacity-x0-7 position-fixed w-100" id="id_navbar">
	  <div class="container-fluid bg-black opacity-x0-8">
	    <a class="navbar-brand" href="#">Navbar</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Link</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Dropdown
	          </a>
	          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	            <li><a class="dropdown-item" href="#">INÍCIO</a></li>
	            <li><a class="dropdown-item" href="#">DECOR VIRTUAL</a></li>
	            <!-- <li><hr class="dropdown-divider"></li> -->
	            <li><a class="dropdown-item" href="#">PROJETOS</a></li>
	            <li><a class="dropdown-item" href="#">ANIMAÕES</a></li>
	            <li><a class="dropdown-item" href="#">SOBRE</a></li>
	            <li><a class="dropdown-item" href="#">MORE</a></li>
	          </ul>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	        </li>
	      </ul>
	      <!-- <form class="d-flex">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form> -->
	    </div>
	  </div>
	</nav>






<?php
			$img_bd = 'banner-projetos.png';
			$img = "background-image: url(./assets/img/$img_bd)";
?>
	<div class="banner" style="<?= $img ?>; display: flex; align-items: center;">
		<div class="container">
			<div class="row align-items-center">
		    <div class="my-1 col-12 opacity-x0-7 bg-black">
					<p class="text-white m-0 py-3 fw-bold">TRANSFORMANDO SONHOS EM PROJETOS</p>
		    </div>
		    <div class="mt-4 col-8 opacity-x0-7 bg-black">
					<p class="text-white m-0 py-3 fw-bold">PRONTO PARA REALIZAR O SEU?</p>
		    </div>
		  </div>
	  </div>
  </div>

	<div class=" container text-center mt-4">
		<div class="">
			<h1>PROJETOS ARQUITETÔNICOS, INTERIORES E MAQUETES ELETRÔNICAS</h1>
		</div>
		<div class="row justify-content-center">
			<?php for($i=0; $i<3; $i++){ ?>
				<div class="col-9 col-lg-4 mb-4">
					<div class="card">
			  		<!-- <img class="card-img-top img-fluid" src="<?= base_url('./assets/img/pexels.jpeg'); ?>" alt="Card image cap"> -->
			  		<img class="card-img-top img-fluid" src="./assets/img/pexels.jpeg" alt="Card image cap">
					  <div class="card-body">
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  </div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<!-- <div class="container" style="margin-top: 50px">
		<h1>ola mundo</h1>
	</div> -->

	<div class="">

		
	</div>



	<div class="wpp-icon">
		<a href="#">
			<img class="mb-3 me-2" src="./assets/img/whatsapp-icon.png" alt="wpp-icon">
		</a>
	</div>

<footer>
	<div class="footer bg-black py-5">
		<p class="text-center text-white mb-0">
			&copy; <?= date("Y"); ?> RAIANY MARQUES ARQUITETURA 3D., Contagem, Minas Gerais 32143-680
		</p>
	</div>

</footer>

<script type="text/javascript">

(function () {
    var navbarColor = document.getElementById('id_navbar');
    window.addEventListener('scroll', function () {
        if (window.scrollY <= 150) navbarColor.classList.remove('transition');
        else navbarColor.classList.add('transition');
    });
})();

</script>


	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
