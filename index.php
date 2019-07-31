<!DOCTYPE html>
<?php include_once("conexao.php");
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos as noticias da tabela
$result_noticia = "SELECT * FROM noticias";
$resultado_noticia = mysqli_query($conexao, $result_noticia);

//Contar o total de noticias
$total_noticias = mysqli_num_rows($resultado_noticia);

//Seta a quantidade de noticias por pagina
$quantidade_pg = 6;

//calcular o número de paginas necessárias para apresentar as noticias
$num_pagina = ceil($total_noticias/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar as noticias a serem apresentadas na página
$result_noticias = "SELECT * FROM noticias limit $incio, $quantidade_pg";
$resultado_noticias = mysqli_query($conexao, $result_noticias);
$total_noticias = mysqli_num_rows($resultado_noticias);

?>

<html lang="pt-br">
	<head>
		<meta charset = "UTF-8"/>
		<title>ETEC ALBERT EINSTEIN</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="imagem/png" href="img/icon.png"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		
		<script src="js/util.js"></script>
		<script src="js/jquery-3.4.0.js"></script>
		<script src="js/bootstrap.js"></script>	
		<script src="js/funcoes.js"></script>
		
		<!--[if lt IE 11]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->
	
	</head>
	<body>
	
<div class="jumbotron jumbotron-fluid">
	<?php
	include_once "cabecalho.php";
	?>		
		<div class="container menu-superior">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd;">
						<a class="navbar-brand" href="#">ETEC Albert Einstein</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					  
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Dropdown
									</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Dropdown
									</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Dropdown
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Dropdown
									</a>
								</li>
							</ul>
							<form class="form-inline my-2 my-lg-0">
								<div class="container h-100">
									<div class="d-flex justify-content-center h-100">
										<div class="searchbar">
											<input class="search_input" type="text" name="" placeholder="Search...">
											<a href="#" class="search_icon"><img src="img/busca.png" width="30" height="30"><i class="fas fa-search"></i></a>
										</div>
									</div>
								 </div>
							</form>
						</div>
					</nav>
				</div>
			</div>
		</div>
					
		<div class="container">
			<div class="row pt-3 pb-3 pr-3 pl-3">
				<div class="col-9 col-noticias-banner">
					<div class="row pr-3">
						<div class="col-12">
							<div id="banner" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#banner" data-slide-to="0" class="active">1</li>
									<li data-target="#banner" data-slide-to="1">2</li>
									<li data-target="#banner" data-slide-to="2">3</li>
									<li data-target="#banner" data-slide-to="3">4</li>
								</ol>	
								
								<!--ao incluir novas imagens no banner rotativo respeitar as medidas 810x426 -->
								
								<div class="carousel-inner">
									<div class="carousel-item active">
										<a href="#">
											<img src="img/solicitacao-de-documentos.jpg" class="img-fluid" alt="...">
											<!-- *Legenda 
											<div class="carousel-caption">
												<h3>Primeiro Item</h3>
												<p>Lorem ipsum dolor sit amet, Curabitur ac sagittis neque, vel egestas est. </p>
											</div>
											-->
										</a>
									</div>
									<div class="carousel-item">
											<a href="https://nsa.cps.sp.gov.br/" target="_blank">
											<img src="img/nsa-etec-einstein.jpg" class="img-fluid" alt="...">
											<!-- *Legenda 
											<div class="carousel-caption">
												<h3>Primeiro Item</h3>
												<p>Lorem ipsum dolor sit amet, Curabitur ac sagittis neque, vel egestas est. </p>
											</div>
											-->
										</a>
									</div>
									<div class="carousel-item">
										<a href="#">
											<img src="img/solicitacao-de-documentos.jpg" class="img-fluid" alt="...">
											<!-- *Legenda 
											<div class="carousel-caption">
												<h3>Primeiro Item</h3>
												<p>Lorem ipsum dolor sit amet, Curabitur ac sagittis neque, vel egestas est. </p>
											</div>
											-->
										</a>
									</div>
									<div class="carousel-item">
										<a href="https://nsa.cps.sp.gov.br/" target="_blank">
											<img src="img/nsa-etec-einstein.jpg" class="img-fluid" alt="...">
											<!-- *Legenda 
											<div class="carousel-caption">
												<h3>Primeiro Item</h3>
												<p>Lorem ipsum dolor sit amet, Curabitur ac sagittis neque, vel egestas est. </p>
											</div>
											-->
										</a>
									</div>
								</div>						
								<a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Anterior</span>
								</a>
								<a class="carousel-control-next" href="#banner" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Próximo</span>
								</a>
							</div>		
						</div>
					</div>
					
					<div class="grade-noticias pr-3">
						<div class="row pt-3 pb-3">
							<div class ="col-12">
								<span class="linha-1"></span>
								<h1 class="t-news">EINSTEIN NEWS&nbsp;</h1>
							</div>
						</div>
						
						<!--ao incluir novas imagens na area de noticias respeitar as medidas 395x237 -->
						
						<div class="row">
						<?php while($rows_noticias = mysqli_fetch_assoc($resultado_noticias)){ ?>
							<div class ="col-6">
								<figure>
									<a href="https://www.vestibulinhoetec.com.br/"><img src="img/vestibulinho-2019.jpg" class="img-fluid" alt=""></a>
									<figcaption>		
										<h2><?php echo $rows_noticias['titulo']; ?></h2>
										<h3><?php echo $rows_noticias['subtitulo']; ?></h3>
										<footer class="blockquote-footer"><?php echo $rows_noticias['publicacao']; ?></footer>
										<h4><?php echo $rows_noticias['data']; ?></h4>
									</figcaption><hr>
								</figure>
								<p><?php echo $rows_noticias['texto']; ?></p><hr>
							</div>
							<?php } ?>
						</div>
				
					</div>
					
					<div class="mais-noticias">
						<div class="row pb-3">
							<div class="col-12">
								<span class="linha-1-2"></span>
								<p>Pg.<?php echo $pagina; ?>&nbsp;</p>
							</div>
						</div>
						
						<?php
							//Verificar a pagina anterior e posterior
							$pagina_anterior = $pagina - 1;
							$pagina_posterior = $pagina + 1;
						?>
						
						<div class="row pt-3 pb-3">
							<div class="col-12 ">
								<nav aria-label="...">
									<ul class="pagination justify-content-center">
										<li class="page-item">
										<?php
										if($pagina_anterior != 0){ ?>
											<a class="page-link" href="index.php?pagina=<?php echo $pagina_anterior; ?>" tabindex="-1" aria-label="Anterior">
												<span aria-hidden="true">Anterior</span>
											</a>
										<?php }else{ ?>
											
											<span class="sr-only">Anterior</span>
											
										<?php }  ?>
										</li>			
										
										<?php
										
										//Quantidade de links que serão exibidos na pagina
										$max_links = 1; 
										
										//Apresentar a paginacao
										
										//num Links antes do link da pagina atual
										
										for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){ 
										if ($pag_ant >= 1){?>
										<li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $pag_ant; ?>"><?php echo $pag_ant; ?></a></li>
										<?php } }?>
										<li class="page-item active"><a class="page-link" href="index.php?pagina=<?php echo $pagina; ?>"><?php echo $pagina; ?></a></li>	
										<?php
																
										//num Links após o link da pagina atual
										for($pag_pos = $pagina + 1; $pag_pos <= $pagina + $max_links; $pag_pos++){ 
										if ($pag_pos <= $num_pagina){?>
										<li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $pag_pos; ?>"><?php echo $pag_pos; ?></a></li>
										<?php }  }?>	
										
										<li class="page-item">
										<?php
											if($pagina_posterior <= $num_pagina){ ?>
											<a class="page-link" href="index.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Proximo">
												<span aria-hidden="true">Próximo</span>			
											</a>
											<?php }else{ ?>
												<span class="sr-only">Próximo</span>	
											<?php }  ?>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						
					</div>
				</div>	
				
				<div class="col-3  menu-lateral">
					<div class="bloco-1">
						<div class="row pt-4 pb-4">
							<div class="col-12">
								<span class="linha-2"></span>
								<mark>&nbsp;INSTITUCIONAL&nbsp;</mark>
							</div>
						</div>
						
						<div class="row pt-4 pb-4">
							<div class="col-6 m-auto hover">
								<a href="#"><img src="img/Alunos.png" class="img-fluid" alt=""></a>
							</div>
							<div class="col-6 m-auto hover">
								<a href="#"><img src="img/professor.png" class="img-fluid" alt=""></a>
							</div>
						</div>
						
						<div class="row pb-4">
							<div class="col-6 m-auto hover">
								<a href="#"><img src="img/Moodle.png" class="img-fluid" alt=""></a>
							</div>
							<div class="col-6 m-auto hover">
								<a href="#"><img src="img/Recados.png" class="img-fluid" alt=""></a>
							</div>
						</div>
						
						<div class="row pb-4">
							<div class="col-6 m-auto hover">
								<a href="#"><img src="img/cursos.png" class="img-fluid" alt=""></a>
							</div>
							<div class="col-6 m-auto hover">
								<a href="#"><img src="img/Estagios.png" class="img-fluid" alt=""></a>
							</div>
						</div>
						
						<div class="row pb-4">					
							<div class="col-6 m-auto hover">
								<a href="https://www.vestibulinhoetec.com.br/" target="_blank"><img src="img/vestibulinho.png" class="img-fluid" alt=""></a>
							</div>
							<div class="col-6 m-auto hover">
								 <a href="http://www.ava.etecalberteinstein.com.br/ " target="_blank"><img src="img/icone ava2.png" class="img-fluid" alt=""></a>
							</div>
						</div>
					</div>
					<div class="bloco-2">	
					<div class="row pt-4 pb-4">
						<div class="col-12">
							<span class="linha-2"></span>
							<mark>&nbsp;MENU ETEC&nbsp;</mark>
						</div>
					</div>
					
					<div class="row pt-4 pb-4">
						<div class="col-12">
							<nav aria-label="navegacao">
								<ul>
									<li><a href="#">INICIO</a></li>
									<li><a href="Historia.html">NOSSA HISTÓRIA</a></li>
									<li><a href="">DIRETORIA</a></li>
									<li><a href="#">SECRETARIA</a></li>
									<li><a href="#">DIRETORIA DE SERVIÇOS</a></li>
									<li><a href="#">CORPO DOCENTE</a></li>
									<li><a href="#">CURSOS OFERECIDOS</a></li>
									<li><a href="#">DIRETOR DE SERVIÇOS</a></li>
								</ul>
							</nav>	
						</div>	
					</div>

				</div>
                                <div class="bloco-3">	

					<div class="row pt-4 pb-4">
						<div class="col-12">
							<span class="linha-2"></span>						
							<mark>&nbsp;REDES SOCIAIS&nbsp;</mark>
						</div>
					</div>
					
					<div class="row pt-4 pb-4">
						<div class="col-6 m-auto hover">
							<a href="https://facebook.com/" target="_blank"><img src="img/facebook.png" class="img-fluid" title="FACEBOOK" alt=""></a>
						</div>
						<div class="col-6 m-auto hover">
							<a href="https://twitter.com/" target="_blank"><img src="img/twitter.png" class="img-fluid" title="TWITTER" alt=""></a>								
						</div>
					</div>
					
					<div class="row pb-4">
						<div class="col-6 m-auto hover">
							<a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png" class="img-fluid" title="INSTAGRAM" alt=""></a>
						</div>
						<div class="col-6 m-auto hover">
							<a href="https://www.whatsapp.com/" target="_blank"><img src="img/whatsapp.png" class="img-fluid" title="WHATSAPP" alt=""></a>
						</div>
					</div>
                                </div>
				<div class="bloco-4">
					<div class="row pt-4 pb-4">
						<div class="col-12">
							<span class="linha-2"></span>
							<mark>&nbsp;GABARITO ENEM&nbsp;</mark>
						</div>
					</div>
					
					<div class="row pt-4 pb-4">
						<div class="col-12 m-auto hover">
							<a href="https://enem.inep.gov.br/" target="_blank"><img src="img/gabarito-enem.jpg" class="img-fluid" title="ENEM" alt=""></a>
						</div>
					</div>
				</div>
										
										
			</div>
		</div>
		
	<?php		
	include_once "footer.php";
	?>	
</div>
		
	</body>
</html>				