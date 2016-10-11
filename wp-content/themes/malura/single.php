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

				<?php
				}
			}
		?>
	</main>

<?php get_footer();?>