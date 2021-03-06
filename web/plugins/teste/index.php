<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<title>2Ed Soluções Web</title>
<meta name="description" content="2Ed Soluções Web">
<meta name="author" content="htmlcoder.me">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Font Awesome CSS -->
<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Plugins -->
<link href="css/animations.css" rel="stylesheet">

<!-- Worthy core CSS file -->
<link href="css/style.css" rel="stylesheet">

<!-- Custom css -->
<link href="css/custom.css" rel="stylesheet">

<!-- Alterados css -->
<link href="css/estilos.css" rel="stylesheet">
</head>

<body class="no-trans">
<!-- scrollToTop --> 
<!-- ================ -->
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

<!-- header start --> 
<!-- ================ -->
<header class="header fixed clearfix navbar navbar-fixed-top">
  <div class="container">
    <div class="row">
      <div class="col-md-4"> 
        
        <!-- header-left start --> 
        <!-- ================ -->
        <div class="header-left clearfix"> 
          
          <!-- logo -->
          <div class="logo smooth-scroll"> <a href="#banner"><img id="logo" src="images/logo.png'" alt="Worthy"></a> </div>
          
          <!-- name-and-slogan -->
          <div class="site-name-and-slogan smooth-scroll">
            <div class="site-name"> <img id="logo" src="images/logo2.png'" alt="Worthy"> </div>
          </div>
        </div>
        <!-- header-left end --> 
        
      </div>
      <div class="col-md-8"> 
        
        <!-- header-right start --> 
        <!-- ================ -->
        <div class="header-right clearfix"> 
          
          <!-- main-navigation start --> 
          <!-- ================ -->
          <div class="main-navigation animated"> 
            
            <!-- navbar start --> 
            <!-- ================ -->
            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid"> 
                
                <!-- Toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">mobile</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse scrollspy smooth-scroll " id="navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#banner">Inicio</a></li>
                    <li><a href="#about">Site Fácil</a></li>
                    <li><a href="#services">Projétos</a></li>
                    <li><a href="#portfolio">Sites</a></li>
                    <li><a href="#clients">Clientes</a></li>
                    <li><a href="#contact">Contato</a></li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- navbar end --> 
            
          </div>
          <!-- main-navigation end --> 
          
        </div>
        <!-- header-right end --> 
        
      </div>
    </div>
  </div>
</header>
<!-- header end --> 

<!-- banner start -->
<div id="banner" class="banner">
  <div class="banner-image hidden-mb"> </div>
  <!-- 128 -->
  
  <div class="banner-caption">
    <div class="container">
      <div class="row">
        <div class=" banner-text col-ld-2 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
          <h1 class="lead text-center" >Soluções <span>Web</span></h1>
          <p class="lead hidden-cel text-center"> Entendemos que para a maioria das empresas ou organizações, o seu site é a principal ferramenta de comunicação 								com o seu público ou clientela. Para esse efeito, acreditamos na produção de websites que efetivamente vai 
            eduucar, promover e informar. </p>
        </div>
        <!-- 134  --> 
      </div>
      <!-- 133 --> 
    </div>
    <!-- 132 --> 
  </div>
  <!-- 131 --> 
</div>
<!-- 126  --> 
<!-- banner end --> 

