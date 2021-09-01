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
                        <li>Edit Account Details</li>
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
                        Edit Account Details
                    </h3>
                    <div class="add-credit-card card">
                        <div class="card-body">
                            <?php
                                $form_attr = array('class' => 'edit-profile-form');
                                echo form_open('edit/' . $user[0]->id . '/submit', $form_attr); 
                            ?>
                                <div class="row" style="text-align: left;">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="acc_email">Email</label>
                                            <?php 
                                                $acc_email = array('type' => 'email', 'name' => 'acc_email', 'class' => 'form-control', 'id' => 'acc_email', 'required' => '', 'value' => $user[0]->email);
                                                echo form_input($acc_email); 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn-hyipox-medium btn-add-new-card">Update</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- account end -->