<?php
/**
 * Developer: Apple-vCTO.
 * Date: 05/03/2020
 * Email: applepopov803@gmail.com
 */

defined('BASEPATH') OR exit('No direct script access allowed');

?>

  <!--================ Home Banner Area =================-->
  <section class="home_banner_area banner-area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="banner_content d-flex flex-md-row flex-column">
              <div class="banner-left text-md-right">
                <h1 class="text-uppercase">Contact Us</h1>
              </div>
              <div class="banner-right position-relative">
                <p>
                  Send an email or give us a call!
                </p>
                <span class="main_btn mt-4 mt-md-0" href="#">
                  <a href="<?=base_url()?>" class="text-white">Home</a>
                  <i class="fa fa-arrow-right mx-2"></i>
                  <a href="<?=base_url()?>site/contact" class="text-white">Contact</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->


  <!-- ================ contact section start ================= -->
  <section class="section_gap">
    <div class="container">
      <?php if(isset($success_message) && !is_null($success_message)) { ?>
      <div>
          <span class="label success" style="width: 100%; line-height: 30px; margin-bottom: 15px;"><i class="fa fa-check"></i> <?=$success_message;?></span>
      </div>
      <?php } ?>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch - We are ONLINE now!</h2>
        </div>
        <div class="col-lg-8">
          <!-- <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate"> -->
          <?php echo form_open('action/send_email', array('id' => 'contact-form', 'class' => 'form-contact contact_form', 'data-abide' => '', 'novalidate' => '')) ?>
          <?php if (isset($contact_errors)) echo $contact_errors; ?>
          <?php if ($this->uri->segment(3) && $this->uri->segment(3) == 'success'): ?>
            <div class="success">
                Email sent!
            </div>
          <?php endif; ?>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <textarea onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=$page['message']?>: '" placeholder="<?=$page['message']?>: " class="form-control w-100" rows="9" cols="30" id="message" name="message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=$page['name']?>: *'" placeholder="<?=$page['name']?>: *" type="text" name="name" id="name" class="form-control" value="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=$page['email']?>: *'" placeholder="<?=$page['email']?>: *" type="email" name="email" id="email" class="form-control" value="">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=$page['phone']?>: *'" placeholder="<?=$page['phone']?>: *" type="number" name="phone" id="phone" class="form-control" value="">
                </div>
              </div>
            </div>
            <div class="form-group mt-2 mb-5 mb-lg-0">
              <button type="submit" class="button button-contactForm main_btn"><?=$page['send_msg']?></button>
            </div>
          <?php echo form_close(); ?>
        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
            <div class="media-body">
              <h3><a href="tel:+498005007015"><?=WEBSITE_PHONE?></a></h3>
              <p>Mon to Fri 9am to 6pm</p>
              <p>English speaking support team</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-envelope-o"></i></span>
            <div class="media-body">
              <h3><a href="mailto:contact@smdglogistic.com"><?=WEBSITE_EMAIL?></a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

