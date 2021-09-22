<div class="block_title" id="block_5" >
<img class="lazy bl5_img1" src="<?php echo THEME_IMAGES; ?>/bl5_img1.png" alt="">
<img class="lazy bl5_img2" src="<?php echo THEME_IMAGES; ?>/bl5_img2.png" alt="">
<img class="lazy bl5_img3" src="<?php echo THEME_IMAGES; ?>/bl5_img3.png" alt="">
<img class="lazy bl5_img4" src="<?php echo THEME_IMAGES; ?>/bl5_img4.png" alt="">
	<div class="container">
	<div class="container-fluid">
		<div class="block_5">
			<div class="row">
				<div class="col-12">
				<div class="content " >
					<?php echo get_field('bl5_title'); ?>
					<div class="favor_wrap">
						<?php 
							while( have_rows('rep_3') ): the_row(); 
							$img = get_sub_field('img');
							$application = get_sub_field('application');
							$capacity = get_sub_field('capacity');
							$speed = get_sub_field('speed');
							$title = get_sub_field('title');
							$hight = get_sub_field('hight');
							$angle = get_sub_field('angle');
							$step = get_sub_field('step');
						?>
						<div class="favor_item ">
							<div class="favor_inner">
								<div class="image">
									<img class="lazy" data-src="<?php echo $img; ?>" alt="">
								</div>
								<div class="title"><?php echo $title; ?></div>
								<ul>
									<?php if(get_sub_field('application')){ ?>
										<li class="row">
											<div class="icon">
												<svg id="double-door" xmlns="http://www.w3.org/2000/svg" width="30.671" height="30.671" viewBox="0 0 30.671 30.671">
													<g id="Сгруппировать_38" data-name="Сгруппировать 38" transform="translate(0 29.648)">
														<g id="Сгруппировать_37" data-name="Сгруппировать 37">
														<path id="Контур_15" data-name="Контур 15" d="M30.16,494.933H.511a.511.511,0,0,0,0,1.022H30.16a.511.511,0,0,0,0-1.022Z" transform="translate(0 -494.933)" fill="#536075"/>
														</g>
													</g>
													<g id="Сгруппировать_40" data-name="Сгруппировать 40" transform="translate(1.534 5.112)">
														<g id="Сгруппировать_39" data-name="Сгруппировать 39">
														<path id="Контур_16" data-name="Контур 16" d="M39.4,85.333H26.111a.511.511,0,0,0-.511.511v24.537a.511.511,0,0,0,.511.511H39.4a.511.511,0,0,0,.511-.511V85.844A.511.511,0,0,0,39.4,85.333Zm-.511,24.537H26.622V86.355H38.891Z" transform="translate(-25.6 -85.333)" fill="#536075"/>
														</g>
													</g>
													<g id="Сгруппировать_42" data-name="Сгруппировать 42" transform="translate(14.824 5.112)">
														<g id="Сгруппировать_41" data-name="Сгруппировать 41">
														<path id="Контур_17" data-name="Контур 17" d="M261.269,85.333H247.978a.511.511,0,0,0-.511.511v24.537a.511.511,0,0,0,.511.511h13.291a.511.511,0,0,0,.511-.511V85.844A.511.511,0,0,0,261.269,85.333Zm-.511,24.537H248.489V86.355h12.268Z" transform="translate(-247.467 -85.333)" fill="#536075"/>
														</g>
													</g>
													<g id="Сгруппировать_44" data-name="Сгруппировать 44" transform="translate(1.534)">
														<g id="Сгруппировать_43" data-name="Сгруппировать 43">
														<path id="Контур_18" data-name="Контур 18" d="M52.692,0H26.111A.511.511,0,0,0,25.6.511V5.623a.511.511,0,0,0,.511.511H52.692a.511.511,0,0,0,.511-.511V.511A.511.511,0,0,0,52.692,0Zm-.511,5.112H26.622V1.022H52.181V5.112Z" transform="translate(-25.6)" fill="#536075"/>
														</g>
													</g>
													<g id="Сгруппировать_46" data-name="Сгруппировать 46" transform="translate(7.157)">
														<g id="Сгруппировать_45" data-name="Сгруппировать 45">
														<path id="Контур_19" data-name="Контур 19" d="M135.314,0H119.978a.511.511,0,0,0-.511.511V5.623a.511.511,0,0,0,.511.511h15.335a.511.511,0,0,0,.511-.511V.511A.511.511,0,0,0,135.314,0ZM134.8,5.112H120.489V1.022H134.8V5.112Z" transform="translate(-119.467)" fill="#fb1c1d"/>
														</g>
													</g>
												</svg>
											</div>
											<div class="text">
												<span class="name_title">Сфера применения:</span>
												<span><?php echo $application; ?></span>
											</div>
										</li>
									<?php } ?>
									<?php if(get_sub_field('capacity')){ ?>
										<li class="row">
											<div class="icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="31.874" height="31.875" viewBox="0 0 31.874 31.875">
													<g id="Сгруппировать_31" data-name="Сгруппировать 31" transform="translate(-422.089 -433.578)">
														<path id="Контур_8" data-name="Контур 8" d="M453.336,459.631l-1.771-15.337a4.7,4.7,0,0,0-4.657-4.15h-4.986a4.511,4.511,0,0,0,.365-1.7,4.337,4.337,0,0,0-1.068-2.9,4.418,4.418,0,0,0-6.384,0,4.337,4.337,0,0,0-1.068,2.9,4.5,4.5,0,0,0,.365,1.7h-4.985a4.7,4.7,0,0,0-4.657,4.149l-1.769,15.337a4.711,4.711,0,0,0,4.17,5.2,4.615,4.615,0,0,0,.485.028h21.3a4.711,4.711,0,0,0,4.686-4.738A4.613,4.613,0,0,0,453.336,459.631Zm-16.587-22.393a1.876,1.876,0,0,1,2.556,0,1.92,1.92,0,0,1,0,2.4,1.876,1.876,0,0,1-2.556,0A1.92,1.92,0,0,1,436.749,437.238Zm12.218,25.043a2.178,2.178,0,0,1-.289.016h-21.3a2.1,2.1,0,0,1-2.117-2.373l1.769-15.337a2.117,2.117,0,0,1,2.118-1.887h17.762a2.114,2.114,0,0,1,2.115,1.887l1.771,15.337A2.11,2.11,0,0,1,448.967,462.281Z" transform="translate(0 0)" fill="#536075" stroke="#e6ecf2" stroke-width="1.2"/>
														<path id="Контур_9" data-name="Контур 9" d="M432.8,450.179a1.066,1.066,0,0,0-1.065,1.065v8.095a1.065,1.065,0,1,0,2.13,0v-2.556l2.775,3.249a1.065,1.065,0,0,0,1.619-1.385h0l-2.87-3.356,2.87-3.355a1.065,1.065,0,1,0-1.619-1.385l-2.776,3.246v-2.556A1.065,1.065,0,0,0,432.8,450.179Z" transform="translate(-1.337 -2.367)" fill="#dd141f" stroke="#e6ecf2" stroke-width="1.2"/>
														<path id="Контур_10" data-name="Контур 10" d="M444.928,450.179c-2.337,0-4.239,2.293-4.239,5.112s1.9,5.112,4.239,5.112a3.765,3.765,0,0,0,3.312-1.927,1.059,1.059,0,0,0,.118-.486v-2.06a1.065,1.065,0,0,0-1.065-1.065h-1.278a1.065,1.065,0,1,0,0,2.13h.213v.676a1.647,1.647,0,0,1-1.3.6c-1.143,0-2.109-1.363-2.109-2.982s.966-2.982,2.109-2.982a1.635,1.635,0,0,1,1.414.767,1.064,1.064,0,0,0,1.817-1.108A3.761,3.761,0,0,0,444.928,450.179Z" transform="translate(-2.662 -2.367)" fill="#dd141f" stroke="#e6ecf2" stroke-width="1.2"/>
													</g>
												</svg>
											</div>
											
											<div class="text">
											<span class="name_title">Грузоподъемность:</span>
											<span><?php echo $capacity; ?></span>	
											</div>
										</li>
									<?php } ?>
									<?php if(get_sub_field('speed')){ ?>
										<li class="row">
											<div class="icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="30.671" height="23.341" viewBox="0 0 30.671 23.341">
													<g id="Сгруппировать_1207" data-name="Сгруппировать 1207" transform="translate(-279.777 -407.076)">
														<path id="Контур_5" data-name="Контур 5" d="M295.107,407.076a.707.707,0,0,0-.126.013,15.256,15.256,0,0,0-7.665,2.129.809.809,0,0,0-.157.091,15.427,15.427,0,0,0-5.476,5.722.646.646,0,0,0-.084.151,15.22,15.22,0,0,0-1.808,7.094.627.627,0,0,0,0,.263,14.457,14.457,0,0,0,2.09,7.556.667.667,0,0,0,1.236-.4l.031.409,2.5-1.451a.655.655,0,0,0,.346-.578.668.668,0,0,0-1.015-.576l-2.223,1.289a13.012,13.012,0,0,1-1.618-5.715h2.644a.667.667,0,1,0,0-1.333h-2.645a13.931,13.931,0,0,1,1.374-5.4c.374.2.974.526,2.319,1.257a.667.667,0,0,0,.679-1.149l-.045-.024c-1.346-.729-1.941-1.052-2.319-1.255a14.053,14.053,0,0,1,4.2-4.4l1.372,2.282a.667.667,0,1,0,1.143-.688h0l-1.372-2.282a13.955,13.955,0,0,1,5.955-1.643v2.644a.667.667,0,1,0,1.333,0h0V408.44a13.941,13.941,0,0,1,5.406,1.364l-1.262,2.329a.667.667,0,1,0,1.174.635l1.262-2.327a14.029,14.029,0,0,1,4.4,4.208l-2.282,1.372a.667.667,0,0,0,.688,1.143l2.282-1.372a13.933,13.933,0,0,1,1.643,5.955h-2.648a.666.666,0,1,0,0,1.333h2.645a13.039,13.039,0,0,1-1.617,5.716l-2.225-1.291a.668.668,0,0,0-1.015.576.655.655,0,0,0,.346.578l2.5,1.45.031-.409a.667.667,0,0,0,1.236.4,14.461,14.461,0,0,0,2.093-7.548.74.74,0,0,0,0-.265,15.257,15.257,0,0,0-2.139-7.676.629.629,0,0,0-.076-.138h0l-.005-.005a15.413,15.413,0,0,0-5.713-5.47.7.7,0,0,0-.185-.1,15.237,15.237,0,0,0-7.076-1.805A.657.657,0,0,0,295.107,407.076Z" transform="translate(0)" fill="#536075"/>
														<path id="Контур_6" data-name="Контур 6" d="M305.891,419.442a.668.668,0,0,0-.56-.334h0a.661.661,0,0,0-.362.1l-6.069,3.587a1.969,1.969,0,0,0-1.27-.474,2,2,0,1,0,2,2,2.115,2.115,0,0,0-.039-.385l6.059-3.582A.666.666,0,0,0,305.891,419.442Zm-8.267,5.543a.667.667,0,0,1,0-1.333h0a.648.648,0,0,1,.5.242.6.6,0,0,0,.114.19.674.674,0,0,1,.045.234A.666.666,0,0,1,297.623,424.985Z" transform="translate(-2.512 -1.907)" fill="#dd141f"/>
														<path id="Контур_7" data-name="Контур 7" d="M293.125,431.634a.667.667,0,1,0,0,1.333h8a.667.667,0,1,0,0-1.333h-8Z" transform="translate(-2.009 -3.891)" fill="#dd141f"/>
													</g>
												</svg>
											</div>
											<div class="text">
											<span class="name_title">Скорость:</span>
											<span><?php echo  $speed; ?></span>		
											</div>
										</li>
									<?php } ?>
									<?php if(get_sub_field('hight')){ ?>
										<li class="row">
											<div class="icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="30.671" height="30.658" viewBox="0 0 30.671 30.658">
													<g id="Сгруппировать_49" data-name="Сгруппировать 49" transform="translate(-209.782 -714.849)">
														<path id="lift" d="M240.452,717.246v-2.4h-30.67v2.4h7.872l5.623,4.612-7.522,6.194a1.287,1.287,0,0,0,0,1.988l7.519,6.193-5.475,4.494h-1.032a3.594,3.594,0,1,0,0,2.4h16.7a3.595,3.595,0,1,0,0-2.4h-.97l-5.452-4.489,7.813-6.411a1.012,1.012,0,0,0,0-1.563l-7.81-6.411,5.595-4.608Zm-27.076,25.878a1.2,1.2,0,0,1,0-2.4A1.2,1.2,0,0,1,213.376,743.124Zm23.482-2.4a1.2,1.2,0,0,1,0,2.4,1.2,1.2,0,0,1,0-2.4Zm-8.131,0h-7.151l3.578-2.939Zm3.307-11.681-6.873,5.64-6.846-5.64,6.846-5.64Zm-6.876-8.745-3.728-3.056h7.442Z" transform="translate(0 0)" fill="#536075"/>
														<rect id="Прямоугольник_32" data-name="Прямоугольник 32" width="30.67" height="2.397" transform="translate(209.782 714.849)" fill="#fb1c1d"/>
													</g>
												</svg>
											</div>
											<div class="text">
											<span class="name_title">Максимальная высота подъема:</span>
											<span><?php echo  $hight; ?></span>		
										</div>
										</li>
									<?php } ?>
									<?php if(get_sub_field('angle')){ ?>
										<li class="row">
											<div class="icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31.5" height="31.5" viewBox="0 0 31.5 31.5">
												  <defs>
												    <clipPath id="clip-path">
												      <path id="Контур_34" data-name="Контур 34" d="M0,0V31H31" transform="translate(4632 6429)" fill="none" stroke="#536075" stroke-width="1"/>
												    </clipPath>
												  </defs>
												  <g id="Сгруппировать_1239" data-name="Сгруппировать 1239" transform="translate(-4631.5 -6429)">
												    <g id="Группа_масок_7" data-name="Группа масок 7" clip-path="url(#clip-path)">
												      <circle id="Эллипс_41" data-name="Эллипс 41" cx="15" cy="15" r="15" transform="translate(4619 6443)" fill="#fb1c1d"/>
												    </g>
												    <path id="Контур_33" data-name="Контур 33" d="M0,0V31H31" transform="translate(4632 6429)" fill="none" stroke="#536075" stroke-width="1"/>
												  </g>
											</svg>
											</div>
											<div class="text">
											<span class="name_title">Угол:</span>
											<span><?php echo  $angle; ?></span>		
											</div>
										</li>
									<?php } ?>
									<?php if(get_sub_field('step')){ ?>
										<li class="row">
											<div class="icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="31" height="18" viewBox="0 0 31 18">
												  <g id="Сгруппировать_1240" data-name="Сгруппировать 1240" transform="translate(-4632 -6487)">
												    <g id="Прямоугольник_86" data-name="Прямоугольник 86" transform="translate(4632 6487)" fill="none" stroke="#536075" stroke-width="1">
												      <rect width="31" height="18" stroke="none"/>
												      <rect x="0.5" y="0.5" width="30" height="17" fill="none"/>
												    </g>
												    <line id="Линия_14" data-name="Линия 14" x2="20" transform="translate(4637.5 6496.5)" fill="none" stroke="#fb1c1d" stroke-width="1" stroke-dasharray="2"/>
												  </g>
											</svg>
											</div>
											<div class="text">
											<span class="name_title">Ширина ступени:</span>
											<span><?php echo  $step; ?></span>		
											</div>
										</li>
									<?php } ?>

									
								</ul>
							<a href="https://degorov.ru/sword/catalog_sword/" class="button">
                                <div  class="btn2" ><span>Каталог</span></div>
                            </a>
								
								
							</div>
						</div>
						<?php 
							endwhile;
							wp_reset_query();
							?>
					</div>
					<a href="https://degorov.ru/sword/catalog_sword/" class="button button-2">
                                <div  class="btn2 red" ><span>Показать ещё...</span></div>
                            </a>
				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>