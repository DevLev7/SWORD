
	<header id="header">
		<div class="square"></div>
		<div class="container-fluid">
			<div class="row mainrow">
				<div class="logo">
					<a href="<?php echo HOME_URI; ?>" class="img_link">
						<img src="<?php echo get_field('logos','option')['header']; ?>" alt="Логотип <?php echo get_field('company', 'option')['brand']; ?>" />
					</a>
				</div>
				<div class="content">
					<div class="row">
						<div class="col descriptor">
							<div class="text">
								<?php the_field('descriptor', 'option'); ?>
							</div>
						</div>
						<div class="menu_block">
						<?php wp_nav_menu( array(
							'theme_location' => 'main_menu',
							'fallback_cb' => ''
						) ); ?>
					</div>
						<?php if ( is_plugin_active( 'multycity/multycity.php' ) ) { ?>
						<div class="col hidden-sm hidden-xs">
							<?php get_template_part('template-parts/multycity'); ?>
						</div>
						<? } ?>
						<div class="col contacts">
						<svg xmlns="http://www.w3.org/2000/svg" width="36.145" height="36.094" viewBox="0 0 36.145 36.094">
								<g id="phone_telephone_handset_wire_b" data-name="phone, telephone, handset, wire, b" transform="translate(0.7 0.7)">
									<path id="Контур_2" data-name="Контур 2" d="M20.033,43.121a17.42,17.42,0,1,1,7.41,1.623h-.07v0h.07a17.353,17.353,0,1,0-7.41-1.623Z" transform="translate(-10 -10)" fill="none" stroke="#a30809" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3"/>
									<path id="Контур_1" data-name="Контур 1" d="M38.45,31.5c0,6.585,2,11.922,4.471,11.922H45.9l-.745-5.96h-.745a2.235,2.235,0,0,1-2.234-2.235l0-3.726,0-3.726a2.235,2.235,0,0,1,2.234-2.235h.745l.745-5.961H42.922c-2.47,0-4.472,5.337-4.472,11.922Z" transform="translate(-26.094 -15.42)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3"/>
								</g>
						</svg>
							<?php echo do_shortcode('[phone]') ?>
								
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</header>