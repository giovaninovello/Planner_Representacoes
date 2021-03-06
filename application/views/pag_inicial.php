<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>Planner Representações Comerciais</title>
	<link rel="icon" href="<?php echo base_url('assets/favicon.png')?>" type="image/png">
	<link href="<?php echo base_url('assets/css/bootstrap.min.css"')?> rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/style.css" rel="stylesheet"')?> type="text/css">
	<link href="<?php echo base_url('assets/css/font-awesome.css" rel="stylesheet"')?> type="text/css">
	<link href="<?php echo base_url('assets/css/animate.css" rel="stylesheet"')?> type="text/css">

	<!--[if lt IE 9]>
	<script src="/assets/js/respond-1.1.0.min.js"></script>
	<script src="/assets/js/html5shiv.js"></script>
	<script src="/assets/js/html5element.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
	<![endif]-->

</head>
<body>
<?php if ($this->session->flashdata('success') == TRUE): ?>
	<div class="alert alert-success" ><?= $this->session->flashdata('success'); ?></div>
	<script>alert('Sua mensagem foi enviada com sucesso , em breve estaremos retornando')</script>
<?php endif; ?>

<?php if ($this->session->flashdata('error') == TRUE): ?>
	<div class="alert alert-warning"><?= $this->session->flashdata('error'); ?></div>
<?php endif; ?>
<!--Header_section-->
<header id="header_wrapper">
	<div class="container">
		<div class="header_box">
			<!--<div class="logo"><a href="#"><img src="<?php echo base_url('assets/img/logo.png')?>" alt="logo"></a></div>!-->
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				</div>
				<div id="main-nav" class="collapse navbar-collapse navStyle">
					<ul class="nav navbar-nav" id="mainNav">
						<li class="active"><a href="#myCarousel" class="scroll-link">Home</a></li>
						<li><a href="#aboutUs" class="scroll-link">A Empresa</a></li>
						<li><a href="#service" class="scroll-link">Serviços</a></li>
						<li><a href="#clients" class="scroll-link">Parcerias</a></li>
						<li><a href="#contact" class="scroll-link">Contato</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<!--Header_section-->




<div class="carousel slide" id="myCarousel">
    <div class="carousel-inner">
        <div class="item active">
            <div class="bannerImage">
                <!--Hero_Section-->
                <section id="hero_section" class="top_cont_outer">
                    <div class="hero_wrapper">
                        <div class="container">
                            <div class="hero_section">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-7">
                                        <div class="top_left_cont zoomIn wow animated">
                                            <h2> <strong>Planner Representações Comerciais</strong></h2>
                                            <p></p>
                                            <a href="#service" class="read_more2">Leia Mais</a> </div>
                                    </div>
                                    <div class="col-lg-7 col-sm-5">
                                        <img src="<?php echo base_url('assets/img/main_device_image.png"')?> class="" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Hero_Section-->
            </div>
        </div><!-- /Slide1 -->
        <div class="item">
            <div class="bannerImage">
                <!--Hero_Section-->
                <section id="hero_section" class="top_cont_outer">
                    <div class="hero_wrapper">
                        <div class="container">
                            <div class="hero_section">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-7">
                                        <div class="top_left_cont zoomIn wow animated">
                                            <h2> <strong>Planner Representações Comerciais</strong></h2>
                                            <p></p>
                                            <a href="#service" class="read_more2">Leia Mais</a> </div>
                                    </div>
                                    <div class="col-lg-7 col-sm-5">
                                        <img src="<?php echo base_url('assets/img/main_device_image.png"')?> class="" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Hero_Section-->
            </div>
        </div><!-- /Slide2 -->
        <div class="item">

            <div class="bannerImage">
                <!--Hero_Section-->
                <section id="hero_section" class="top_cont_outer">
                    <div class="hero_wrapper">
                        <div class="container">
                            <div class="hero_section">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-7">
                                        <div class="top_left_cont zoomIn wow animated">
                                            <h2> <strong>Planner Representações Comerciais</strong></h2>
                                            <p></p>
                                            <a href="#service" class="read_more2">Leia Mais</a> </div>
                                    </div>
                                    <div class="col-lg-7 col-sm-5">
                                        <img src="<?php echo base_url('assets/img/main_device_image.png"')?> class="" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Hero_Section-->
            </div>
        </div><!-- /Slide2 -->
    </div>


        <section id="aboutUs"><!--Aboutus-->
	<div class="inner_wrapper">
		<div class="container">
			<h2>Empresa</h2>
			<div class="inner_section">
					<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="<?php echo base_url('assets/img/about-img.jpg"')?> class="img-circle delay-03s animated wow zoomIn" alt=""></div>
					<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
						<div class=" delay-01s animated fadeInDown wow animated">
							<h3>Planner Representações Comerciais</h3><br/>
							<p>Fundada em 2006 a Planner Representações Comerciais, deu inicio as suas atividades atendendo ao mercado de Analises Clínicas, intermediando contratos de prestações de serviços para a realização de exames clínicos  de alta complexidade,  tendo como representada há 11 anos uma das maiores empresas do mercado de Analises clínicas do mundo.</p> <br>
							<p>Com atuação também no mercado farmacêutico, adquirimos larga experiência na divulgação e vendas nos canais:  Pharma, Hospitalares e Distribuidores, representando grande empresa farmacêutica Multinacional.</p>

							.</p>Hoje, a Planner, sediada em Florianópolis, com atuação em todo território de Santa Catarina, expande suas atividades criando a divisão para produtos eletrônicos, através da parceria com empresas do setor e com a direção de profissional altamente capacitado e reconhecido nos canais de varejo e distribuição.<br/>
							<p></p><br>
							<p>A planner Representações Comerciais, oferece aos seus  parceiros, uma equipe treinada e preparada para atingir os objetivos esperados de forma planejada e prezando pela imagem da empresa parceira. </p>
						</div>
						<div class="work_bottom"> <span>Quer saber mais..</span> <a href="#contact" class="contact_btn">Fale conosco</a> </div>
					</div>

			</div>
		</div>
	</div>
