<?php get_header(); ?>
<div class="wrapper">
<?php 
if ( !is_page_template(get_option( 'page_on_front' )) ) {
$hero_bg = get_field('group', get_option( 'page_on_front' ))['hero-bg']['url'];
$hero_bg_micro = get_field('group', get_option( 'page_on_front' ))['hero-bg']['sizes']['micro-item'];
?>
	<section id="hero" 
	class="<?php echo get_field('group', get_option( 'page_on_front' ))['hero-image'] ? "hero-image" : ""; ?>" 
	<?php echo $hero_bg ? 'style="background-image: url('.$hero_bg.'), url('.$hero_bg_micro.')"' : '' ; ?>
	>
<?php }else{ ?>
	<section id="hero" 	class="hero-image">	
<?php } ?>
<img class="lazy hero_img" src="<?php echo THEME_IMAGES; ?>/img_hero.png" alt="">
		<div class="container">
		<div class="capsule"></div>
		<div class="podloj"></div>
		<div class="city_lift">
			<div class="lift_1"></div>
			<div class="lift_2"></div>
			<div class="lift_3"></div>
			<div class="lift_4"></div>
			<div class="lift_5"></div>
			<div class="lift_6"></div>
			<img class="lazy img_city" src="<?php echo THEME_IMAGES; ?>/city.png" alt="">
		</div>
		<div class="container-fluid">
			<div class="row">
				
					<div class="main">
						<div class="wrap">
							<div class="header list">
							<h1>
								<em><strong>Спасибо</strong></em>
								</h1>
							<h4>Ожидайте звонка менеджера</h4>
								
							</div>
							<div class="button">
								<button type="button" onclick="history.back();" class="btn"><span>Вернуться назад</span></button>
							</div>
						</div>
					
				</div>
			</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
</div>