<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- breadcrumb begin -->
<div class="breadcrumb-oitila db-breadcrumb">
    <div class="container">
        <div class="row justify-content-lg-around">
            <div class="col-xl-6 col-lg-7 col-md-5 col-sm-6 col-8">
                <div class="part-txt">
                    <h1>Admin</h1>
                    <ul>
                        <li>home</li>
                        <li>change password</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-7 col-sm-6 col-4 d-flex align-items-center">
                <div class="db-user-profile">
                    <div class="part-data">
                        <span class="name">Administrator</span>
                        <ul>
                            <li>
                                <span class="text">Invest</span>
                                <span class="number">$100</span>
                            </li>
                            <li>
                                <span class="text">Earings</span>
                                <span class="number">$250</span>
                            </li>
                        </ul>
                    </div>
                    <div class="part-img">
                        <img src="<?= base_url('assets/img/member-1.jpg'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- account begin -->
<div class="user-dashboard">
    <div class="container">

        <div class="withdraw-section" style="max-width: 800px; margin: 0 auto;">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h3 class="title">
                        Change Password
                    </h3>
                    <div class="add-credit-card card">
                        <div class="card-body">
                            <?php
                                $form_attr = array('class' => 'change-password-form', 'data-abide' => '', 'novalidate' => '');
                                echo form_open('change_password/' . $user[0]->id . '/submit', $form_attr); 
                            ?>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="old_acc_pass">Password</label>
                                            <?php 
                                                $acc_pass = array('name' => 'old_acc_pass', 'id' => 'old_acc_pass', 'class' => 'form-control', 'type' => 'password', 'required' => '');
                                                echo form_input($acc_pass); 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="new_acc_pass">New Password</label>
                                            <?php 
                                                $acc_pass = array('name' => 'new_acc_pass', 'id' => 'new_acc_pass', 'class' => 'form-control', 'type' => 'password', 'required' => '');
                                                echo form_input($acc_pass); 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="new_acc_pass_confirm">Confirm New Password</label>
                                            <?php 
                                                $acc_pass = array('name' => 'new_acc_pass_confirm', 'id' => 'new_acc_pass_confirm', 'class' => 'form-control', 'type' => 'password', 'required' => '');
                                                echo form_input($acc_pass); 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="text-align: center;">
                                    <div class="col-xl-6 col-lg-6">
                                        <a href="<?= base_url('dashboard'); ?>" class="btn-hyipox-medium btn-add-new-card">Back to dashboard</a>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <button type="submit" class="btn-hyipox-medium btn-add-new-card">Update</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- account end -->