<!-- section start --> 
<!-- ================ -->
<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 id="about" class="title text-center">Simples <span>Demais</span></h1>
        <p class="lead text-center">A sua idéia precisa de um ótimo website. E é surpreendentemente fácil criar o seu.</p>
        <div class="space"></div>
        <div class="row">
          <div class="col-md-6"> <?= Html::img('site/images/section-image-2.png',['alt'=>'']);?>
            <div class="space"></div>
          </div>
          <div class="col-md-6">
            <p>Não basta ter um <b>Website</b> publicado na internet, ele tem que justificar a sua existência. É necessário ter conhecimentos de conceito estrutural e ser bem refinado em sua programação. 
			</p>
            <p>Um <b>Website</b> atualizado demanda custo e tempo. Então criamos um sistema que já pré-estabelece a estrutura e o desenvolvimento do tema da sua preferência. Onde você só terá o trabalho de atualizar as informações, definir a sua colorização e inserir novos objetos. 
			</p>
            <ul class="list-unstyled">
              <li><i class="fa fa-caret-right pr-10 text-colored"></i> Estrutura de Linguagem <b>HTML5</b></li>
              <li><i class="fa fa-caret-right pr-10 text-colored"></i> Responsive Web Design</li>
              <li><i class="fa fa-caret-right pr-10 text-colored"></i> Estilos no Padrão <b>CSS3</b></li>
              <li><i class="fa fa-caret-right pr-10 text-colored"></i> Layouts Estruturados Com <b>Bootstap</b></li>
              <li><i class="fa fa-caret-right pr-10 text-colored"></i> Efeitos Realizado através do <b>Jquery</b></li>			  
              <li><i class="fa fa-caret-right pr-10 text-colored"></i> Técnicas de <b>SEO</b></li>
            </ul>
          </div>
        </div>
        <div class="space"></div>
        <h2>O Que faz ser tão Simples?</h2>
        <div class="row">
          <div class="col-md-6">
            <p>Todos nós que temos a finalidade de promover os nossos projetos, compreendemos a importância de ter um Website. Entendemos também que por conta do avanço da tecnologia o nível de exigência dos websites também tem crescido. Não basta mais ter um simples website, ele precisa transmitir com clareza a sua mensagem.  Quando está desatualizado; mal projetado e sem respostas imediatas não causam atrativos e tendem a decepcionar o seu público alvo.</p>
            <p>Entendemos que nem todo mundo tem tempo hábil ou conhecimento suficiente pra criar o seu próprio Website, então criamos um sistema que praticamente faz isso por você e o seu único trabalho será colocar ele do seu jeito.</p>
            <p>Nossa proposta é te oferecer uma solução barata e bem tranquilo de resolver os seus problemas com seu Website. Por apenas <b>R$ 80,00 Mensais</b> você terá disponível o seu site profissional + Domínio e hospedagem incluída. Não se preocupe venha experimentar o nosso plano de <b>“Test-Drive” Grátis por 2 meses</b>  e só cobraremos mediante a sua satisfação. </p>
          </div>
          <div class="col-md-6">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><b>Passo 1:</b> Cadastrar Aqui  </a> </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <div class="col-sm-10">
          <div class="footer-content">
            <form role="form" id="cadastro">
              <div class="form-group has-feedback">
                <label class="sr-only" for="name2">Nome</label>
                <input type="text" class="form-control" id="formname" placeholder="Nome" name="nome" required>
                <i class="fa fa-user form-control-feedback"></i> </div>
              
              <div class="form-group has-feedback">
                <label class="sr-only" for="email2">Endereço de E-Mail</label>
                <input type="email" class="form-control" id="formemail" placeholder="E-Mail" name="email" required>
                <i class="fa fa-envelope form-control-feedback"></i> </div>
                
                <div class="form-group has-feedback">
                <label class="sr-only" for="email2">Seu Projeto</label>
                <input type="text" class="form-control" id="formlogin" placeholder="Nome do Projeto " name="projeto" required>
                <i class="fa fa-globe form-control-feedback"></i> </div>
                
                <div class="form-group has-feedback">
                <label class="sr-only" for="email2">Senha</label>
                <input type="password" class="form-control" id="formsenha" placeholder="Senha" name="senha" required>
                <i class="fa fa-key form-control-feedback"></i> </div>
                
                <div class="form-group has-feedback">
                <label class="sr-only" for="email2">Senha</label>
                <input type="password" class="form-control" id="formsenhafb" placeholder="Confirmar Senha" name="senhadb" required>
                <i class="fa fa-key form-control-feedback"></i> </div>
                
              
              <input type="submit" value="Cadastrar" class="btn btn-default">
            </form>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><b>Passo 2:</b> Logar no Sistema  </a> </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body"> 
                  <div class="col-sm-10">
          <div class="footer-content">
            <form role="form" id="logar">
             
              <div class="form-group has-feedback">
                <label class="sr-only" for="email2">Endereço de E-Mail</label>
                <input type="email" class="form-control" id="formemail" placeholder="E-Mail" name="email2" required>
                <i class="fa fa-envelope form-control-feedback"></i> </div>
                
                   
                <div class="form-group has-feedback">
                <label class="sr-only" for="senha2">Senha</label>
                <input type="password" class="form-control" id="formsenha" placeholder="Senha" name="email2" required>
                <i class="fa fa-key form-control-feedback"></i> </div>           
              
              <input type="submit" value="Logar" class="btn btn-default">
            </form>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><b>Passo 3:</b> Regristro / Hospedagem  </a> </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body"> Richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- section end --> 

