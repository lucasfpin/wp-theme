<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
	<title><?php wp_title(); ?></title>

<?php wp_head(); ?>
</head>
<body>
	<header class="site-header">
		<div class="content">
			<div class="topo">
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/logo-seduc.png" alt="logo seduce">
					</div>
					<div class="col-sm-4 col-md-4">
						form
					</div>
					<div class="col-sm-4 col-md-4 topo-info">
						<h4>Secretaria de Estado de Educação, Cultura e Esporte</h4>
						<a href=""><img src="<?php bloginfo('template_directory');?>/img/info-icon.png" alt="acesso informação">Acesso a informação</a>
						<a href=""><img src="<?php bloginfo('template_directory');?>/img/mail-icon.png" alt="icone email">webmail</a>
					</div>
				</div>
			</div>
		</div>
			
		<nav class="navbar">
			<div class="content">
	      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) );?>
	    </div>
  	</nav>

  	</div>
	</header>