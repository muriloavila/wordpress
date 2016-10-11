

<?php 
//COMO MANDAR CSS ESPECIFICO:
/*
	CRIE UMA VARIAVEL CHAMADA $CSS QUE RECEBE O NOME DO ARQUIVO CSS DA PAGINA
	SUBSTITUA O GET_HEADER POR REQUIRE_ONCE PARA ELE ACEITAR A VARIAVEL DE FORA
	ADICIONE UM LINK-REL DE CSS NO HEADER PASSANDO COMO NOME DO ARQUIVO A VARIAVEL $CSS
*/
get_header(); ?>
<main class="home-main">
	<div class="container">


		<?php 
			$args = array('post_type' => 'imovel');
			
			$query = new WP_Query( $args );
			
		?>

		<?php if( $query->have_posts() ) { ?>
			<ul class="imoveis-listagem">
			<?php while( $query -> have_posts() ) {
					$query->the_post(); ?>

					<li class="imoveis-listagem-item">
				<a href="<? the_permalink() ?>">
						<?php the_post_thumbnail(); ?>

						<h2><?php the_title(); ?></h2>

						<p><?php the_content(); ?></p>
				</a>	
					</li>

			<?php } ?>
			</ul>
		<?php	} ?>
	</div>
</main>


<?php get_footer(); ?>