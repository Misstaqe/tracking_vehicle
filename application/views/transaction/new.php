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
                        <li>new transaction</li>
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
        <div class="withdraw-section">
            <?php 
                $form_attr = array('class' => 'new-t-form', 'data-abide' => '', 'novalidate' => '');
                echo form_open('new/submit', $form_attr); 
            ?>
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
                                            <label for="acc_email">Seller Email</label>
                                            <?php
                                                if ($disabled) {
                                                    $s_email = array('name' => 's_email', 'id' => 's_email', 'class' => 'form-control', 'type' => 'text', 'disabled' => '', 'value' => (isset($my_email) && $this->session->userdata('role') != 'Admin') ? $my_email : '', 'placeholder' => 'Seller Email *');
                                                } else {
                                                    $s_email = array('name' => 's_email', 'id' => 's_email', 'class' => 'form-control', 'value' => (isset($my_email) && $this->session->userdata('role') != 'Admin') ? $my_email : '', 'placeholder' => 'Seller Email *');
                                                }
                                                echo form_input($s_email); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="s_name">Seller Name</label>
                                            <?php
                                                $s_name = array('name' => 's_name', 'id' => 's_name', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'placeholder' => 'Seller Name *');
                                                echo form_input($s_name); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="s_address">Seller Address</label>
                                            <?php
                                                $s_address = array('name' => 's_address', 'id' => 's_address', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'placeholder' => 'Seller Address *', 'aria-describedby' => 'sellerAddressHelpText');
                                                echo form_input($s_address); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="s_phone">Seller Phone</label>
                                            <?php
                                                $s_phone = array('name' => 's_phone', 'id' => 's_phone', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'placeholder' => 'Seller Phone');
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
                                                echo form_dropdown($attributes, $options);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="p_brief">Product Brief</label>
                                            <?php
                                                $p_brief = array('name' => 'p_brief', 'id' => 'p_brief', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'placeholder' => 'Short Product Description *');
                                                echo form_input($p_brief); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="p_value">Product Value</label>
                                            <?php
                                                $p_value = array('name' => 'p_value', 'id' => 'p_value', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'placeholder' => 'Product Value *');
                                                echo form_input($p_value); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="p_qty">Product Quantity</label>
                                            <?php
                                                $p_qty = array('name' => 'p_qty', 'id' => 'p_qty', 'class' => 'form-control', 'type' => 'number', 'required' => '', 'placeholder' => 'Product Quantity *', 'min' => '1', 'max' => '100');
                                                echo form_input($p_qty); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="inspection">Days of Inspection</label>
                                            <?php
                                                $inspection = array('name' => 'inspection', 'id' => 'inspection', 'class' => 'form-control', 'type' => 'number', 'required' => '', 'placeholder' => 'Inspection days *', 'min' => '1', 'max' => '14', 'aria-describedby' => 'inspectionHelpText');
                                                echo form_input($inspection); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="t_type">Transaction Type</label>
                                            <?php
                                                $attributes = array(
                                                    'id' => 't_type',
                                                    'class' => 'form-control',
                                                    'name' => 't_type',
                                                    'required' => '',
                                                );

                                                $options = array(
                                                    'Enclosed Transport' => 'Enclosed Transport',
                                                    'Open Transport' => 'Open Transport'
                                                );
                                                echo form_dropdown($attributes, $options); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="deadline">Transaction Deadline</label>
                                            <div class="date-select from-date">
                                                <input class="form-control theme_cal_Selected" placeholder="Select Deadline Date" required data-hint="Please choose a Deadline date" tabindex="20" name="deadline" id="deadline"  type="text"  data-role="datebox" data-options='{"mode": "calbox", "overrideDateFormat": "%A, %B %-d, %Y", "useClearButton": true, "useCancelButton": true,"popupPosition": "window", "useFocus": true, "calUsePickers":"true", "useInlineBlind":true, "themeDate": "info", "themeDatePick": "danger","useCollapsedBut":true}'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="p_description">Product Description</label>
                                            <?php
                                                $data = array(
                                                    'id' => 'p_description',
                                                    'class' => 'form-control',
                                                    'name' => 'p_description',
                                                    'rows' => '3',
                                                    'style' => 'resize:none'
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

                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h3 class="title">
                            Bank Details
                        </h3>
                        <div class="add-credit-card card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="b_detail_1">Account Owner Name</label>
                                            <?php
                                                $b_detail_1 = array(
                                                    'id' => 'b_detail_1', 
                                                    'class' => 'form-control', 
                                                    'name' => 'b_detail_1', 
                                                    'type' => 'text', 
                                                    'required' => '', 
                                                    'placeholder' => 'Account Owner Name'
                                                );
                                                echo form_input($b_detail_1); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="b_detail_1">Account Owner Sex</label>
                                            <?php
                                                $attributes = array(
                                                    'id' => 'b_detail_1_2',
                                                    'class' => 'form-control',
                                                    'name' => 'b_detail_1_2',
                                                    'required' => '',
                                                    'placeholder' => 'Account Owner Sex'
                                                );

                                                $options = array(
                                                    '1' => 'Female 1',
                                                    '2' => 'Female 2',
                                                    '3' => 'Female 3',
                                                    '4' => 'Male 1',
                                                    '5' => 'Male 2',
                                                    '6' => 'Male 3'
                                                );
                                                echo form_dropdown($attributes, $options); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="b_detail_2">IBAN</label>
                                            <?php
                                                $b_detail_2 = array('name' => 'b_detail_2', 'id' => 'b_detail_2', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'placeholder' => 'Bank Detail 2 *');
                                                echo form_input($b_detail_2); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="b_detail_3">BIC/SWIFT</label>
                                            <?php
                                                $b_detail_3 = array('name' => 'b_detail_3', 'id' => 'b_detail_3', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'placeholder' => 'Bank Detail 3 *');
                                                echo form_input($b_detail_3); 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="b_detail_4">BANK</label>
                                            <?php
                                                $b_detail_4 = array('name' => 'b_detail_4', 'id' => 'b_detail_4', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'placeholder' => 'Bank Detail 4 *');
                                                echo form_input($b_detail_4); 
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
                        <button type="submit" class="btn btn-hyipox-2"> Create </button>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 text-center">
                        <a href="<?= base_url('dashboard'); ?>" class="btn-hyipox-2"> Back </a>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
        
    </div>
</div>
<!-- account end -->