<!-- section start --> 
<!-- ================ -->
<div class="section translucent-bg bg-image-1 blue">
  <div class="container object-non-visible" data-animation-effect="fadeIn">
    <h1 id="services"  class="text-center title">Worthy Services</h1>
    <div class="space"></div>
    <div class="row">
      <div class="col-sm-6">
        <div class="media">
          <div class="media-body text-right">
            <h4 class="media-heading">Service 1</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
          </div>
          <div class="media-right"> <i class="fa fa-cog"></i> </div>
        </div>
        <div class="media">
          <div class="media-body text-right">
            <h4 class="media-heading">Service 2</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
          </div>
          <div class="media-right"> <i class="fa fa-check"></i> </div>
        </div>
        <div class="media">
          <div class="media-body text-right">
            <h4 class="media-heading">Service 3</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
          </div>
          <div class="media-right"> <i class="fa fa-desktop"></i> </div>
        </div>
        <div class="media">
          <div class="media-body text-right">
            <h4 class="media-heading">Service 4</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
          </div>
          <div class="media-right"> <i class="fa fa-users"></i> </div>
        </div>
      </div>
      <div class="space visible-xs"></div>
      <div class="col-sm-6">
        <div class="media">
          <div class="media-left"> <i class="fa fa-leaf"></i> </div>
          <div class="media-body">
            <h4 class="media-heading">Service 5</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left"> <i class="fa fa-area-chart"></i> </div>
          <div class="media-body">
            <h4 class="media-heading">Service 6</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left"> <i class="fa fa-child"></i> </div>
          <div class="media-body">
            <h4 class="media-heading">Service 7</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left"> <i class="fa fa-codepen"></i> </div>
          <div class="media-body">
            <h4 class="media-heading">Service 8</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- section end --> 

<!-- section start --> 
<!-- ================ -->
<div class="default-bg space blue">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center">Let's Work Together!</h1>
      </div>
    </div>
  </div>
</div>
<!-- section end --> 

