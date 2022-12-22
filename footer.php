 <?php
global $logo;
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyright'];
$logoSrc = wp_get_attachment_url($logo);

 ?>

           


    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <?php wp_nav_menu(array('menu'=>'Footer Menu 1','menu_class'));?>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="logo text-center">
                        <a href="<?php echo site_url();?>">
                            <img src="<?php echo $logoSrc;?>" alt="">
                        </a>
                    </div>
                </div>

                <div class="offset-lg-2 col-lg-2 col-md-12">
                    <?php wp_nav_menu(array('menu'=>'Footer Menu 2','menu_class'));?>
                    <ul>
                       <li><a href="javascript:;" data-toggle="modal" data-target="#myModal">contact US</a></li>
                    </ul>
                    
                
                           <div class="social">
                             <a href="<?php echo $options['facebook'];?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                             <a href="<?php echo $options['linkedin'];?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                             <!--<a href="<?php echo $options['twitter'];?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                             <a href="<?php echo $options['instagram'];?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
                          </div>
                     
                </div>
            </div>

        </div>

        <div class="f-btm">
            <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="copy"><?php echo $options['copyright'];?></p>
                </div>

                <div class="col-lg-6 col-md-12">
                    <p class="copy text-right"><?php echo $options['FooterAbout'];?></p>
                </div>
            </div>
            </div>
        </div>
    </footer>
    


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
<button type="button" class="close" data-dismiss="modal">&times;</button>
     
     

      <!-- Modal body -->
      <div class="modal-body">
           <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
            <script>
            hbspt.forms.create({
            region: "na1",
            portalId: "23126024",
            formId: "61dc3cef-47f0-4a87-904f-c756955d23ef"
            });
            </script>
      </div>

     

    </div>
  </div>
</div>



<div class="modal" id="myModaljoin">
  <div class="modal-dialog">
    <div class="modal-content">
<button type="button" class="close" data-dismiss="modal">&times;</button>
     
     

      <!-- Modal body -->
      <div class="modal-body">
           <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
<script>
  hbspt.forms.create({
    region: "na1",
    portalId: "22330879",
    formId: "9b39cec5-d42c-44d1-8314-67b0514d09e6"
  });
</script>
      </div>

     

    </div>
  </div>
</div>



<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow-animate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
<script type="text/javascript">

      $(window).scroll(function(){
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});


$(document).on('ready', function () {

         


    wow = new WOW(
        {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
        }
    );
    
    wow.init(); 
    

      
      
});

$(".box-slider").slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
 
    autoplay:false,
  slidesToShow: 4,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: '30px',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
         autoplay:true,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2,
        dots: true,
      },
    },
  
  ],
});

</script>




 <script>
    // $('.forpop').click(function () {
    //     $(".popup").fadeIn();
    //     $(".pop-overlay").fadeIn();

    // });
    // $('.closePop,.pop-overlay').click(function () {
    //     $('.popup').fadeOut();
    //     $('.pop-overlay').fadeOut();
    // });
    // </script>



   <script>
    //   $(".applyjob").click(function (e) {
    //   var title = $(this).attr("cmstitle");
    //   $(".job_title").val(title);
    // });
    

    
       $( ".home-sec-3 .row > .col-lg-2.col-md-4.col-sm-12:first-child .box" ).addClass( 'active');
    
    $('.home-sec-3  .box').click(function(e) {

        $('.home-sec-3  .box').removeClass('active');

        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        //e.preventDefault();
    });
    
    
    
    </script>
</body>
</html>
