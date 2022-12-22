<?php /* Template Name: Terms Of Use - Page Template */ ?>
<?php get_header(); 
$terms_banner_section = get_field('terms_banner_section');
?>


<section class="page-title page-title-2" style="background-image:url(<?php echo $terms_banner_section['terms_banner_image'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h1><?php echo $terms_banner_section['terms_banner_heading'];?></h1>   
                </div>
            </div>
        </div>
    </div>
</section>


<section class="port-sec-2" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="term text">
                        <h2>TERMS OF SERVICE AGREEMENT</h2>
                        <?php echo wpautop(the_content());?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();?>