<!-- section start --> 
<!-- ================ -->
<div class="section">
  <div class="container">
    <h1 class="text-center title" id="portfolio">Portfolio</h1>
    <div class="separator"></div>
    <p class="lead text-center">Lorem ipsum dolor sit amet laudantium molestias similique.<br>
      Quisquam incidunt ut laboriosam.</p>
    <br>
    <div class="row object-non-visible" data-animation-effect="fadeIn">
      <div class="col-md-12"> 
        
        <!-- isotope filters start -->
        <div class="filters text-center">
          <ul class="nav nav-pills">
            <li class="active"><a href="#" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".web-design">Web design</a></li>
            <li><a href="#" data-filter=".app-development">App development</a></li>
            <li><a href="#" data-filter=".site-building">Site building</a></li>
          </ul>
        </div>
        <!-- isotope filters end --> 
        
        <!-- portfolio items start -->
        <div class="isotope-container row grid-space-20">
          <div class="col-sm-6 col-md-3 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-1.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-1"> <i class="fa fa-search-plus"></i> <span>Web Design</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-1-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-1.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item app-development">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-2.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-2"> <i class="fa fa-search-plus"></i> <span>App Development</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-2-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-2.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-3.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-3"> <i class="fa fa-search-plus"></i> <span>Web Design</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-3-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-3.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item site-building">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-4.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-4"> <i class="fa fa-search-plus"></i> <span>Site Building</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-4-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-4.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item app-development">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-5.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-5"> <i class="fa fa-search-plus"></i> <span>App Development</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-5-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-5.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-6.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-6"> <i class="fa fa-search-plus"></i> <span>Web Design</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-6-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-6.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item site-building">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-7.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-7"> <i class="fa fa-search-plus"></i> <span>Site Building</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-7">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-7-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-7.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-8.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-8"> <i class="fa fa-search-plus"></i> <span>Web Design</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-8">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-8-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-8.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-9.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-9"> <i class="fa fa-search-plus"></i> <span>Web Design</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-9">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-9" tabindex="-1" role="dialog" aria-labelledby="project-9-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-9-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-9.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item site-building">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-10.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-10"> <i class="fa fa-search-plus"></i> <span>Site Building</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-10">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-10" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-10-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-10.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item web-design">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-11.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-11"> <i class="fa fa-search-plus"></i> <span>Web Design</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-11">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-11" tabindex="-1" role="dialog" aria-labelledby="project-11-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-11-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-11.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
          <div class="col-sm-6 col-md-3 isotope-item app-development">
            <div class="image-box">
              <div class="overlay-container"> <?= Html::img('site/images/portfolio-12.jpg',['alt'=>'']);?> <a class="overlay" data-toggle="modal" data-target="#project-12"> <i class="fa fa-search-plus"></i> <span>App Development</span> </a> </div>
              <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-12">Project Title</a> </div>
            <!-- Modal -->
            <div class="modal fade" id="project-12" tabindex="-1" role="dialog" aria-labelledby="project-12-label" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="project-12-label">Project Title</h4>
                  </div>
                  <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                      </div>
                      <div class="col-md-6"> <?= Html::img('site/images/portfolio-12.jpg',['alt'=>'']);?> </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal end --> 
          </div>
        </div>
        <!-- portfolio items end --> 
        
      </div>
    </div>
  </div>
</div>
<!-- section end --> 

<!-- section start --> 
<!-- ================ -->
<div class="section translucent-bg bg-image-2 pb-clear">
  <div class="container object-non-visible" data-animation-effect="fadeIn">
    <h1 id="clients" class="title text-center">Clients</h1>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-4">
        <div class="media testimonial">
          <div class="media-left"> <?= Html::img('site/images/testimonial-1.png',['alt'=>'']);?> </div>
          <div class="media-body">
            <h3 class="media-heading">You are Amazing!</h3>
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo.</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="media testimonial">
          <div class="media-left"> <?= Html::img('site/images/testimonial-2.png',['alt'=>'']);?> </div>
          <div class="media-body">
            <h3 class="media-heading">Yeah!</h3>
            <blockquote>
              <p>Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus.</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="media testimonial">
          <div class="media-left"> <?= Html::img('site/images/testimonial-3.png',['alt'=>'']);?> </div>
          <div class="media-body">
            <h3 class="media-heading">Thank You!</h3>
            <blockquote>
              <p>Aperiam consequatur quo quis exercitationem reprehenderit suscipit iste placeat.</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="media testimonial">
          <div class="media-left"> <?= Html::img('site/images/testimonial-2.png',['alt'=>'']);?> </div>
          <div class="media-body">
            <h3 class="media-heading">Thank You!</h3>
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo.</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="media testimonial">
          <div class="media-left"> <?= Html::img('site/images/testimonial-3.png',['alt'=>'']);?> </div>
          <div class="media-body">
            <h3 class="media-heading">Amazing!</h3>
            <blockquote>
              <p>Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus.</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="media testimonial">
          <div class="media-left"> <?= Html::img('site/images/testimonial-1.png',['alt'=>'']);?> </div>
          <div class="media-body">
            <h3 class="media-heading">Best!</h3>
            <blockquote>
              <p>Aperiam consequatur quo quis exercitationem reprehenderit suscipit iste placeat.</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section start --> 
  <!-- ================ -->
  <div class="translucent-bg blue">
    <div class="container">
      <div class="list-horizontal">
        <div class="row">
          <div class="col-xs-2">
            <div class="list-horizontal-item"> <?= Html::img('site/images/client-1.png',['alt'=>'client']);?> </div>
          </div>
          <div class="col-xs-2">
            <div class="list-horizontal-item"> <?= Html::img('site/images/client-2.png',['alt'=>'client']);?></div>
          </div>
          <div class="col-xs-2">
            <div class="list-horizontal-item"> <?= Html::img('site/images/client-3.png',['alt'=>'client']);?> </div>
          </div>
          <div class="col-xs-2">
            <div class="list-horizontal-item"> <?= Html::img('site/images/client-4.png',['alt'=>'client']);?> </div>
          </div>
          <div class="col-xs-2">
            <div class="list-horizontal-item"> <?= Html::img('site/images/client-5.png',['alt'=>'client']);?> </div>
          </div>
          <div class="col-xs-2">
            <div class="list-horizontal-item"> <?= Html::img('site/images/client-6.png',['alt'=>'client']);?> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section end --> 
