<?php get_header(); ?>

<!-- Banner principal -->
<div class="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- bolinhas indicadores -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	  </ol>

	  <!-- conteúdo dos slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active banner-destaques">
	      <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/slide-1.jpg" alt="..." width="100%"/>
	      <div class="carousel-caption">
	      <h2>Destaques do momento</h2>
	      </div>
	    </div>
	  </div>

	  <!-- Setas de controle -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<!-- Fim Banner principal -->


<?php get_footer(); ?>