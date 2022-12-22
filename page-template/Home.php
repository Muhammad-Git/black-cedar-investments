<?php /* Template Name: Home - Page Template */ ?>
<?php get_header(); 
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
?>

<section class="home-sec-1" id="investment">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="text">
               <h2><?php echo $section_1['title'];?></h2>
               <p><?php echo $section_1['conetnt'];?></p>
               <a href="<?php echo $section_1['page_link'];?>" class="t-btn btn-bg-2"  ><?php echo $section_1['button_title'];?></a>
                <!--<a href="#" class="t-btn btn-bg-2" data-target="#investment" ><?php echo $section_1['button_title'];?></a>-->
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="home-sec-2">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="heading">
               <h2 class="text-center"><?php echo $section_2['title']?></h2>
            </div>
            <!--<div class="map">-->
            <!--   <img src="<?php echo $section_2['map_image']?>" class="img-fluid d-block mx-auto" alt="">-->
            <!--   <ul>-->
            <!--      <li class="list-1">-->
            <!--         <div class="dot" id="dot-1"><i class="fa fa-circle" aria-hidden="true"></i></div>-->
            <!--         <div class="box" id="dot-1-box">-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dots/1.png" class="img-fluid mb-3 ml-3" alt="">-->
            <!--            <div>-->
            <!--               <?php echo $section_2['content_1']?>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </li>-->
            <!--      <li class="list-2">-->
            <!--         <div class="dot" id="dot-2"><i class="fa fa-circle" aria-hidden="true"></i></div>-->
            <!--         <div class="box" id="dot-2-box">-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dots/2.png" class="img-fluid mb-3 ml-3" alt="">-->
            <!--            <div>-->
            <!--               <?php echo $section_2['content_2']?>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </li>-->
            <!--      <li class="list-3">-->
            <!--         <div class="dot" id="dot-3"><i class="fa fa-circle" aria-hidden="true"></i></div>-->
            <!--         <div class="box" id="dot-3-box">-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dots/3.png" class="img-fluid mb-3 ml-3" alt="">-->
            <!--            <div>-->
            <!--               <?php echo $section_2['content_3']?>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </li>-->
            <!--      <li class="list-4">-->
            <!--         <div class="dot" id="dot-4"><i class="fa fa-circle" aria-hidden="true"></i></div>-->
            <!--         <div class="box" id="dot-4-box">-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dots/4.png" class="img-fluid mt-5 ml-3" alt="">-->
            <!--            <div>-->
            <!--               <?php echo $section_2['content_4']?>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </li>-->
            <!--      <li class="list-5">-->
            <!--         <div class="dot" id="dot-5"><i class="fa fa-circle" aria-hidden="true"></i></div>-->
            <!--         <div class="box" id="dot-5-box">-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dots/5.png" class="img-fluid mt-5 ml-3" alt="">-->
            <!--            <div>-->
            <!--               <?php echo $section_2['content_5']?>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </li>-->
            <!--      <li class="list-6">-->
            <!--         <div class="dot"  id="dot-6"><i class="fa fa-circle" aria-hidden="true"></i></div>-->
            <!--         <div class="box"  id="dot-6-box">-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dots/6.png" class="img-fluid mt-5 ml-3" alt="">-->
            <!--            <div>-->
            <!--               <?php echo $section_2['content_6']?>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </li>-->
            <!--      <li class="list-7">-->
            <!--         <div class="dot"  id="dot-7"><i class="fa fa-circle" aria-hidden="true"></i></div>-->
            <!--         <div class="box"  id="dot-7-box">-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dots/2.png" class="img-fluid mt-5 ml-3" alt="">-->
            <!--            <div>-->
            <!--               <?php echo $section_2['content_7']?>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </li>-->
            <!--   </ul>-->
            <!--</div>-->
            <div class="text-center new-map"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/10/Black-Cedar-Markets-Map-2-1.png" class="img-fluid"></div>
         </div>
      </div>
   </div>
</section>

<section class="home-sec-3">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="heading">
               <h2><?php echo $section_3['title'];?></h2>
            </div>
         </div>
      </div>
      <div class="row">
      	<?php if(have_rows('section_3')) : while(have_rows('section_3')) : the_row();?>
      		<?php if(have_rows('section_3_repeater')) : while(have_rows('section_3_repeater')) : the_row();?>
         <div class="col-lg-2 col-md-4 col-sm-12">
            <div class="box">
               <h3><?php echo get_sub_field('title');?></h3>
               <p><?php echo get_sub_field('content');?></p>
            </div>
         </div>
	       <?php endwhile; endif; ?>
	   <?php endwhile; endif; ?>

      </div>
   </div>
</section>
<section class="home-sec-4">
   <div class="container">
      <div class="row">
         <div class="offset-lg-6 col-lg-6 col-md-12 col-sm-12">
            <div class="text">
               <h2><?php echo $section_4['title'];?></h2>
               <p><?php echo $section_4['content'];?></p>
               <a href="<?php echo $section_4['page_link'];?>" class="t-btn"><?php echo $section_4['button_title'];?></a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="home-sec-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="heading">
               <h2><?php echo $section_5['title'];?></h2>
            </div>
         </div>
      </div>
      <div class="row">
      	<?php if(have_rows('section_5')) : while(have_rows('section_5')) : the_row(); ?>
         		<?php if(have_rows('section_5_repeater')) : $x=1; while(have_rows('section_5_repeater')) : the_row(); ?>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="box">
               <div class="number">0<?php echo $x;?></div>
               <h3><?php echo get_sub_field('title')?></h3>
               <p><?php echo get_sub_field('content')?></p>
            </div>
         </div>
        <?php $x++; endwhile; endif;?>
        <?php endwhile; endif;?>
         
        
         <div class="col-md-12">
            <div class="text-center mt-3">
               <a href="<?php echo $section_5['page_link'];?>" class="t-btn t-btn-grey"><?php echo $section_5['button_title'];?></a>
            </div>
         </div>
      </div>
   </div>
</section>
<?php echo get_template_part('includes/contact');?>
<?php get_footer(); ?>




