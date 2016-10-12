

<?php 
	$queryTaxonomy = array_key_exists('taxonomy', $_GET);

	if($queryTaxonomy && $_GET['taxonomy'] === ''){
		wp_redirect(home_url());
	}
//COMO MANDAR CSS ESPECIFICO:
/*
	CRIE UMA VARIAVEL CHAMADA $CSS QUE RECEBE O NOME DO ARQUIVO CSS DA PAGINA
	SUBSTITUA O GET_HEADER POR REQUIRE_ONCE PARA ELE ACEITAR A VARIAVEL DE FORA
	ADICIONE UM LINK-REL DE CSS NO HEADER PASSANDO COMO NOME DO ARQUIVO A VARIAVEL $CSS
*/
get_header(); ?>
<main class="home-main">
	<div class="container">
	<?php $taxonomias = get_terms('localizacao'); ?>
		<form>
			<select name='taxonomy'>
				<option value=''>Todos os Locais</option>
				<?php foreach ($taxonomias as $taxonomia) { ?>
					<option value='<?=$taxonomia->slug?>'><?= $taxonomia->name ?></option>
				<?php } ?>
			</select>
			<button type="submit">Buscar</button>
		</form>


		<?php 
			if($queryTaxonomy){
				$taxQuery = array(
									array(
											'taxonomy' => 'localizacao',
											'field' => 'slug',
											'terms' => $_GET['taxonomy']
										)
								);
			}
			$args = array(
					'post_type' => 'imovel',
					'tax_query' => $taxQuery
				);
			
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