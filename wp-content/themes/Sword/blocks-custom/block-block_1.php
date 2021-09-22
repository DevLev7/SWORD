<div class="block_title"  id="hero" >
   
    
    <img class="lazy hero_img" data-src="<?php echo THEME_IMAGES; ?>/img_hero.png" alt="">
   <div class="square_1"></div>
   <div class="square_2"></div>
   <div class="circle"></div>
    <div class="container">
    <div class="img_main">
   <img class="lazy building" src="<?php echo THEME_IMAGES; ?>/building.png" alt="">
   <img class="lazy big_lift1" src="<?php echo THEME_IMAGES; ?>/big_lift1.png" alt="">
   <img class="lazy big_lift2" src="<?php echo THEME_IMAGES; ?>/big_lift2.png" alt="">
   </div>
        <div class="container-fluid">
            <div class="block_1">
                <div class="row">
                    <div class="col-12">
                    <div class="content " >
                        <?php echo get_field('hero_text'); ?>
                        <div class="button">
                                <a  href="#block_2"  class="btn"><span><?php echo get_field('hero_name_btn'); ?></span></a>
                            </div>
                        <div class="text"><?php echo get_field('text_under_btn'); ?></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
var tll = gsap.timeline({repeat:-1});
tll.to('.big_lift1', {duration: 4,delay: 1,  ease: 'power', top:'73%', })
tll.to('.big_lift1', {duration: 4, ease: 'power', top:'11%', }, "+=.3")

var tll1 = gsap.timeline({repeat:-1});
tll1.to('.big_lift2', {duration: 4, delay: 1 , ease: 'power', bottom:'63%', })
tll1.to('.big_lift2', {duration: 4, ease: 'power', bottom:'23%', }, "+=.3")



</script>