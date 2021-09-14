<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- breadcrumb begin -->
<div class="breadcrumb-oitila">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-8">
                <div class="part-txt">
                    <h1>track your vehicle</h1>
                    <ul>
                        <li>home</li>
                        <li>track your vehicle</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-4 d-flex align-items-center">
                <div class="part-img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- account begin -->
<div class="user-dashboard">
    <div class="container">
        <div class="row">
            <?php if (isset($contact_errors)) echo $contact_errors; ?>
            <?php if ($this->uri->segment(3) && $this->uri->segment(3) == 'success') : ?>
                <div class="success">
                    Email sent!
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5">
                <h3 class="title">
                    Track Your Transaction
                </h3>
                <div class="add-credit-card card">
                    <div class="card-body">
                        <?php
                        $form_attr = array('class' => 'tracking-form', 'data-abide' => '', 'novalidate' => '');
                        echo form_open('track/submit', $form_attr);
                        ?>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="tracking">Please input tracking number to track your vehicle quickly.</label>
                                    <input type="text" name="tracking" class="form-control" id="tracking" placeholder="EX123456" required />
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-hyipox-medium btn-add-new-card">Track</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7">
                <?php echo form_open('action/send_email', array('id' => 'contact-form', 'data-abide' => '', 'novalidate' => '')); ?>
                <h3 class="title">
                    Having trouble? Let us know and we will help
                </h3>
                <div class="last-step">
                    <div>
                        <div class="form-group">
                            <label for="name">Enter Your Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter your name here'" required />
                        </div>

                        <div class="form-group">
                            <label for="email">Enter Your Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required />
                        </div>

                        <div class="form-group">
                            <label for="phone">Enter Your Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter your phone number here'" required />
                        </div>

                        <div class="form-group">
                            <label for="message">Enter Your Message</label>
                            <textarea name="message" id="message" class="form-control" rows="5" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="finish-button">
                    <button type="submit" value="send" class="btn-hyipox-2">SEND ENQUIRY</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>