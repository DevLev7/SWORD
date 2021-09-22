<?php get_header(); ?>
	<div class="wrapper">
	<section id="hero" >
	<img class="lazy hero_img" src="<?php echo THEME_IMAGES; ?>/img_hero.png" alt="">
	<div class="container">
	<img class="lazy img_error" src="<?php echo THEME_IMAGES; ?>/error.png" alt="">
		<div class="container-fluid">
			<div class="row">
			
					<div class="main">
						<div class="wrap">
							<div class="header list">
								<h4>Ой, что-то пошло не так.</h4>
								<h1>
								<em><strong>404</strong></em>
								</h1>
							</div>
							
							<div class="button">
								 <a href="<?php echo home_url().'/';?>" class="btn"><span>Перейти на главную</span></a>
							</div>
						</div>
				
				</div>
			
			</div>
		</div>
		</div>
	</section>

<?php get_footer(); ?>
</div>