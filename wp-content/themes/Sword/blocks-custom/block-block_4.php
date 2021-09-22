<div class="block_title"  id="block_4" >
	<img class="lazy bl4_img1" src="<?php echo THEME_IMAGES; ?>/bl4_img.png" alt="">
	<div class="container">
		<div class="circle_4"></div>
		<div class="capsule"></div>
		<img class="lazy quote" src="<?php echo THEME_IMAGES; ?>/quote.png" alt="">
		<div class="band_2"></div>
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
		<div class="block_4">
			<div class="row">
				<div class="col-12">
				<div class="content " >
					<?php echo get_field('bl4_title'); ?>
					<div class="subtitle"><?php echo get_field('bl4_subt'); ?></div>
						
					<div class="favor_wrap">
					<?php 
						while( have_rows('rep_2') ): the_row(); 
						$title = get_sub_field('title');
						$text = get_sub_field('text');
						?>
						<div class="favor_item">
							<div class="title"><?php echo $title; ?></div>
							<div class="text"><?php echo $text; ?></div>
						</div>
						<?php 
						endwhile;
						wp_reset_query();
						?>
					</div>
				
				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>


<script>
var tl1 = gsap.timeline({repeat:-1});
tl1.to('.lift_1', {duration: 3, ease: 'power', top:'43%', })
tl1.to('.lift_1', {duration: 3, ease: 'power', top:'73%', }, "+=.3")

var tl2 = gsap.timeline({repeat:-1});
tl2.to('.lift_2', {duration: 4, delay: .3 , ease: 'power', top:'83%', })
tl2.to('.lift_2', {duration: 4, ease: 'power', top:'49%', }, "+=.3")

var tl3 = gsap.timeline({repeat:-1});
tl3.to('.lift_3', {duration: 3, delay: .4 , ease: 'power', top:'60%', })
tl3.to('.lift_3', {duration: 3, ease: 'power', top:'37%', }, "+=.3")

var tl4 = gsap.timeline({repeat:-1});
tl4.to('.lift_4', {duration: 3, delay: .4 , ease: 'power', top:'65%', })
tl4.to('.lift_4', {duration: 3, ease: 'power', top:'84%', }, "+=.3")

var tl5 = gsap.timeline({repeat:-1});
tl5.to('.lift_5', {duration: 4, delay: .6 , ease: 'power', top:'71%', })
tl5.to('.lift_5', {duration: 4, ease: 'power', top:'49%', }, "+=.3")

var tl6 = gsap.timeline({repeat:-1});
tl6.to('.lift_6', {duration: 5, delay: .2 , ease: 'power', top:'55%', })
tl6.to('.lift_6', {duration: 5, ease: 'power', top:'63%', }, "+=.3")

</script>