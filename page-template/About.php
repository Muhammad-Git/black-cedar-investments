<?php /* Template Name: About - Page Template */ ?>
<?php get_header(); 
$about_page_banner = get_field('about_page_banner');
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
?>

<section class="page-title" style="background-image:url(<?php echo $about_page_banner['about_banner_image'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h1><?php echo $about_page_banner['about_banner_heading'];?></h1>
                    <p><?php echo $about_page_banner['about_banner_content'];?></p>
                    <!--<a href="<?php echo $about_page_banner['about_banner_page_link'];?>"><?php echo $about_page_banner['about_banner_button_title'];?>-->
                    <a href="#about-1"><?php echo $about_page_banner['about_banner_button_title'];?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/circle.png" alt="">
                    </a>      
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-sec-1 about-sec-1" id="about-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <h2><?php echo $section_1['title'];?></h2>
                        <p><?php echo $section_1['content'];?></p>
                            <a href="<?php echo $section_1['page_link'];?>" class="t-btn btn-bg-2" target="_blank"><?php echo $section_1['button_title'];?></a>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-sec-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2><?php echo get_field('title_our_team');?></h2>
                    </div>
                </div>
            </div>

            <div class="row">

            	<?php  $x=1;  
            	$args = array( 
            		'post_type' => 'team' , 
            		'posts_per_page' => '3',
            		'order'=>'ASC',
            	    ); 
            		$index_query = new WP_Query($args); 
            		while ($index_query->have_posts()) : 
            		$index_query->the_post(); ?>

                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <div class="img">
                            <img src="<?php the_post_thumbnail_url();?>" alt="">
                        </div>
                        <div class="box-text">
                            <h3><?php the_title();?></h3>
                            <h4><?php echo get_field('designation');?></h4>
                            <div class="prg">
                            <?php echo wpautop(the_content());?>
                                <div class="social">
                                  <a href="<?php echo get_field('linkedin');?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $x++; endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>

    <section class="home-sec-4 about-sec-3">
        <div class="container">
            <div class="row">
                <div class="offset-lg-7 col-lg-5 col-md-12 col-sm-12">
                    <div class="text">
                        <h2><?php echo $section_2['title'];?></h2>
                        <?php echo $section_2['content'];?>
                        <a href="<?php echo $section_2['page_link'];?>" class="t-btn" target="_blank"><?php echo $section_2['button_title'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-sec-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2><?php echo $section_3['title'];?></h2>
                    </div>
					<?php if( have_rows('section_3')) : while ( have_rows('section_3') ) : the_row(); ?>

					    <?php if( have_rows('section_3_repeater') ): while ( have_rows('section_3_repeater') ) : the_row(); ?>    
                    <div class="text">
                        <div class="img">
                            <img src="<?php echo get_sub_field('image'); ?>" alt="">
                        </div>
                        <div class="text-box">
                            <h3><?php echo get_sub_field('title'); ?></h3>
                            <p><?php echo get_sub_field('content'); ?></p>
                        </div>
                    </div>
                        <?php endwhile; endif; ?>
                    <?php endwhile; endif; ?>

                   
                </div>


            </div>

            <div class="row">
                <div class="col-md-12 text-lg-center">
                    <a href="<?php echo $section_3['page_link'];?>" class="t-btn t-btn-grey" target="_blank"><?php echo $section_3['button_title'];?></a>
                </div>
            </div>

        </div>
    </section>


<?php echo get_template_part('includes/contact');?>

<?php get_footer(); ?>