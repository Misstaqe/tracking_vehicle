<?php
defined('BASEPATH') or exit('No direct script access allowed');

if ($this->session->userdata('role') == 'Admin') {
    $disabled = FALSE;
} else {
    $disabled = TRUE;
}
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
                        <li>Edit transaction</li>
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

<div class="user-dashboard">
    <div class="container">
        <div class="withdraw-section">

<?php if (isset($success_message)) : ?>
    <div class="row">
        <div class="small-12 columns">
            <div class="callout success" data-closable>
                <p><?= $success_message ?></p>
                <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php 
    $form_pending = array('id' => 'transaction_edit_form_p', 'class' => 'new-t-form', 'data-abide' => '', 'novalidate' => '');
    $form_expired = array('id' => 'transaction_edit_form_e', 'class' => 'new-t-form', 'data-abide' => '', 'novalidate' => '');
    $form_approved = array('id' => 'transaction_edit_form_a', 'class' => 'new-t-form', 'data-abide' => '', 'novalidate' => '');
    
    if ($transaction[0]->status == '-2') { // pending status
        echo form_open('amend/' . $transaction[0]->reference . '/submit', $form_pending);
?>
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><span class="fa fa-exclamation-circle" aria-hidden="true"></span> There are some errors in your form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 50px;">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h3 class="title">
                        Seller Details
                    </h3>
                    <div class="add-credit-card card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="s_email">Seller Email</label>
                                        <?php
                                            if ($disabled) {
                                                $s_email = array('name' => 's_email', 'id' => 's_email', 'class' => 'form-control', 'type' => 'text', 'disabled' => '', 'value' => $transaction[0]->s_email);
                                            } else {
                                                $s_email = array('name' => 's_email', 'id' => 's_email', 'class' => 'form-control', 'value' => $transaction[0]->s_email);
                                            }
                                            echo form_input($s_email); 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="s_name">Seller Name</label>
                                        <?php
                                            $s_name = array('name' => 's_name', 'id' => 's_name', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->s_name);
                                            echo form_input($s_name); 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="s_address">Seller Address</label>
                                        <?php
                                            $s_address = array('name' => 's_address', 'id' => 's_address', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->s_address);
                                            echo form_input($s_address); 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="s_phone">Seller Phone</label>
                                        <?php
                                            $s_phone = array('name' => 's_phone', 'id' => 's_phone', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->s_phone);
                                            echo form_input($s_phone); 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 50px;">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h3 class="title">
                        Buyer Details
                    </h3>
                    <div class="add-credit-card card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="b_email">Buyer Email</label>
                                        <?php
                                            $b_email = array('name' => 'b_email', 'id' => 'b_email', 'class' => 'form-control', 'required' => '', 'value' => $transaction[0]->b_email);
                                            echo form_input($b_email);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="b_name">Buyer Name</label>
                                        <?php
                                            $s_name = array('name' => 'b_name', 'id' => 'b_name', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->b_name);
                                            echo form_input($s_name); 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="b_address">Buyer Address</label>
                                        <?php
                                            $b_address = array('name' => 'b_address', 'id' => 'b_address', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->b_address);
                                            echo form_input($b_address);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="b_phone">Buyer Phone</label>
                                        <?php
                                            $b_phone = array('name' => 'b_phone', 'id' => 'b_phone', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->b_phone);
                                            echo form_input($b_phone);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 50px;">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h3 class="title">
                        Transaction Details
                    </h3>
                    <div class="add-credit-card card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="p_type">Product Type</label>
                                        <?php
                                            $attributes = array(
                                                'id' => 'p_type',
                                                'class' => 'form-control',
                                                'name' => 'p_type',
                                                'required' => '',
                                            );
                            
                                            $options = array(
                                                'Passenger Car' => 'Passenger Car',
                                                'Van' => 'Van',
                                                'Lorry' => 'Lorry',
                                                'Boat' => 'Boat',
                                                'Motorcycle' => 'Motorcycle',
                                                'Quad (ATV)' => 'Quad (ATV)'
                                            );

                                            echo form_dropdown($attributes, $options, $transaction[0]->p_type);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="p_brief">Product Brief</label>
                                        <?php
                                            $p_brief = array('name' => 'p_brief', 'id' => 'p_brief', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->p_brief);
                                            echo form_input($p_brief); 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="p_value">Product Value</label>
                                        <?php
                                            $p_value = array('name' => 'p_value', 'id' => 'p_value', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->p_value);
                                            echo form_input($p_value);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="p_qty">Product Quantity</label>
                                        <?php
                                            $p_qty = array('name' => 'p_qty', 'id' => 'p_qty', 'class' => 'form-control', 'type' => 'number', 'required' => '', 'min' => '1', 'max' => '100', 'value' => $transaction[0]->p_qty);
                                            echo form_input($p_qty);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="inspection">Days of Inspection</label>
                                        <?php
                                            $inspection = array('name' => 'inspection', 'id' => 'inspection', 'class' => 'form-control', 'type' => 'number', 'required' => '', 'placeholder' => 'Inspection days *', 'min' => '1', 'max' => '14', 'value' => $transaction[0]->inspection_days);
                                            echo form_input($inspection);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="deadline">Transaction Deadline</label>
                                        <div class="date-select from-date">
                                            <input value = "<?= $transaction[0]->deadline; ?>" class="form-control theme_cal_Selected" placeholder="Select Deadline Date" required data-hint="Please choose a Deadline date" tabindex="20" name="deadline" id="deadline"  type="text"  data-role="datebox" data-options='{"mode": "calbox", "overrideDateFormat": "%A, %B %-d, %Y", "useClearButton": true, "useCancelButton": true,"popupPosition": "window", "useFocus": true, "calUsePickers":"true", "useInlineBlind":true, "themeDate": "info", "themeDatePick": "danger","useCollapsedBut":true}'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="p_description">Product Description</label>
                                        <?php
                                            $data = array(
                                                'name' => 'p_description',
                                                'id' => 'p_description',
                                                'class' => 'form-control',
                                                'rows' => '3',
                                                'style' => 'resize:none',
                                                'value' => $transaction[0]->p_description
                                            );
                            
                                            echo form_textarea($data);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 text-center">
                    <button type="submit" class="btn btn-hyipox-2 genric-btn"> Update </button>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 text-center">
                    <a href="<?= base_url('dashboard'); ?>" class="btn-hyipox-2"> Back </a>
                </div>
            </div>
<?php 
        echo form_close();
    } elseif ($transaction[0]->status == '-1') { // expired status
        echo form_open('allow/' . $transaction[0]->reference, $form_expired);
?>
    <div class="row">
        <div class="small-12 columns">
            <?php echo form_fieldset('Transaction Details:', array('class' => 'transaction_details')); ?>

            <label for="inspection">Days of Inspection
                <div class="input-group">
                    <?php
                    $inspection = array('name' => 'inspection', 'id' => 'inspection', 'type' => 'number', 'required' => '', 'placeholder' => 'Inspection days *', 'min' => '1', 'max' => '14', 'value' => $transaction[0]->inspection_days);
                    echo form_input($inspection); ?>
                    <!--                    <div class="input-group-button">
                                            <button class="button" data-negative>-</button>
                                            <button class="button" data-positive>+</button>
                                        </div>-->
                </div>
            </label>
            <label for="deadline">Transaction Deadline
                <?php
                $deadline = array('name' => 'deadline', 'id' => 'deadline', 'type' => 'text', 'required' => '', 'min' => date('Y-m-d'), 'value' => $transaction[0]->deadline);
                echo form_input($deadline); ?>
            </label>
                
            <?php echo form_fieldset_close(); ?>
            <div class="container editF-option-wrapper">
                <button type="submit" class="button col-sm-6" value="submit">Update</button>
                <a class="button secondary col-sm-6" href="<?= site_url('dashboard') ?>">Back</a>
            </div>
    
        </div>
    </div>
<?php
        echo form_close();
    } elseif ($transaction[0]->status > '0') { // approved status
        echo form_open('continue/' . $transaction[0]->reference, $form_approved);
?>

    <!-- Start Status -->
    <section id="progress_status_section">
        <div class="progress">
          <div class="progress_inner">
            <div class="progress_inner__step">
              <label for="step-1">Transaction approved</label>
            </div>
            <div class="progress_inner__step">
              <label for="step-2">Awaiting payment</label>
            </div>
            <div class="progress_inner__step">
              <label for="step-3">Payment confirmed</label>
            </div>
            <div class="progress_inner__step">
              <label for="step-4"> Transport in progress</label>
            </div>
            <div class="progress_inner__step">
              <label for="step-5">Delivery finished</label>
            </div>
        <?php

            for ($i=1; $i <= 5 ; $i++) { 
                if ($i == $transaction[0]->status) {
        ?>
            <input checked="checked" id="step-<?php echo $i ?>" name="step" type="radio" value="<?php echo $i ?>">
        <?php
                } else {
        ?>
            <input id="step-<?php echo $i ?>" name="step" type="radio" value="<?php echo $i ?>">
        <?php
                }
            }
        ?>
            <div class="progress_inner__bar"></div>
            <div class="progress_inner__bar--set"></div>
            <div class="progress_inner__tabs">
              <div class="tab tab-0">
                <h1>Transaction approved</h1>
              </div>
              <div class="tab tab-1">
                <h1>Awaiting payment</h1>
              </div>
              <div class="tab tab-2">
                <h1>Payment confirmed</h1>
              </div>
              <div class="tab tab-3">
                <h1> Transport in progress</h1>
              </div>
              <div class="tab tab-4">
                <h1>Delivery finished</h1>
              </div>
            </div>
            <div class="progress_inner__status">

            </div>
          </div> 
        </div>
    </section>

    <div style="display: flex;">
        <button type="submit" class="button col-sm-6 genric-btn info" value="submit">Update</button>
        <a class="button secondary col-sm-6" href="<?= site_url('dashboard') ?>">Back</a>
    </div>
    <!-- End Status -->
<?php } 
    echo form_close();
?>
    
        </div>
    </div>
</div>