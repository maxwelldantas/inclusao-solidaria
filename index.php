<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projeto - Inclusão Solidária</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Ir para o conteúdo principal</a></div>

    <!-- Navegação -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Marcando e alternando assim obtendo agrupados para uma melhor exibição móvel -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Inclusão Solidária</a>
            </div>

            <!-- Coletar os links de navegação, formulários e outros conteúdos para alternar -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Cadastro</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Consulta</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Sobre</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Cabeçalho -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.jpg" alt="">
                    <div class="intro-text">
                        <h1 class="name">Inclusão Solidária</h1>
                        <hr class="star-light">
                        <span class="skills">Tem como objetivo realizar o cadastro de vonlutários da área de Tecnologia da Informação, 
						para ministrar aulas sobre tecnologia para população carente.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Seção Cadastro de Voluntários -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Cadastro de Voluntários</h2>
                    <hr class="star-primary">
                </div>
            </div>
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form action="#" method="post" name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nome completo</label>
                                <input type="text" class="form-control" placeholder="Nome completo" id="name" name="name" required data-validation-required-message="Por favor entre com seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">CPF</label>
                                <input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf" required data-validation-required-message="Por favor entre com seu número de CPF.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Curso</label>                  
                                <p class="help-block text-danger"></p>
								<select class="form-control" placeholder="Lista de Cursos" id="curso" name="curso">
									<option value="">Lista de Cursos</option>
									<option value="1">Informática Básica</option>
									<option value="2">Informática Intermediária</option>
									<option value="3">Informática Avançada</option>
									<option value="4">Técnico em Informática</option>
									<option value="5">Montagem e Manutenção</option>
									<option value="6">Redes</option>
									<option value="7">Web Design</option>
									<option value="8">Photoshop</option>
									<option value="9">Lógica de Programação</option>
								</select>
                            </div>
                        </div>
						
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Endereço de email</label>
                                <input type="email" class="form-control" placeholder="Endereço de email" id="email" name="email" required data-validation-required-message="Por favor entre com seu email.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Telefone</label>
                                <input type="tel" class="form-control" placeholder="Telefone" id="phone" name="phone" required data-validation-required-message="Por favor entre com seu número de telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button  class="btn btn-success btn-lg" id="enviarCadastro">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Consulta -->
    <section class="success" id="about">
        <div class="container">
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Consulta de Cursos</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form action="#" method="post" name="sentMessage" id="contactForm2" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nome do Curso</label>
                                <input list="listaCursos" type="text" class="form-control" placeholder="Nome do Curso" id="nameCurso" name="nameCurso" required data-validation-required-message="Please enter your name.">
                                <datalist id="listaCursos"></datalist>
								<p class="help-block text-danger"></p>
                            </div>
                        </div>
						<br>
						<br>
						<br>
						<div class="row">
                            <div class="form-group col-xs-12">
                                <input class="btn btn-success btn-lg" id="resultadoConsulta" value="Consultar"></input>
                            </div>
                        </div>
					</form>
					<div class="form-group col-xs-12 floating-label-form-group controls" id="mostrarConsulta">
						
					</div>
				</div>
			</div>
        </div>
    </section>

    <!-- Rodapé -->
	<section id="contact">
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Localização</h3>
                        <p>Uberlândia
                            <br>Karaíba</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Redes Sociais</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Sobre Inclusão Solidária</h3>
                        <p>Inclusão Solidária é livre, para qualquer docente da area de Tecnologia com vontade de ensinar
						as pessoas sem condições de pagar cursos da area de informática.</p>
						<h4>
                        <a class="btn btn-success btn-lg" class="ancoraTopo" href="file:///C:/xampp/htdocs/index.php#page-top">Inclusão Solidária</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Inclusão Solidária 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
	
	<script type="text/javascript">
	
		$("#enviarCadastro").click(function(){
			$.ajax({
				url: "cadastro.php",
				context: this,
				data: $("#contactForm").serialize(),
				method: "POST",
				success: function(data){
					alert(data);
				}
			});
		});
		
		$("#resultadoConsulta").click(function(){
			$.ajax({
				url: "consulta.php?list=0",
				context: this,
				data: $("#contactForm2").serialize(),
				method: "POST",
				success: function(data){
					$("#mostrarConsulta").html(data);

				}
			});
		});
		
		
		$.ajax({
			url: "consulta.php?list=1",
			context: this,
			method: "POST",
			success: function(data){
				$("#listaCursos").html(data);
			}
		});
		
	</script>
	
</body>

</html>
