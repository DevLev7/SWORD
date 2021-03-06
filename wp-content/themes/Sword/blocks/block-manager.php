	<?php 					
	
	if(get_field('manager-header') || get_field('form-text','option')){
	
	// Фото менеджера
	//if(get_field('avatar',get_field('manager'))['url']){
	if(get_field('manager')){
		$image = get_field('avatar',get_field('manager'));
		$name = get_the_title(get_field('manager'));
		$position = get_field('position',get_field('manager'));
	} else {
		$image = get_field('form-manager','option')['avatar'];
		$name = get_field('form-manager','option')['name'];
		$position = get_field('form-manager','option')['position'];
	}	

	$avatar_info = new SplFileInfo($image['url']);
	$avatar_ext = $avatar_info->getExtension();
									
	//	Адаптивное изображение
	$imageSize = '';
	include (locate_template('template-parts/lazy-image-responsive-IE.php'));
	?>
	
	<section  id="manager" class="manager-1 block_title">
	
	<img class="lazy man_img3" src="<?php echo THEME_IMAGES; ?>/man_img3.png" alt="">
	<img class="lazy man_img4" src="<?php echo THEME_IMAGES; ?>/man_img4.png" alt="">
		<div class="container-fluid">
			<div class="wrap_1">
				<div class="content">	
					<div class="text-wrap">	
						<div class="utp">
							<?php if(get_field('manager-header')){ ?>
							<div class="header">
								<?php the_field('manager-header'); ?>
							</div>
							<?php if(get_field('manager-desc')){ ?>
							<div class="subheader">
								<?php the_field('manager-desc'); ?>
							</div>
							<?php } ?>
							<?php }else{ ?>
							<div class="header subheader">
								<?php the_field('form-text','option'); ?>
							</div>
							<?php } ?>
						</div>
						<div class="manager-label">
							<div class="name">
								<?php echo $name;?>
							</div>
							<div class="position">
								<?php echo $position;?>
							</div>
						</div>
			
						
					</div>
						
				</div>
				<div class="row">
					<div class="favor_wrap">
						<div class="favor_item" data-src="#popup-order" data-fancybox>
							<div class="persent_20">
								<div class="title">20%</div>
								<div class="text"> предоплата</div>
							</div>
							<div class="remainder">
								<div class="title">80%</div>
								<div class="text">перед отгрузкой</div>
							</div>
							<div class="number">1</div>
								<div class="check">
									<svg xmlns="http://www.w3.org/2000/svg" width="11.427" height="9.621" viewBox="0 0 11.427 9.621">
									<path id="Контур_6" data-name="Контур 6" d="M94.266,124.108l-4.908,7.426L85.747,128a.857.857,0,0,0-1.2,0,.836.836,0,0,0,0,1.193l4.216,4.132a1.1,1.1,0,0,0,1.353-.191l5.359-7.829a.838.838,0,0,0,0-1.193A.859.859,0,0,0,94.266,124.108Z" transform="translate(-84.293 -123.861)" fill="#9eb0c3"/>
									</svg>
							</div>
						</div>
						<div class="favor_item" data-src="#popup-order" data-fancybox>
							<div class="flex">
								<div class="persent_50 left">
									
									<div class="title">50%</div>
									<div class="text"> предоплата</div>
								</div>
								<div class="persent_50">
									<div class="title">50%</div>
									<div class="text"> перед отгрузкой</div>
								</div>
								
							</div>
							<div class="number">2</div>
							<div class="check">
									<svg xmlns="http://www.w3.org/2000/svg" width="11.427" height="9.621" viewBox="0 0 11.427 9.621">
									<path id="Контур_6" data-name="Контур 6" d="M94.266,124.108l-4.908,7.426L85.747,128a.857.857,0,0,0-1.2,0,.836.836,0,0,0,0,1.193l4.216,4.132a1.1,1.1,0,0,0,1.353-.191l5.359-7.829a.838.838,0,0,0,0-1.193A.859.859,0,0,0,94.266,124.108Z" transform="translate(-84.293 -123.861)" fill="#9eb0c3"/>
									</svg>
								</div>
						</div>
						<div class="favor_item" data-src="#popup-order" data-fancybox>
						
							<div class="persent_20 invert">
								<div class="title">20%</div>
								<div class="text"> перед отгрузкой</div>
							</div>
							<div class="remainder invert">
								<div class="title">80%</div>
								<div class="text"> предоплата</div>
							</div>
							<div class="number">3</div>
							<div class="check">
									<svg xmlns="http://www.w3.org/2000/svg" width="11.427" height="9.621" viewBox="0 0 11.427 9.621">
									<path id="Контур_6" data-name="Контур 6" d="M94.266,124.108l-4.908,7.426L85.747,128a.857.857,0,0,0-1.2,0,.836.836,0,0,0,0,1.193l4.216,4.132a1.1,1.1,0,0,0,1.353-.191l5.359-7.829a.838.838,0,0,0,0-1.193A.859.859,0,0,0,94.266,124.108Z" transform="translate(-84.293 -123.861)" fill="#9eb0c3"/>
									</svg>
								</div>
						</div>
						<div class="favor_item" data-src="#popup-order" data-fancybox>
							<div class="flex">
								<div class="persent_100">
									<div class="title">100%</div>
									<div class="text"> предоплата</div>
								</div>
							</div>
						<div class="number">4</div>
						<div class="check">
									<svg xmlns="http://www.w3.org/2000/svg" width="11.427" height="9.621" viewBox="0 0 11.427 9.621">
									<path id="Контур_6" data-name="Контур 6" d="M94.266,124.108l-4.908,7.426L85.747,128a.857.857,0,0,0-1.2,0,.836.836,0,0,0,0,1.193l4.216,4.132a1.1,1.1,0,0,0,1.353-.191l5.359-7.829a.838.838,0,0,0,0-1.193A.859.859,0,0,0,94.266,124.108Z" transform="translate(-84.293 -123.861)" fill="#9eb0c3"/>
									</svg>
								</div>
						</div>
					</div>
					<div class="form-wrap <?php echo get_field('form','option')['center'] ? "ct" : ""; ?>">
					<?php 
					$formEmail = "";
					
					// Проверка на заполнение формы сначала на самой странице, если нет, то из блока Формы, ели и там пусто, то по умолчанию
					
					// Заголовок
					if(get_field('manager-form')['head']){
						$formTitle = get_field('manager-form')['head'];
					}elseif(get_field('form','option')['head']){
						$formTitle = get_field('form','option')['head'];
					}else{
						$formTitle = "Заполните форму";
					}
					
					// Описание
					if(get_field('manager-form')['desc']){
						$formDesk = get_field('manager-form')['desc'];
					}elseif(get_field('form','option')['desc']){
						$formDesk = get_field('form','option')['desc'];
					}else{
						$formDesk = "и мы перезвоним вам в самое ближайшее время";
					}
					
					// Текстовое поле
					if(get_field('manager-form')['textarea']){
						$formTextarea = get_field('manager-form')['textarea'];
					}elseif(get_field('form','option')['textarea']){
						$formTextarea = get_field('form','option')['textarea'];
					}else{
						$formTextarea = "";
					}
					
					// Кнопка
					if(get_field('manager-form')['btn']){
						$formBtn = get_field('manager-form')['btn'];
					}elseif(get_field('form','option')['btn']){
						$formBtn = get_field('form','option')['btn'];
					}else{
						$formBtn = "Отправить сообщение";
					}
					
					include (locate_template('blocks/block-form.php'));
					?>
				</div>
				</div>	
				
			</div>
			
			
		</div>
	</section>
	<? }else{ ?>
	
	<section id="no-manager">
		<div class="container-fluid">
			<div class="row">
				<div class="col-s">	
					<div class="wrap">	
						<div class="header">
							<h2>Вам нужно больше информации?</h2>
							<p>Не стесняйтесь обращаться к нам!</p>
						</div>
						<div class="button">
							 <div data-src="#popup-mess" data-fancybox class="btn" anim="ripple"><span>Оставить сообщение</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<? } ?>