</div>
<!-- section end --> 

<!-- section start --> 
<!-- ================ -->
<div class="default-bg space">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center">10000+ Happy Clients!</h1>
      </div>
    </div>
  </div>
</div>
<!-- section end --> 

<!-- footer start --> 
<!-- ================ -->
<footer id="footer"> 
  
  <!-- .footer start --> 
  <!-- ================ -->
  <div class="footer section">
    <div class="container">
      <h1 class="title text-center" id="contact">Contact Us</h1>
      <div class="space"></div>
      <div class="row">
        <div class="col-sm-6">
          <div class="footer-content">
            <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nam magnam natus tempora cumque, aliquam deleniti voluptatibus voluptas. Repellat vel, et itaque commodi iste ab, laudantium voluptas deserunt nobis.</p>
            <ul class="list-icons">
              <li><i class="fa fa-map-marker pr-10"></i> One infinity loop, 54100</li>
              <li><i class="fa fa-phone pr-10"></i> +00 1234567890</li>
              <li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li>
              <li><i class="fa fa-envelope-o pr-10"></i> your@email.com</li>
            </ul>
            <ul class="social-links">
              <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
              <li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
              <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
              <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
              <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
              <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
              <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
              <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="footer-content">
            <form role="form" id="footer-form">
              <div class="form-group has-feedback">
                <label class="sr-only" for="name2">Name</label>
                <input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
                <i class="fa fa-user form-control-feedback"></i> </div>
              <div class="form-group has-feedback">
                <label class="sr-only" for="email2">Email address</label>
                <input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
                <i class="fa fa-envelope form-control-feedback"></i> </div>
              <div class="form-group has-feedback">
                <label class="sr-only" for="message2">Message</label>
                <textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
                <i class="fa fa-pencil form-control-feedback"></i> </div>
              <input type="submit" value="Send" class="btn btn-default">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- .footer end --> 
  
  <!-- .subfooter start --> 
  <!-- ================ -->
  <div class="subfooter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Copyright © 2014 Worthy by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- .subfooter end --> 
  
</footer>
<!-- footer end --> 

<a id="nav-menu-up" class="smooth-scroll" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== --> 
<!-- Jquery and Bootstap core js files --> 
<script type="text/javascript" src="plugins/jquery.min.js"></script> 
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 

<!-- Modernizr javascript --> 
<script type="text/javascript" src="plugins/modernizr.js"></script> 

<!-- Isotope javascript --> 
<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script> 

<!-- Backstretch javascript --> 
<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script> 

<!-- Appear javascript --> 
<script type="text/javascript" src="plugins/jquery.appear.js"></script> 

<!-- Initialization of Plugins --> 
<script type="text/javascript" src="js/template.js"></script> 

<!-- Custom Scripts --> 
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>