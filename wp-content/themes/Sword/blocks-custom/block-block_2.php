<div class="block_title"   id="block_2" >
<img class="lazy bl2_img1" src="<?php echo THEME_IMAGES; ?>/bl2_img1.png" alt="">
<img class="lazy bl2_img2" src="<?php echo THEME_IMAGES; ?>/bl2_img_2.png" alt="">
	<div class="container">
		<div class="circle_1"></div>
		<img class="lazy img_lift" data-src="<?php echo THEME_IMAGES; ?>/bl2_lift.png" alt="">
		<div class="up">
			<svg xmlns="http://www.w3.org/2000/svg" width="170.707" height="23.65" viewBox="0 0 170.707 23.65">
				<g id="Сгруппировать_12" data-name="Сгруппировать 12" transform="translate(0 0.354)">
					<line id="Линия_4" data-name="Линия 4" x2="170" transform="translate(0 11.472)" fill="none" stroke="#9eb0c3" stroke-width="1"/>
					<path id="Контур_3" data-name="Контур 3" d="M0,0H16.223V16.223" transform="translate(158.528 0) rotate(45)" fill="none" stroke="#9eb0c3" stroke-width="1"/>
				</g>
			</svg>
		</div>
		<div class="up_1">
			<svg xmlns="http://www.w3.org/2000/svg" width="23.65" height="23.65" viewBox="0 0 23.65 23.65">
			<path id="Контур_4" data-name="Контур 4" d="M0,0H16.223V16.223" transform="translate(0.354 12.179) rotate(-45)" fill="none" stroke="#9eb0c3" stroke-width="1"/>
			</svg>
		</div>
		<div class="square_3"></div>
	
	<div class="container-fluid">
		<div class="block_2">
			<div class="row">
				<div class="col-12">
				<div class="content " >
					<?php echo get_field('bl2_title'); ?>
					<ul>
						<?php 
						while( have_rows('rep_1') ): the_row(); 
						$img = get_sub_field('img');
						$text = get_sub_field('text');
						?>
							<li class="row">
								<img class="lazy" data-src="<?php echo $img; ?>" alt="">
								<div class="text"><?php echo $text; ?></div>
							</li>
						<?php 
						endwhile;
						wp_reset_query();
						?>
					</ul>
					<div class="button">
							 <a href="https://degorov.ru/sword/catalog_sword/" class="btn" ><span><?php echo get_field('bl2_name_btn'); ?></span></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>