</section>
<!--Aboutus-->


<!--Service-->
<section  id="service">
	<div class="container">
		<h2>Servicos</h2>
		<div class="service_wrapper">
			<div class="row">
				<div class="col-lg-3">
					<div class="service_block">
						<div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-ambulance"></i></span> </div>
						<h3 class="animated fadeInUp wow">Laboratórios de Análises clínicas</h3>
						<p class="animated fadeInDown wow">Representação comercial a Rede de Laboratório de Análises Clinicas.</p>
					</div>
				</div>
				<div class="col-lg-3 borderLeft">
					<div class="service_block">
						<div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-hospital-o"></i></span> </div>
						<h3 class="animated fadeInUp wow">Farmácias e Hospitais</h3>
						<p class="animated fadeInDown wow">Representação comercial nos canais Pharma, hospitais e Distribuidores.</p>
					</div>
				</div>
				<div class="col-lg-3 borderLeft">
					<div class="service_block">
						<div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-camera-retro"></i></span> </div>
						<h3 class="animated fadeInUp wow">Produtos Eletrônicos</h3>
						<p class="animated fadeInDown wow">Representação comercial aos canais de varejo e distribuição.</p>
					</div>
				</div>
				<div class="col-lg-3 borderLeft">
					<div class="service_block">
						<div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-recycle"></i></span> </div>
						<h3 class="animated fadeInUp wow">Produtos de Limpeza Sustentáveis</h3>
						<p class="animated fadeInDown wow">Distribuidor Master independente.</p>
						<p>Venda Direta de produtos.</p>
						<p>Plano de Negócios para distribuidores independentes.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!--Service-->

<section class="page_section" id="clients"><!--page_section-->
	<h2>Parcerias</h2>
	<!--page_section-->
	<div class="client_logos"><!--client_logos-->
		<div class="container">
			<ul class="fadeInRight animated wow">
				<a href="http://www.mundoirys.com.br" style="text-decoration: none; color: white" onMouseOver="this.style.textDecoration='none';" onMouseOut="this.style.textDecoration='none';" >
					<h1><b>Mundo Irys</b></h1></a>
				<a href="http://www.oneletronicos.com.br" style="text-decoration: none; color: white" onMouseOver="this.style.textDecoration='none';" onMouseOut="this.style.textDecoration='none';" >
					<h1><b>On Eletronicos</b></h1></a>
			</ul>
		</div>
	</div>
</section>
<!--client_logos-->


<!--Footer-->
<footer class="footer_wrapper" id="contact">
	<div class="container">
		<section class="page_section contact" id="contact">
			<div class="contact_section">
				<h2>Contato</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 wow fadeInLeft">
					<div class="contact_info">
						<div class="detail">
							<h4>Planner Representações</h4>
							<p>RUA SOUZA DUTRA 145 SALA 612</p>
							<p>BAIRRO ESTREITO</p>
							<p>FLORIANOPOLIS SC</p>
                            <p>CEP: 99560-000</p>
						</div>
						<div class="detail">
							<h4>FONE :</h4>
							<p>48- 3091-2929</p>

							<h4>CEL :</h4>
							<p>CEL    :  48- 99944-4664</p>

						</div>
						<div class="detail">

						</div>
					</div>




				</div>
				<div class="col-lg-8 wow fadeInLeft delay-06s">


					<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->

					<form method="POST" action="<?=base_url('enviar-email')?>" id="modal">
						<div class="control-group">
							<div class="controls">
								<input type="text" class="form-control input-text"
									   placeholder="Nome completo"  name="nome" required
									   data-validation-required-message="Por favor entre com seu nome" />

								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<input type="email" class="form-control input-text" placeholder="Email"
									   name="email" required
									   data-validation-required-message="Por favor entre com um e-mail valido" />
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<input type="text" class="form-control input-text" placeholder="Assunto"
									   name="assunto" required
								/>
							</div>
						</div>


						<div class="control-group">
							<div class="controls">
						<textarea rows="10" cols="100" class="form-control input-text"
								  placeholder="Mensagem" name="mensagem" required
								  data-validation-required-message="Por favor entre com sua mensagem" minlength="5"
								  data-validation-minlength-message="Min 5 characters"
								  maxlength="999" style="resize:none">

						</textarea>
							</div>
						</div>


						<div id="success"> </div> <!-- For success/fail messages -->
						<button type="submit" class="btn btn-primary input-btn pull-right"  id="btn">Enviar</button><br />

					</form>



				</div>
			</div>
		</section>
	</div>
	<div class="container">
		<div class="footer_bottom"><span>Copyright © 2016,    by <a href="">Digitec Sistemas</a>. </span> </div>
	</div>
</footer>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.0.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-scrolltofixed.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nav.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.isotope.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/wow.js')?>"></script>
<script src="<?php echo base_url('assets/contact/jqBootstrapValidation.js')?>"></script>
<script src="<?php echo base_url('assets/contact/contact_me.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js')?>"></script>
<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 6000
        })
    });
</script>



</body>
</html>