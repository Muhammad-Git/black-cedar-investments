<?php /* Template Name: Contact - Page Template */ ?>
<?php get_header(); 

$contact_banner_section = get_field('contact_banner_section');
?>

<section class="page-title cont-sec-1" style="background-image:url(<?php echo $contact_banner_section['contact_banner_image'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h1><?php echo $contact_banner_section['contact_banner_heading'];?></h1>   
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="box after">
                    <p><?php echo $contact_banner_section['contact_content'];?></p>
                    <a href="#" class="t-btn" data-toggle="modal" data-target="#myModal">
                    	<?php echo $contact_banner_section['contact_banner_button_title'];?>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="box">
                    <p><?php echo $contact_banner_section['investor_content'];?></p>
                    <a href="<?php echo $contact_banner_section['investor_page_link'];?>" target="_blank" class="t-btn">
                    	<?php echo $contact_banner_section['investor_button_title'];?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>