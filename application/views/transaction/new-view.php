<?php
defined('BASEPATH') or exit('No direct script access allowed');

$ip_address = "saved in db";
if ($transaction[0]->ip_address != "") {
    $ip_address = $transaction[0]->ip_address;
}
?>

<!-- breadcrumb begin -->
<div class="breadcrumb-oitila">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-8">
                <div class="part-txt">
                    <h1>tracking details</h1>
                    <ul>
                        <li>home</li>
                        <li>tracking details page</li>
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

            <?php if (($transaction[0]->status == '-2') || ($transaction[0]->status == '1')) : ?>

                <?php if (!empty($transaction)) : ?>

                    <?php
                    $form_attr = array(
                        'method' => 'post'
                    );
                    echo form_open('action/update_transaction_details', $form_attr);
                    ?>
                    <div class="stages-container">
                        <?php if ($transaction[0]->status == '-2') : ?>
                            <!-- Start Displaying New Transaction to approve and continue -->
                            <div class="stage">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
                                                <h3 class="title">Tracking details for #<?= $transaction[0]->reference ?></h3>
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
                                                                    </a>
                                                                    <hr>
                                                                    <p>Our company agent is responsible for your transaction. The company agent will process your payment and assist you with your transaction. If you have questions use the contact form and indicate your transaction ID </span><strong><?= $transaction[0]->reference ?></strong>.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-8 col-lg-8 col-md-8">
                                                            <!-- Seller Details -->
                                                            <div class="part-info">
                                                                <span class="player-name">
                                                                    Seller Details/Pick-up Location
                                                                </span>
                                                                <ul>
                                                                    <li>
                                                                        <span class="property"><i class="fas fa-info-circle"></i> Name :</span>
                                                                        <span class="value"><?= $transaction[0]->s_name ?></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="property"><i class="fas fa-info-circle"></i> Address :</span>
                                                                        <span class="value"><?= $transaction[0]->s_address ?></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- Transaction Details -->
                                                            <div class="part-info">
                                                                <span class="player-name">
                                                                    Transaction Details
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
                                                                        <span class="property"><i class="fas fa-info-circle"></i> Vehicle type :</span>
                                                                        <span class="value"><?= $transaction[0]->p_type; ?></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="property"><i class="fas fa-info-circle"></i> Value &euro; :</span>
                                                                        <span class="value"><?= $transaction[0]->p_value; ?></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="property"><i class="fas fa-info-circle"></i> Inspection period :</span>
                                                                        <span class="value"><?= $transaction[0]->inspection_days ?> Day(s)</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- Additional Information -->
                                                            <div class="part-info">
                                                                <span class="player-name">
                                                                    Additional Information
                                                                </span>
                                                                <ul>
                                                                    <li>
                                                                        <span class="property"><i class="fas fa-info-circle"></i> Transport Method :</span>
                                                                        <span class="value"><?= $transaction[0]->t_type; ?></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="property"><i class="fas fa-info-circle"></i> Transport Type :</span>
                                                                        <span class="value">Express Transport</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="property"><i class="fas fa-info-circle"></i> Transport Status :</span>
                                                                        <span class="value">Vehicle to be collected</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="property"><i class="fas fa-info-circle"></i> Payment Method :</span>
                                                                        <span class="value">Bank Transfer</span><br>
                                                                        <div>
                                                                            <img src="<?= base_url('public/img/sepa.png'); ?>" style="height: 30px; display: inline-block;">
                                                                            <img src="<?= base_url('public/img/bank.png'); ?>" style="width: 70px; display: inline-block;">
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <span class="property"><i class="fas fa-info-circle"></i> Transaction Status :</span>
                                                                        <span class="value">
                                                                            <img src="<?= base_url('public/img/pending_LOGO.png'); ?>" style="width: 50px; display: inline-block;">
                                                                            Pending Response
                                                                        </span>
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

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 text-center">
                                        <a href="<?= base_url('transaction-accept'); ?>" class="btn btn-hyipox-2 response-button" data-reference-number="<?= $transaction[0]->reference ?>" data-response="approve" role="button" data-id="<?= $transaction[0]->pin; ?>">
                                            Accept
                                        </a>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 text-center">
                                        <a href="<?= base_url('transaction-decline'); ?>" class="btn btn-hyipox-2 response-button" data-reference-number="<?= $transaction[0]->reference ?>" data-response="decline" role="button" data-id="<?= $transaction[0]->pin; ?>">
                                            <i class="fa fa-close"></i>
                                            Decline
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Displaying New Transaction -->
                        <?php endif ?>
                        <!-- Start Displaying Buyer Details to input -->
                        <div class="stage">
                            <div class="withdraw-section">
                                <div class="row" style="margin-bottom: 30px;">
                                    <div class="col-xl-12 col-lg-12">
                                        <h3 class="title">
                                            Please select delivery address
                                        </h3>
                                        <div class="add-credit-card card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <label for="b_name">Name</label>
                                                            <input type="text" name="b_name" id="b_name" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="b_address">Address</label>
                                                            <input type="text" name="b_address" id="b_address" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="b_city">City</label>
                                                            <input type="text" name="b_city" id="b_city" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="b_postal_code">Postal code</label>
                                                            <input type="text" name="b_postal_code" id="b_postal_code" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="b_phone">Phone number</label>
                                                            <input type="number" name="b_phone" id="b_phone" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="b_email">Email</label>
                                                            <input type="text" name="b_email" id="b_email" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="b_country">Country</label>
                                                            <input type="text" name="b_country" id="b_country" class="form-control" />
                                                        </div>

                                                        <input type="hidden" name="id" value="<?= $transaction[0]->id; ?>">
                                                        <input type="hidden" name="reference" value="<?= $transaction[0]->reference; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-xl-12 col-lg-12">
                                        <a class="go-ahead btn-hyipox-medium btn-add-new-card"><i class="fa fa-check"></i> Next </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Displaying Buyer Details -->
                        <!-- Start Displaying Payment Details to confirm -->
                        <div class="stage">
                            <div class="row justify-content-center">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="tab-content" id="v-pills-tabContent" style="padding: 5px;">
                                        <div class="tab-pane fade show active" id="personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
                                            <h3 class="title">Transaction ID <?= $transaction[0]->reference ?> summary</h3>
                                            <div class="player-profile">
                                                <div class="row no-gutters">
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <!-- Payment Details -->
                                                        <div class="part-info">
                                                            <span class="player-name">
                                                                Payment Details
                                                            </span>
                                                            <ul>
                                                                <li>
                                                                    <span class="property"><i class="fas fa-info-circle"></i> Vehicle :</span>
                                                                    <span class="value"><?= $transaction[0]->p_brief; ?></span>
                                                                </li>
                                                                <li>
                                                                    <span class="property"><i class="fas fa-info-circle"></i> Value :</span>
                                                                    <span class="value"><?= $transaction[0]->p_value; ?></span>
                                                                </li>
                                                                <li>
                                                                    <span class="property"><i class="fas fa-info-circle"></i> Inspection time :</span>
                                                                    <span class="value"><?= $transaction[0]->inspection_days; ?></span>
                                                                </li>
                                                            </ul>
                                                            <p style="margin-top: 30px;">*Your payment will be processed in <?= $transaction[0]->b_detail_4; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <!-- Transaction Details -->
                                                        <div class="part-info">
                                                            <span class="player-name">
                                                                Transaction Details
                                                            </span>
                                                            <ul>
                                                                <li>
                                                                    <span class="property"><i class="fas fa-info-circle"></i> Payment method :</span>
                                                                    <span class="value">Bank transfer</span>
                                                                </li>
                                                                <li>
                                                                    <span class="property"><i class="fas fa-info-circle"></i> Transaction deadline :</span>
                                                                    <span class="value">2 Day(s)</span>
                                                                </li>
                                                            </ul>
                                                            <div>
                                                                <input type="checkbox" id="transaction_termscon" required />
                                                                <label for="transaction_termscon">I agree with the <a href="<?= SITE_URL ?>/site/terms_and_conditions">terms and conditions</a> of this transaction</label>
                                                            </div>
                                                            <button class="approve_button form-control btn-hyipox-medium btn-add-new-card" style="text-transform: uppercase; margin: 30px 0;"><i class="fa fa-map"></i> Process Transaction </button>
                                                            <p> To prevent anonymous access to this transaction and to have a secure transaction your IP (<?php echo $ip_address ?>) is being stored. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Displaying Payment Details -->
                    </div>
                    <?php echo form_close(); ?>

                    <!-- Modal -->
                    <div class="modal fade" id="modalConfirmPin" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmation Modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="pin">Please confirm PIN:</label>
                                    <?php
                                    $pin = array('name' => 'pin', 'id' => 'pin', 'class' => 'form-control', 'type' => 'text', 'required' => '', 'pattern' => 'number', 'autocomplete' => 'off');
                                    echo form_input($pin);
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary ajax-submit">ENTER PIN</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php else : ?>
                    <div class="callout warning" data-closable>
                        <p class="lead">An error occurred when trying to get your transaction. Please try again</p>
                        <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <?php if ($this->session->userdata('role') == 'Admin') : ?>
                    <div class="top-n-bottom">
                        <div class="row">
                            <div class="small-12 columns">
                                <a href="<?= site_url('dashboard') ?>" class="button expanded clr-white">Back to Admin Area</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            <?php endif; ?>

        </div>
    </div>
</div>