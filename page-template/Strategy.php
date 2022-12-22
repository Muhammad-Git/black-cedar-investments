<?php /* Template Name: Strategy - Page Template */ ?>
<?php get_header(); 
$strategy_banner_section = get_field('strategy_banner_section');
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_5 = get_field('section_5');
$section_6 = get_field('section_6');
?>

<section class="page-title stra-title" style="background-image:url(<?php echo $strategy_banner_section['strategy_banner_image']?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h1><?php echo $strategy_banner_section['strategy_banner_heading'];?></h1>
                    <h6><?php echo $strategy_banner_section['strategy_subheading'];?></h6>
                    <p><?php echo $strategy_banner_section['strategy_banner_content'];?></p>
                    <a href="#stra-sec-1">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/10/1-2.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="stra-sec-1" id="stra-sec-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading text-center">
                    <h2><?php echo $section_1['title'];?></h2>
                </div>
                <div class="text"><?php echo $section_1['content'];?></p>
                </div>
            </div>
        </div>

        <div class="row">
        	
            <?php if(have_rows('section_1')) : while(have_rows('section_1')): the_row();?>
            	<?php if(have_rows('section_1_repeater')) : while(have_rows('section_1_repeater')): the_row();?>
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <img src="<?php echo get_sub_field('image');?>" alt="">
                    <h3><?php echo get_sub_field('title');?></h3>
                    <p><?php echo get_sub_field('content');?></p>
                </div>
            </div>
        <?php endwhile; endif;?>
        <?php endwhile; endif;?>
            

        </div>
    </div>
</section>


<section class="home-sec-1 about-sec-1 stra-sec-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h2><?php echo $section_2['title'];?></h2>
                    <h3><?php echo $section_2['subtitle'];?></h3>
                    <?php echo $section_2['content'];?>
                     <a href="https://blackcedarinvestments.investnext.com" class="t-btn t-btn-grey" target="_blank"> Invest with Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stra-sec-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h2><?php echo $section_3['title'];?> </h2>
                    <p><?php echo $section_3['content'];?></p>
                    <a href="#" data-toggle="modal" data-target="#myModaljoin"><?php echo $section_3['button_title'];?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stra-sec-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text text-center">
                    <h2><?php echo $section_5['title'];?></h2>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/strategy/range.png" class="range" alt="">
                </div>
            </div>
        </div>
          <div class="box-slider non-mob">
                
    
                    <?php if(have_rows('section_5')) : while(have_rows('section_5')) : the_row();?>
        		<?php $x==1;  if(have_rows('section_5_repeater')) : while(have_rows('section_5_repeater')) : the_row();?>
                        <div class="<?php if($x==2){ echo 'thirdslide' ; } else{''; } ?>" >
                            <div class="box">
                    <h3><?php echo get_sub_field('title');?></h3>
                    <ul>
                      <?php echo get_sub_field('content');?>
                    </ul>
                </div>
                        </div>
                   
                 <?php $x++; endwhile; endif;?>
        <?php endwhile; endif;?>
         
            </div>
             <div class="row">
        <!--<div class="col-md-12 text-center mt-3 btm-text">-->
        <!--    <p><?php echo $section_5['content'];?></p>-->
        <!--    </div>-->
            </div>
         <div class="none-mobile">
             <div class="row">

        	<?php if(have_rows('section_5')) : while(have_rows('section_5')) : the_row();?>
        		<?php if(have_rows('section_5_repeater')) : while(have_rows('section_5_repeater')) : the_row();?>
            <div class="col-lg-3 col-md-6">
                <div class="box">
                    <h3><?php echo get_sub_field('title');?></h3>
                    <ul>
                      <?php echo get_sub_field('content');?>
                    </ul>
                </div>
            </div>
        <?php endwhile; endif;?>
        <?php endwhile; endif;?>
           </div>
           <div class="row">
            <div class="col-md-12 text-center mt-3 btm-text">
            <p><?php echo $section_5['content'];?></p>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="stra-sec-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text text-center">
                    <h2><?php echo $section_6['title'];?></h2>
                </div>

                <div class="main-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/strategy/line.jpg" class="line" alt="">
                    <?php if(have_rows('section_6')) : while(have_rows('section_6')) : the_row(); ?>
                    	<?php if(have_rows('section_repeater')) : $x=1; while(have_rows('section_repeater')) : the_row(); ?>
                    	<?php if($x % 2 == '0'){?>
                    <div class="box  box-left box-<?php echo $x;?>">

                        <div class="box-text">
                            <h4><?php echo get_sub_field('title');?></h4>
                            <p><?php echo get_sub_field('content');?></p>
                        </div>

                        <div class="icon">
                            <img src="<?php echo get_sub_field('image');?>" alt="">
                        </div>
                    </div>
                    
                <?php } else { ?>
                    <div class="box box-right box-<?php echo $x;?>">
                        <div class="icon">
                            <img src="<?php echo get_sub_field('image');?>" alt="">
                        </div>
                        <div class="box-text">
                            <h4><?php echo get_sub_field('title');?></h4>
                            <p><?php echo get_sub_field('content');?></p>
                        </div>
                    </div>
                <?php } ?>
                <?php $x++; endwhile; endif;?>
                 <?php endwhile; endif;?>
                    

                </div>

            </div>
        </div>

        <div class="col-md-12 text-center">
            <!--<a href="<?php echo $section_6['page_link'];?>" class="t-btn t-btn-grey"><?php echo $section_6['button_title'];?></a>-->
             <a href="<?php echo $section_6['page_link'];?>" class="t-btn t-btn-grey" target="_blank"><?php echo $section_6['button_title'];?></a>
            
            <p class="get-started"> <br> <br> <?php echo $section_6['content'];?></p>
        </div>
    </div>
</section>


<?php echo get_template_part('includes/contact');?>


<?php get_footer();?>


