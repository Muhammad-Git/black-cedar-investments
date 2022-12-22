<?php /* Template Name: Privacy Policy - Page Template */ ?>
<?php get_header(); 
$policy_banner_section = get_field('policy_banner_section');
?>


<section class="page-title page-title-2" style="background-image:url(<?php echo $policy_banner_section['policy_banner_image'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h1><?php echo $policy_banner_section['policy_banner_heading'];?></h1>   
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