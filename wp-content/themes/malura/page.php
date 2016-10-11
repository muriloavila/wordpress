<?php get_header(); ?>
<main class="pagina-main">
	<article class="pagina">
		<h1 class="paina-titulo">
			<?= the_title(); ?>
		</h1>

		<?php
			if(have_posts()){
				while (have_posts()) {
					the_post();

			?>
			<div class="pagina-conteudo">
				<?= the_content(); ?>
			</div>
			<?php
				}
			}
		?>
		<?php if(is_page('contato')) { ?>
			<form>
				<div class="form-nome">
					<label for='form-nome'>Nome:</label>
					<input type="text" name="form-nome" id="form-nome" placeholder="Seu nome aqui">
				</div>

				<div class="form-email">
					<label for='form-email'>Email:</label>
					<input type="email" name="form-email" id='form-email' placeholder="email@exemplo.com.br">
				</div>

				<div class="form-mensagem">
					<label for='form-mensagem'>Mensagem:</label>
					<textarea id="form-mensagem" name="form-mensagem"></textarea>
				</div>

				<button type="submit">Enviar</button>
			</form>
		<?php } ?>
	</article>
</main>

<?php get_footer(); ?>