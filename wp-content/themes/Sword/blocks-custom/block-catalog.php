<div class="block_title" id="catalog" >

	<div class="container">
	<div class="container-fluid">
		<div class="catalog">
			<div class="row">
				<div class="col-12">
				<div class="content " >
					<?php echo get_field('bl5_title'); ?>
					<div class="favor_wrap">
						<?php 
							while( have_rows('catalog_rep') ): the_row(); 
							$img = get_sub_field('img');
							$link = get_sub_field('link');
							$name = get_sub_field('name');
							
						?>
						<a href="<?php echo $link; ?>" class="favor_item ">
							<div class="favor_inner">
								<div class="image">
									<img class="lazy" data-src="<?php echo $img; ?>" alt="">
								</div>
								
								
							<div class="link_catalog"  >
                                <div><span><?php echo $name; ?></span></div>
                            </div>
								
								
							</div>
						</a>
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