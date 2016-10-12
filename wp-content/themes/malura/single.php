<?php get_header();?>
	
	<main>
			
		<?php
			if(have_posts()){
				while (have_posts()) {
					the_post();

				?>
				<div class="container">
					<section class="chamada-principal">
						<?= the_title(); ?>
					</section>

					<section class="single-imovel-geral">
						<div class="single-imovel-descricao">
							<?= the_content(); ?>
						</div>
					</section>
					<span class="single-imovel-data">
						<?= the_date(); ?>
					</span>
				</div>
				
				<div class="single-imovel-thumbnail">
					<?= the_post_thumbnail(); ?>
				</div>
				<?php $imoveis_meta_data = get_post_meta($post->ID); ?>
				<dl>
					<dt>Preço:</dt>
					<dd><?= $imoveis_meta_data['preco_id'][0] ?></dd>
					<dt>Vagas:</dt>
					<dd><?= $imoveis_meta_data['vagas_id'][0] ?></dd>
					<dt>Banheiros:</dt>
					<dd><?= $imoveis_meta_data['banheiros_id'][0] ?></dd>
					<dt>Quartos:</dt>
					<dd><?= $imoveis_meta_data['quartos_id'][0] ?></dd>
				</dl>

				<?php
				}
			}
		?>
	</main>

<?php get_footer();?>