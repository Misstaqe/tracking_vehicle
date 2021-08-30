<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- breadcrumb begin -->
<div class="breadcrumb-oitila">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-8">
                <div class="part-txt">
                    <h1>contact</h1>
                    <ul>
                        <li>home</li>
                        <li>contact page</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-4 d-flex align-items-center">
                <div class="part-img">
                    <img src="<?= base_url('assets/img/breadcrumb-img.png'); ?>" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- contact begin -->
<div class="contact contact-page" id="contact">
    <div class="container container-contact">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <div class="section-title">
                    <span class="sub-title">
                        Contact Us
                    </span>
                    <h2>
                        Get in touch<span class="special"> with us</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="bg-tamim">
            <div class="row justify-content-around">
                <div class="col-xl-6 col-lg-6 col-sm-10 col-md-6">
                    <div class="part-form">
                        <?php echo form_open('action/send_email', array('id' => 'contact-form', 'class' => 'form-contact contact_form', 'data-abide' => '', 'novalidate' => '')); ?>
                            <input type="text" name="name" id="name" placeholder="<?=$page['name']?> :">
                            <input type="text" name="email" id="email" placeholder="<?=$page['email']?> :">
                            <input type="number" name="phone" id="phone" placeholder="<?=$page['phone']?> :">
                            <textarea name="message" id="message" placeholder="<?=$page['message']?> :"></textarea>
                            <button type="submit" class="submit-btn def-btn button-contactForm main_btn"><?=$page['send_msg']?></button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                    <div class="part-address">
                        <div class="addressing">
                            <div class="single-address">
                                <h4>Our Office</h4>
                                <p><?= WEBSITE_ADDRESS; ?></p>
                            </div>
                            <div class="single-address">
                                <h4>Email</h4>
                                <p><?= WEBSITE_EMAIL; ?></p>
                            </div>
                            <div class="single-address">
                                <h4>Phone</h4>
                                <p><?= WEBSITE_PHONE; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact end -->

<!-- map begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d429269.42211006227!2d-97.56951529779923!3d32.801078234321494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e6e122dc807ad%3A0xa4af8bf8dd69acbd!2sFort%20Worth%2C%20TX%2C%20USA!5e0!3m2!1sen!2sbd!4v1602530476004!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- map end -->
