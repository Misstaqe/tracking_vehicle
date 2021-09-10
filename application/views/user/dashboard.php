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
                        <li>Home</li>
                        <li>Dashboard</li>
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

        <div class="user-statics">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/icon/002-cash.png" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$9,568.00</span>
                            <span class="text">Ultimate Balance</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/icon/003-credit-card.png" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$7,480.00</span>
                            <span class="text">Total Payout</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/icon/001-donation.png" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$24k.00</span>
                            <span class="text">Deposits Total</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-statics">
                        <div class="part-icon">
                            <img src="assets/img/icon/004-hourglass.png" alt="">
                        </div>
                        <div class="part-info">
                            <span class="number">$242.00</span>
                            <span class="text">Pending Amount</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="title">
            Recent Transaction
        </h3>
        <div class="history-search-filter">
            <div class="date-select from-date">
                <input class="form-control theme_cal_Selected" placeholder="Select Start Date" required data-hint="Please choose a Delivery date" tabindex="20" name="reqDeliveryDate" id="reqDeliveryDate" type="text" data-role="datebox" data-options='{"mode": "calbox", "overrideDateFormat": "%A, %B %-d, %Y", "useClearButton": true, "useCancelButton": true,"popupPosition": "window", "useFocus": true, "calUsePickers":"true", "useInlineBlind":true, "themeDate": "info", "themeDatePick": "danger","useCollapsedBut":true}'>
            </div>
            <div class="date-select to-date">
                <input class="form-control theme_cal_Selected" placeholder="Select End Date" required data-hint="Please choose a Delivery date" tabindex="20" name="reqDeliveryDate" id="reqDeliveryDate2" type="text" data-role="datebox" data-options='{"mode": "calbox", "overrideDateFormat": "%A, %B %-d, %Y", "useClearButton": true, "useCancelButton": true,"popupPosition": "window", "useFocus": true, "calUsePickers":"true", "useInlineBlind":true, "themeDate": "info", "themeDatePick": "danger","useCollapsedBut":true}'>
            </div>
            <div class="payment-process">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="payment-process" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Payment Method
                    </button>
                    <div class="dropdown-menu" aria-labelledby="payment-process">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="transaction-process">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="transaction-process" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Transaction Category
                    </button>
                    <div class="dropdown-menu" aria-labelledby="transaction-process">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="filter-btn">
                <button class="btn-hyipox-2">Search</button>
            </div>
        </div>

        <div class="transactions-table">
            <div class="table-responsive">
                <table id="example" class="display transaction-data-table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Reference</th>
                            <th>Status</th>
                            <th>PIN</th>
                            <th>Buyer</th>
                            <th>Seller</th>
                            <th>Controls</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($transactions) && count($transactions) > 0) :
                            foreach ($transactions as $_key => $_value) {
                        ?>
                                <tr>
                                    <td>
                                        <a href="<?= site_url('track/' . $_value->reference) ?>">
                                            <span class="has-tip top" tabindex="1" title="Go to Tracking Page">
                                                <?= $_value->reference ?>
                                            </span>
                                        </a>
                                    </td>
                                    <td class="status">
                                        <?php
                                        switch ($_value->status) {
                                            case '-2':
                                        ?>
                                                <span class="badge badge-secondary"><i class="fa fa-clock"></i> Pending</span>
                                            <?php
                                                break;
                                            case '-1':
                                            ?>
                                                <span class="badge badge-danger"><i class="fa fa-hourglass"></i> Expired</span>
                                            <?php
                                                break;
                                            case '0':
                                            ?>
                                                <span class="badge badge-dark"><i class="fa fa-close"></i> Declined</span> on <small><?= $_value->date_updated ?></small>
                                            <?php
                                                break;
                                            case '1':
                                            ?>
                                                <span class="badge badge-info"><i class="fa fa-check"></i> Transaction approved</span> on <small><?= $_value->date_updated ?></small>
                                            <?php
                                                break;
                                            case '2':
                                            ?>
                                                <span class="badge badge-warning"><i class="fa fa-check"></i> Awaiting payment</span> on <small><?= $_value->date_updated ?></small>
                                            <?php
                                                break;
                                            case '3':
                                            ?>
                                                <span class="badge badge-primary"><i class="fa fa-check"></i> Payment confirmed</span> on <small><?= $_value->date_updated ?></small>
                                            <?php
                                                break;
                                            case '4':
                                            ?>
                                                <span class="badge badge-light"><i class="fa fa-check"></i> Transport in progress</span> on <small><?= $_value->date_updated ?></small>
                                            <?php
                                                break;
                                            case '5':
                                            ?>
                                                <span class="badge badge-success"><i class="fa fa-check"></i> Delivery finished</span> on <small><?= $_value->date_updated ?></small>
                                        <?php
                                                break;
                                        }
                                        ?>
                                    </td>
                                    <td><?= $_value->pin; ?></td>
                                    <td><?= $_value->b_email; ?></td>
                                    <td><?= $_value->s_email; ?></td>
                                    <td>
                                        <?php if ($_value->status < 0) { ?>
                                            <a href="<?= base_url('amend/' . $_value->reference); ?>" class="genric-btn info-border circle small"><i class="fa fa-edit"></i> Edit</a>
                                        <?php } elseif ($_value->status == 0) {
                                        ?>
                                            <a id="<?= $_value->id; ?>" href="<?= base_url('reset'); ?>" class="genric-btn primary-border circle small reset"><i class="fa fa-cog"></i> Reset</a>
                                        <?php } else { ?>
                                            <a id="<?= $_value->id; ?>" href="<?= base_url('reset'); ?>" class="genric-btn primary-border circle small reset"><i class="fa fa-cog"></i> Reset</a>
                                            <a href="<?= base_url('amend/' . $_value->reference); ?>" class="genric-btn info-border circle small"><i class="fa fa-edit"></i> Edit</a>
                                        <?php } ?>
                                        <a href="<?= base_url('action/delete_transaction'); ?>" data-reference="<?= $_value->reference; ?>" class="genric-btn danger-border circle small delete"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        else :
                            ?>
                            <tr>
                                No transactions found
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Reference</th>
                            <th>Status</th>
                            <th>PIN</th>
                            <th>Buyer</th>
                            <th>Seller</th>
                            <th>Controls</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
</div>
<!-- account end -->