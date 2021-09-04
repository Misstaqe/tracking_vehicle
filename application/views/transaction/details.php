<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- breadcrumb begin -->
<div class="breadcrumb-oitila">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-8">
                <div class="part-txt">
                    <h1>transaction details</h1>
                    <ul>
                        <li>home</li>
                        <li>transaction details page</li>
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

<div class="user-dashboard">
    <div class="container">
        <div class="profile">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
                            <h3 class="title">Transaction Reference: <?= $transaction[0]->reference ?></h3>
                            <div class="player-profile">
                                <div class="row no-gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="player-card">  
                                            <div class="part-pic">
                                                <?php
                                                    $url = 'public/img/agencies/' . $transaction[0]->b_detail_1_2 . '.jpg';
                                                ?>
                                                <img src="<?= base_url($url); ?>" alt="">
                                            </div>
                                            <div class="social-link clr-white">
                                                <a href="#" class="clr-white">
                                                    <h4><?= $transaction[0]->b_detail_1 ?></h4>
                                                </a><hr>
                                                <p>Our company agent is responsible for your transaction. 
                                                The company agent will process your payment and assist you with your transaction. 
                                                You can contact our agent at <strong>contact@smdglogistic.com</strong> or at <strong>+498005007015</strong> and indicate your transaction ID </span><strong><?= $transaction[0]->reference ?></strong>. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8">
                                        <!-- Seller Details -->
                                        <div class="part-info">
                                            <span class="player-name">
                                                PICK-UP LOCATION
                                                <img class="details_info_img" src="<?= base_url('public/img/services/pick-up.png'); ?>" alt="">
                                            </span>
                                            <ul>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Address :</span>   
                                                    <span class="value"><?= $transaction[0]->s_address ?></span>   
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Transaction Details -->
                                        <div class="part-info">
                                            <span class="player-name">
                                                TRANSACTION DETAILS
                                                <form class="detail-value" method="post" action="<?= base_url('action/print_invoice/'. $transaction[0]->reference); ?>">
                                                    <button type="submit" class="btn btn-primary float-right"> PRINT INVOICE </button>
                                                </form>
                                            </span>
                                            <ul>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Vehicle :</span>   
                                                    <span class="value"><?= $transaction[0]->p_brief ?></span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Vehicle description :</span>   
                                                    <span class="value"><?= $transaction[0]->p_description ?></span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Value &euro; :</span>   
                                                    <span class="value"><?= $transaction[0]->p_value ?></span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Inspection period :</span>   
                                                    <span class="value"><?= $transaction[0]->inspection_days ?> Day(s)</span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Client ID number :</span>   
                                                    <span class="value">K0620881</span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Invoice number :</span>   
                                                    <span class="value">PB842021</span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Transport method :</span>   
                                                    <span class="value">Open Transport</span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Transport type :</span>   
                                                    <span class="value">Express Transport</span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Transport status :</span>   
                                                    <span class="value">Vehicle to be collected</span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Payment method :</span>   
                                                    <span class="value">Upfront Bank Transfer</span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Transaction date :</span>   
                                                    <span class="value"><?= date("d-m-Y"); ?></span>   
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Buyer Details -->
                                        <div class="part-info">
                                            <span class="player-name">
                                                DELIVERY ADDRESS
                                                <img class="details_info_img" src="<?= base_url('public/img/services/delivery.png'); ?>" alt="">
                                            </span>
                                            <ul>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Name :</span>   
                                                    <span class="value"><?= $transaction[0]->b_name; ?></span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> Address :</span>   
                                                    <span class="value"><?= $transaction[0]->b_address; ?></span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> City :</span>   
                                                    <span class="value"><?= $transaction[0]->b_city; ?></span>   
                                                </li>
                                                <li>
                                                    <span class="property"><i class="fas fa-info-circle"></i> IP Address :</span>   
                                                    <span class="value"><?= $transaction[0]->ip_address; ?></span>   
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php if ($this->session->userdata('role') == 'Admin') : ?>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                        <a href="<?= site_url('dashboard') ?>" class="btn btn-hyipox-2 genric-btn"> Back to Admin Area </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
