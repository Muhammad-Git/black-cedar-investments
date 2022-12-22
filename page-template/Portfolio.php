<?php /* Template Name: Portfolio - Page Template */ ?>
<?php get_header(); 
$portfolio_banner_section = get_field('portfolio_banner_section');
$section_1 = get_field('section_1');
?>


<section class="page-title page-title-2" style="background-image:url(<?php echo $portfolio_banner_section['portfolio_banner_image'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h1><?php echo $portfolio_banner_section['portfolio_banner_heading'];?></h1>   
                </div>
            </div>
        </div>
    </div>
</section>


<section class="port-sec-2 text-center" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <h2><?php echo $section_1['title'];?></h2>
                        <p><?php echo $section_1['content'];?></p>
                            <a href="#" data-toggle="modal" data-target="#myModal" class="t-btn t-btn-grey mr-5"><?php echo $section_1['contact_button_title'];?></a>
                            <a href="<?php echo $section_1['investor_page_link']?>" class="t-btn t-btn-grey" target="_blank"><?php echo $section_1['investor_button_title'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section class="port-sec-1">
    <div class="container">
        <div class="row">


        	<?php    $x=1;  $args = array( 'post_type' => 'portfolio' , 'posts_per_page' => '3','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>

            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <img src="<?php the_post_thumbnail_url();?>" alt="">    
                    <div class="box-text">
                        <h3><?php echo the_title();?></h3>
                        <p><?php echo the_excerpt();?></p>
                    </div>
                </div>
            </div>

            <?php $x++; endwhile; wp_reset_query(); ?>
           
        </div>
    </div>
</section>



<?php echo get_template_part('includes/contact');?>

<?php get_footer();?>