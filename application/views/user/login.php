<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- breadcrumb begin -->
<div class="breadcrumb-oitila">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-8">
                <div class="part-txt">
                    <h1>login</h1>
                    <ul>
                        <li>home</li>
                        <li>login page</li>
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

<!-- login begin -->
<div class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-7 col-sm-9">
                <div class="form-area">
                    <div class="row no-gutters">
                        <div class="col-xl-6 col-lg-6">
                            <div class="login-form">
                                <?php 
                                  $form_attr = array('id' => 'login-form', 'class' => '');
                                  echo form_open('login/submit', $form_attr); 
                                ?>
                                    <div class="form-group">
                                        <label for="login_acc_email">Email address</label>
                                        <input type="email" name="login_acc_email" id="login_acc_email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="login_acc_pass">Password</label>
                                        <input type="password" name="login_acc_pass" id="login_acc_pass" class="form-control">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">remember me</label>
                                        <button type="submit" class="btn-form">Submit</button>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 d-xl-block d-lg-block d-none">
                            <div class="blank-space"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login end -->