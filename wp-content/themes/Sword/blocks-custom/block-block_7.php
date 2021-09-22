<div class="block_title" id="block_7"  >
<img class="lazy parallax maps"  data-src="<?php echo THEME_IMAGES; ?>/maps.png" alt="">
<img class="lazy bl7_img1" src="<?php echo THEME_IMAGES; ?>/bl7_img1.png" alt="">
<img class="lazy bl7_img2" src="<?php echo THEME_IMAGES; ?>/bl7_img2.png" alt="">
	<div class="container-fluid">
		<div class="block_7">
			<div class="row">
				<div class="col-12">
					<div class="content">
                    <?php echo get_field('bl7_title'); ?>
                        <div class="slider-block">
                            <div class="slider-arrow"></div>
                            <div class="slider">
                            <?php 
											while( have_rows('rep_4_project') ): the_row(); 
												$title = get_sub_field('title');
												$city = get_sub_field('city');
												$lift = get_sub_field('lift');											
												$esc = get_sub_field('esc');
												$trav = get_sub_field('trav');
												$img = get_sub_field('img');
												
											?>
                                <div class="item_wrap">
                                <div class="item">
                                   <div class="info">
                                       <div class="image">
                                           <img class="lazy" data-src="<?php echo $img; ?>" alt="">
                                       </div>
                                       <div class="detail">
                                           <div class="title"><?php echo $title; ?></div>
                                           <div class="city"><?php echo $city; ?></div>
										   <ul>
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
												   <div class="text"><?php echo $lift; ?></div>
											   </li>
											   <li class="row">
											   		<div class="icon">
													   <svg xmlns="http://www.w3.org/2000/svg" width="30.541" height="27.369" viewBox="0 0 30.541 27.369">
															<g id="Сгруппировать_1231" data-name="Сгруппировать 1231" transform="translate(-282.819 -409.995)">
																<path id="Контур_30" data-name="Контур 30" d="M287.5,420.716a.549.549,0,0,0,.39-.162l8.629-8.658-.028,2.28a.541.541,0,0,0,.534.548h.016a.543.543,0,0,0,.55-.535l.044-3.639A.548.548,0,0,0,297.1,410a.067.067,0,0,0-.02,0l-3.644.077a.55.55,0,1,0,.011,1.1h.012l2.278-.048-8.617,8.652a.551.551,0,0,0,.39.939Z" fill="#fb1c1d"/>
																<path id="Контур_30-2" data-name="Контур 30" d="M292.659,436.905v-3.635h3.479" fill="none" stroke="#fb1c1d" stroke-width="1"/>
																<path id="Контур_31" data-name="Контур 31" d="M292.659,436.905v-3.635h3.479" transform="translate(4 -4)" fill="none" stroke="#fb1c1d" stroke-width="1"/>
																<path id="Контур_32" data-name="Контур 32" d="M292.659,436.905v-3.635h3.479" transform="translate(8 -8)" fill="none" stroke="#fb1c1d" stroke-width="1"/>
																<path id="Контур_32-2" data-name="Контур 32" d="M289.629,428.635l-.217.2h-6.063a.528.528,0,0,0-.53.527v7.432a.553.553,0,0,0,.53.57h9.4a.547.547,0,0,0,.389-.158l13.6-13.6H312.8a.58.58,0,0,0,.56-.575v-7.415a.547.547,0,0,0-.557-.54h-9.4a.52.52,0,0,0-.379.156l-4.243,4.243m4.852-3.3h8.63V422.5h-5.749a.548.548,0,0,0-.389.159l-13.6,13.6h-8.6v-6.329h5.72a.55.55,0,0,0,.389-.164l8.433-8.434a.538.538,0,0,0,.235-.23Zm-5.95,4.4-6.948,6.956" fill="#536075"/>
															</g>
														</svg>

													</div>
													<div class="text"><?php echo $esc; ?></div>
											   </li>
											   <li class="row">
											  		<div class="icon">
													  	<svg xmlns="http://www.w3.org/2000/svg" width="30.541" height="27.369" viewBox="0 0 30.541 27.369">
															<g id="Сгруппировать_1232" data-name="Сгруппировать 1232" transform="translate(-282.819 -409.995)">
																<path id="Контур_30" data-name="Контур 30" d="M297.09,410a.549.549,0,0,0-.39.162l-8.629,8.658.028-2.28a.541.541,0,0,0-.534-.548h-.016a.543.543,0,0,0-.55.535l-.044,3.639a.548.548,0,0,0,.542.554.067.067,0,0,0,.02,0l3.644-.077a.55.55,0,1,0-.011-1.1h-.012l-2.278.048,8.617-8.652a.551.551,0,0,0-.39-.939Z" fill="#fb1c1d"/>
																<path id="Контур_32" data-name="Контур 32" d="M289.629,428.635l-.217.2h-6.063a.528.528,0,0,0-.53.527v7.432a.553.553,0,0,0,.53.57h9.4a.547.547,0,0,0,.389-.158l13.6-13.6H312.8a.58.58,0,0,0,.56-.575v-7.415a.547.547,0,0,0-.557-.54h-9.4a.52.52,0,0,0-.379.156l-4.243,4.243m4.852-3.3h8.63V422.5h-5.749a.548.548,0,0,0-.389.159l-13.6,13.6h-8.6v-6.329h5.72a.55.55,0,0,0,.389-.164l8.433-8.434a.538.538,0,0,0,.235-.23Zm-5.95,4.4-6.948,6.956" fill="#536075"/>
																<line id="Линия_13" data-name="Линия 13" x1="11" y2="11" transform="translate(292.319 422.495)" fill="none" stroke="#fb1c1d" stroke-width="1"/>
															</g>
														</svg>
													</div>
													<div class="text"><?php echo $trav; ?></div>
											   </li>
										   </ul>
                                       </div>
                                   </div> 
                                </div>
                                </div>
                                
                                <?php 
										endwhile;
										wp_reset_query();
										?>
                               
                            </div>

                            
                        </div>
                        <a href="https://degorov.ru/sword/project/" class="button">
                                <div  class="btn2" ><span>Посмотреть все объекты</span></div>
                    </a>
			

                            </div>

                           
							
								
	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script>
		$('.slider').slick({
    
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 1,
	dots: false,
	arrows: true,
	centerMode: false,
	responsive: [
	  {
		breakpoint: 1023,
		settings: {
		  slidesToShow: 2
		 
		}},
		{
		  breakpoint: 767,
		  settings: {
			slidesToShow: 1
		   
		  }},			
	],
  
	
	//centerPadding: '1rem',
	//adaptiveHeight: true,
	
	appendArrows:$(".slider-arrow"),
	prevArrow:'<button id="prev" type="button" class="slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="18.844" height="30.204" viewBox="0 0 18.844 30.204"><path id="Вычитание_5" data-name="Вычитание 5" d="M3.677,0h0L0,4.025l8.781,9.611L0,23.246l3.677,4.025L16.135,13.636,3.677,0Z" transform="translate(17.489 28.753) rotate(180)" fill="#fff" stroke="#fb1c1d" stroke-width="2"/></svg></button>',
    nextArrow:'<button id="next" type="button" class="slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="18.844" height="30.204" viewBox="0 0 18.844 30.204"><path id="Вычитание_4" data-name="Вычитание 4" d="M-2079.225,27.271h0l-3.676-4.024,8.781-9.611-8.781-9.611L-2079.225,0l12.458,13.635-12.458,13.635Z" transform="translate(2084.256 1.482)" fill="#fff" stroke="#fb1c1d" stroke-width="2"/></svg></button>',
	
  });
  </script>