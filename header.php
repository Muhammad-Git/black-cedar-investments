<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lib.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!--<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />-->
<title><?php bloginfo( 'title' ); ?></title>
<?php wp_head();?>




<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NXPB4W6RZ9"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-NXPB4W6RZ9');
</script>

</head>
<?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyrite'];
$size = 344;
$options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
$att_img = wp_get_attachment_image($logo, array($size, $size), false);
$logoSrc = wp_get_attachment_url($logo);
$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
?>
<body <?php body_class(); ?>>
    <header class="sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="logo">
                        <a href="<?php echo site_url();?>">
                            <img src="<?php echo $logoSrc;?>" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="nav-list ">
                    	<?php wp_nav_menu(array('menu'=>'Header Menu','menu_class'));?>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php if(is_home() || is_front_page()){ $home_page_banner = get_field('home_page_banner');?>

<section class="home-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="text text-center">
               <h1><?php echo $home_page_banner['home_banner_heading']; ?> </h1>
               <p><?php echo $home_page_banner['home_banner_subheading']; ?></p>
               <!--<a href="<?php echo $home_page_banner['home_banner_page_link']; ?>" class="t-btn"><?php echo $home_page_banner['home_banner_button_title']; ?></a>-->
               <a href="<?php echo $home_page_banner['home_banner_page_link']; ?>" class="t-btn" ><?php echo $home_page_banner['home_banner_button_title']; ?></a>
            </div>
         </div>
      </div>
      <div class="social">
         <a href="<?php echo $options['facebook'];?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
         <a href="<?php echo $options['linkedin'];?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
         <!--<a href="<?php echo $options['twitter'];?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
         <a href="<?php echo $options['instagram'];?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
      </div>
      <!--<div class="start">-->
      <!--    start exploring-->
      <!--</div>-->
   </div>
</section>

<?php }?>