<?php
//	Template Name: Menu da Semana
?>

<?php get_header(); ?>
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="menu-item grid-8">
				<h2><?php the_field('tipo_de_carne_1') ?></h2>
				<ul>
					<li>
						<span><sup>R$</sup><?php the_field('valor_do_prato_1') ?></span>
						<div>
							<h3><?php the_field('nome_do_prato_1') ?></h3>
							<p><?php the_field('descricao_do_prato_1') ?></p>
						</div>
					</li>
					<li>
						<span><sup>R$</sup><?php the_field('valor_do_prato_2') ?></span>
						<div>
							<h3><?php the_field('nome_do_prato_2') ?></h3>
							<p><?php the_field('descricao_do_prato_2') ?></p>
						</div>
					</li>
					<li>
						<span><sup>R$</sup><?php the_field('valor_do_prato_3') ?></span>
						<div>
							<h3><?php the_field('nome_do_prato_3') ?></h3>
							<p><?php the_field('descricao_do_prato_3') ?></p>
						</div>
					</li>
				</ul>
			</div>

			<div class="menu-item grid-8">
				<h2><?php the_field('tipo_de_carne_2') ?></h2>
				<ul>
					<li>
						<span><sup>R$</sup><?php the_field('valor_do_prato_4') ?></span>
						<div>
							<h3><?php the_field('nome_do_prato_4') ?></h3>
							<p><?php the_field('descricao_do_prato_4') ?></p>
						</div>
					</li>
					<li>
						<span><sup>R$</sup><?php the_field('valor_do_prato_5') ?></span>
						<div>
							<h3><?php the_field('nome_do_prato_5') ?></h3>
							<p><?php the_field('descricao_do_prato_5') ?></p>
						</div>
					</li>
					<li>
						<span><sup>R$</sup><?php the_field('valor_do_prato_6') ?></span>
						<div>
							<h3><?php the_field('nome_do_prato_6') ?></h3>
							<p><?php the_field('descricao_do_prato_6') ?></p>
						</div>
					</li>
				</ul>
			</div>

		</section>
	<?php endwhile; else: endif ?>
<?php get_footer(); ?>