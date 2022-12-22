<?php /* Template Name: test Template */ ?>
<?php get_header(); ?>

<section class="contact-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="text">
               <h2>Contact Us</h2>
               <p>Ready to Invest with us or have another inquiry? <br> Contact us today and we will connect with you shortly!</p>
              <?php echo do_shortcode('[contact-form-7 id="94" title="Contact form 1"]');?>
              <h2>Test Form for hub</h2>
              <?php echo do_shortcode('[gravityform id="1" title="true"]');?>
              
              
              
              
              <!--<form action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <input type="text" placeholder="Full Name">
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <input type="email" placeholder="Email">
                                </div>

                                <div class="col-md-12">
                                    <textarea name="" placeholder="Your Message"></textarea>
                                    <button class="t-btn">SEND</button>
                                </div>
                            </div>
                        </form>-->
            </div>
         </div>
      </div>
   </div>
</section>



<?php get_footer(); ?>