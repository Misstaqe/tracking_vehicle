<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="notification-alert">
    <div class="notice-list">

    </div>
</div>

<!-- preloader begin-->
<div class="preloader">
    <img src="assets/img/tenor.gif" alt="">
</div>
<!-- preloader end -->

<div class="mobile-navbar-wrapper">

    <!-- header begin -->
    <div class="header" id="header">
        <div class="bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-2 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="row">
                            <div class="col-6 d-xl-none d-lg-none d-block">
                                <button class="navbar-toggler" type="button">
                                    <span class="dag"></span>
                                    <span class="dag2"></span>
                                    <span class="dag3"></span>
                                </button>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center justify-content-end">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <div class="mainmenu">
                            <?php if ($this->session->userdata('status') == 'logged_in') : ?>
                                <div class="d-xl-none d-lg-none d-block">
                                    <div class="user-profile">
                                        <div class="part-img">
                                            <img src="assets/img/member-1.jpg" alt="">
                                        </div>
                                        <div class="user-info">
                                            <span class="user-name">Administrator</span>
                                            <span class="user-balance">Bal : $202.25</span>
                                        </div>
                                        <div class="log-out-area">
                                            <a href="<?= base_url('action/logout_account'); ?>">Log out</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <nav class="navbar navbar-expand-lg">

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url(); ?>">home</a>
                                        </li>

                                        <?php if ($this->session->userdata('status') == 'logged_in') : ?>
                                            <li class="nav-item dropdown show">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" id="db-Dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    admin
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="db-Dropdown">
                                                    <a class="dropdown-item" href="<?= base_url('dashboard'); ?>">dashboard</a>
                                                    <a class="dropdown-item" href="<?= base_url('edit/' . $this->session->userdata('id')); ?>">edit my account</a>
                                                    <a class="dropdown-item" href="<?= base_url('change_password/' . $this->session->userdata('id')); ?>">change password</a>
                                                    <a class="dropdown-item" href="<?= base_url('new'); ?>">new transaction</a>
                                                    <a class="dropdown-item" href="<?= base_url('action/logout_account'); ?>">log out</a>
                                                </div>
                                            </li>
                                        <?php endif; ?>

                                        <li class="nav-item dropdown show">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                services
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                                <a class="dropdown-item" href="<?= base_url('site/services'); ?>">enclosed transport</a>
                                                <a class="dropdown-item" href="<?= base_url('site/services'); ?>">open transport</a>
                                                <a class="dropdown-item" href="<?= base_url('site/services'); ?>">low costs & efficiency</a>
                                                <a class="dropdown-item" href="<?= base_url('site/services'); ?>">other services</a>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('site/contact'); ?>">contact</a>
                                        </li>

                                        <li class="nav-item join-now-btn">
                                            <a class="nav-link" href="#">track now</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- banner begin -->
    <div class="banner">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-xl-7 col-lg-7 col-sm-10 col-md-9 d-xl-flex d-lg-flex d-block align-items-center d-banner-tamim">
                    <div class="banner-content">
                        <h4>Want to Invest Money?</h4>
                        <h1>We're delivering your happiness carefully</h1>
                        <p>We Already Completed Our 50+ Years in Online Investment Business<br /> With Trust and Excellent Reputation.</p>
                        <a href="#" class="btn-hyipox">Start Tracking Now</a>
                    </div>
                    <div class="banner-statics">
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="assets/img/svg/start.svg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="text">Starting Date</span>
                                <span class="number">Jan 01, 2020</span>
                            </div>
                        </div>
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="assets/img/svg/user.svg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="text">Online Users</span>
                                <span class="number">50257.001+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-sm-10 col-md-8 monitor-for-480">
                    <div class="profit-calculator">
                        <div class="calc-header">
                            <h3 class="title">Track <span class="special"> Your Vehicle</span></h3>
                        </div>
                        <div class="calc-body">
                            <div class="part-amount" style="margin-bottom: 0;">
                                <h4 class="title">
                                    Enter Transaction ID number to track your transaction
                                </h4>
                                <?php
                                $form_attr = array('class' => 'lon-tracking', 'data-abide' => '', 'novalidate' => '');
                                echo form_open('track/submit', $form_attr);
                                ?>
                                <input class="hide" value="" name="t_link" id="t_link" type="hidden">
                                <input type="text" name="tracking" id="tracking" required>
                                <button type="submit" class="calculate-all" style="margin-top: 20px;">Track</button>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        <div class="part-result">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/svg/business-and-finance.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="title">Total<br /> Percent</span>
                                        <span class="number js_totalPercentage">250.00%</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/svg/profit.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="title">Daily<br /> Profits</span>
                                        <span class="number js_dailyProfit">$0.05</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/svg/profits.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="title">Net<br /> Profit</span>
                                        <span class="number js_netProfit">$25.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="assets/img/svg/return-on-investment.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="title">Total<br /> Return</span>
                                        <span class="number js_totalReturn">$35.00</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- about begin -->
    <div class="about">
        <div class="container">
            <div class="how-to-works">
                <div class="row justify-content-center justify-content-sm-center justify-content-md-start">
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="assets/img/svg/add-user.svg" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">Register Account</h4>
                                <p>Register for an account. It's totally easy and free</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="assets/img/svg/coin.svg" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">Invest Money</h4>
                                <p>Choose your investment plan and make first deposit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="assets/img/svg/money-bag.svg" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">Get Withdraw</h4>
                                <p>Request for the withdrawal and receive a payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-xl-6 col-lg-6 col-sm-10">
                    <div class="part-text">
                        <h2>The <span class="special">right place</span> for you to track your transport</h2>
                        <p>You do not have to worry about anything either in advance or during transport, because our experienced drivers take over the planning and route independently.</p>
                        <p>From loading to driving the trailer to delivery to the destination, our convenient transport service not only relieves you of the stress that such an action entails, it also ensures safety and punctuality. With us, you can rely on reliable performance when it comes to transporting your beloved car, for example: Europe-wide and available 7 days a week and 24 hours.</p>
                        <a href="#" class="btn-hyipox-2">Track now</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-sm-10 col-md-12">
                    <div class="part-feature">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-sm-12 col-md-6">
                                <div class="single-feature">
                                    <div class="feature-icon">
                                        <img src="assets/img/svg/solar-energy.svg" alt="">
                                    </div>
                                    <div class="feature-text">
                                        <h3>Shipment Tracking</h3>
                                        <p style="margin-bottom: 0px;">Track your transport or your online transaction.</p>
                                        <a href="" style="float: right;">Go to Tracking Page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-sm-12 col-md-6">
                                <div class="single-feature">
                                    <div class="feature-icon">
                                        <img src="assets/img/svg/diploma.svg" alt="">
                                    </div>
                                    <div class="feature-text">
                                        <h3>Get a Quote</h3>
                                        <p style="margin-bottom: 0px;">Get information regarding an estimate on your future transport with us.</p>
                                        <a href="" style="float: right;">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-sm-12 col-md-6">
                                <div class="single-feature">
                                    <div class="feature-icon">
                                        <img src="assets/img/svg/blockchain.svg" alt="">
                                    </div>
                                    <div class="feature-text">
                                        <h3>Have a Question?</h3>
                                        <p style="margin-bottom: 0px;">Ask any question. Our customer department is here to help you anytime.</p>
                                        <a href="" style="float: right;">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-sm-12 col-md-6">
                                <div class="single-feature">
                                    <div class="feature-icon">
                                        <img src="assets/img/svg/worldwide.svg" alt="">
                                    </div>
                                    <div class="feature-text">
                                        <h3>Shipping Calculator</h3>
                                        <p style="margin-bottom: 0px;">Our transport department will calculate your costs for your transport, from point A to point B.</p>
                                        <a href="" style="float: right;">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- transaction begin -->
    <div class="transaction">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title section-title-2">
                        <span class="sub-title">
                            Must Meet With
                        </span>
                        <h2>
                            Oitila's recent transaction
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-xl-5 col-lg-5 col-sm-10 col-md-12">
                    <div class="transaction-list">
                        <div class="Vertical-Slider">
                            <div class="single-transaction">
                                <div class="flag">
                                    <img src="assets/img/flag/flag-2.jpg" alt="">
                                </div>
                                <div class="user-info">
                                    <span class="name">Hayden Schofield</span>
                                    <span class="tr-type">Trxn: Deposit</span>
                                    <span class="tr-date">/ 08.13.2020</span>
                                    <span class="tr-amount">$209.00</span>
                                </div>
                                <div class="coin">
                                    <img src="assets/img/svg/bitcoin.svg" alt="">
                                </div>
                            </div>
                            <div class="single-transaction">
                                <div class="flag">
                                    <img src="assets/img/flag/flag-3.jpg" alt="">
                                </div>
                                <div class="user-info">
                                    <span class="name">Aidan Ward</span>
                                    <span class="tr-type">Trxn: Deposit</span>
                                    <span class="tr-date">/ 08.13.2020</span>
                                    <span class="tr-amount">$209.00</span>
                                </div>
                                <div class="coin">
                                    <img src="assets/img/svg/ethereum.svg" alt="">
                                </div>
                            </div>
                            <div class="single-transaction">
                                <div class="flag">
                                    <img src="assets/img/flag/flag-4.jpg" alt="">
                                </div>
                                <div class="user-info">
                                    <span class="name">Daniel Miah</span>
                                    <span class="tr-type">Trxn: Witdraw</span>
                                    <span class="tr-date">/ 08.13.2020</span>
                                    <span class="tr-amount">$209.00</span>
                                </div>
                                <div class="coin">
                                    <img src="assets/img/svg/litecoin.svg" alt="">
                                </div>
                            </div>
                            <div class="single-transaction">
                                <div class="flag">
                                    <img src="assets/img/flag/flag-2.jpg" alt="">
                                </div>
                                <div class="user-info">
                                    <span class="name">Hayden Schofield</span>
                                    <span class="tr-type">Trxn: Deposit</span>
                                    <span class="tr-date">/ 08.13.2020</span>
                                    <span class="tr-amount">$209.00</span>
                                </div>
                                <div class="coin">
                                    <img src="assets/img/svg/bitcoin.svg" alt="">
                                </div>
                            </div>
                            <div class="single-transaction">
                                <div class="flag">
                                    <img src="assets/img/flag/flag-3.jpg" alt="">
                                </div>
                                <div class="user-info">
                                    <span class="name">Aidan Ward</span>
                                    <span class="tr-type">Trxn: Deposit</span>
                                    <span class="tr-date">/ 08.13.2020</span>
                                    <span class="tr-amount">$209.00</span>
                                </div>
                                <div class="coin">
                                    <img src="assets/img/svg/ethereum.svg" alt="">
                                </div>
                            </div>
                            <div class="single-transaction">
                                <div class="flag">
                                    <img src="assets/img/flag/flag-4.jpg" alt="">
                                </div>
                                <div class="user-info">
                                    <span class="name">Daniel Miah</span>
                                    <span class="tr-type">Trxn: Witdraw</span>
                                    <span class="tr-date">/ 08.13.2020</span>
                                    <span class="tr-amount">$209.00</span>
                                </div>
                                <div class="coin">
                                    <img src="assets/img/svg/litecoin.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-10 col-md-12 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-text">
                        <h2>see all status of our activity</h2>
                        <p>A transaction list contains a summary of a recent transaction, as like the user and the date, time processed, and transaction status. It also shows transaction information.</p>
                        <p class="marked"><b>Important:</b> Your Past Transactions list will show the past history in account activity on oitila. If you need information prior to the any year of the past, the statements will attach the past transaction history.</p>
                        <a href="#" class="btn-hyipox-medium cta-btn">Open An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- transaction end -->

    <!-- choosing reson begin -->
    <div class="choosing-reason">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        <span class="sub-title">
                            You couldn't think
                        </span>
                        <h2>
                            why oitila is<span class="special"> the best</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-sm-10 col-md-12">
                    <div class="part-left">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-4">
                                <div class="single-reason">
                                    <div class="icon-box">
                                        <div class="part-icon">
                                            <img src="assets/img/svg/withdraw.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="part-text">
                                        <h3 class="title">Get Instant Withdrawals</h3>
                                        <p>Get your payment instantly through requesting it! We don't take percentage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-4">
                                <div class="single-reason">
                                    <div class="icon-box">
                                        <div class="part-icon">
                                            <img src="assets/img/svg/referral.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="part-text">
                                        <h3 class="title">Unlimited Referral Bonus</h3>
                                        <p>Promote oitila and earn unlimited referral commission from each referral links</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-4">
                                <div class="single-reason">
                                    <div class="icon-box">
                                        <div class="part-icon">
                                            <img src="assets/img/svg/affiliate-marketing.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="part-text">
                                        <h3 class="title">Join To Affiliate Program</h3>
                                        <p>Our affiliate program is a great way to grow your earning. It's more easy to join with us</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-2 d-xl-flex d-lg-none d-block align-items-end">
                    <div class="part-img">
                        <div class="shadow-shape"></div>
                        <img src="assets/img/choosing-reason.png" alt="">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-sm-10 col-md-12">
                    <div class="part-right">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-4">
                                <div class="single-reason">
                                    <div class="icon-box">
                                        <div class="part-icon">
                                            <img src="assets/img/svg/bird.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="part-text">
                                        <h3 class="title"> Blockchain Ecosystem</h3>
                                        <p>Get mining with a big profit, and Miner is calculated with the blockchain ecosystem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-4">
                                <div class="single-reason">
                                    <div class="icon-box">
                                        <div class="part-icon">
                                            <img src="assets/img/svg/shield.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="part-text">
                                        <h3 class="title">SSL Security</h3>
                                        <p>Our system is secured and protected using DDos protection and SSL. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-4">
                                <div class="single-reason">
                                    <div class="icon-box">
                                        <div class="part-icon">
                                            <img src="assets/img/svg/customer-service.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="part-text">
                                        <h3 class="title">24/7 Friendly Support</h3>
                                        <p>We provide 24/7 friendly support in Oitila. We're always responsible to take care</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choosing reson end -->

    <!-- blog begin -->
    <div class="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        <span class="sub-title">
                            Our Offered Services
                        </span>
                        <h2>
                            We Offer <span class="special"> Various Services</span> To Get You Covered
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                    <div class="single-blog">
                        <div class="part-img">
                            <img src="assets/img/services/open_transport.jpg" alt="">
                            <a href="#"><i class="far fa-eye"></i></a>
                            <div class="post-date">
                                <span class="date">26</span>
                                <span class="month">JAn</span>
                            </div>
                        </div>
                        <div class="part-text">
                            <a href="#" class="title">Open Transport</a>
                            <p>Transport SPECIALIST our special trailer enables transport even for vehicles with special dimensions. Individual transport also Available!</p>
                            <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                    <div class="single-blog">
                        <div class="part-img">
                            <img src="assets/img/services/1.gif" alt="">
                            <a href="#"><i class="far fa-eye"></i></a>
                            <div class="post-date">
                                <span class="date">26</span>
                                <span class="month">JAn</span>
                            </div>
                        </div>
                        <div class="part-text">
                            <a href="#" class="title">Vehicles Escrow</a>
                            <p>The perfect solution when buying an second hand vehicle online. Didn't see the car ? No problem! Our system will help and protect you.</p>
                            <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                    <div class="single-blog">
                        <div class="part-img">
                            <img src="assets/img/services/enclosed_transport.jpg" alt="">
                            <a href="#"><i class="far fa-eye"></i></a>
                            <div class="post-date">
                                <span class="date">26</span>
                                <span class="month">JAn</span>
                            </div>
                        </div>
                        <div class="part-text">
                            <a href="#" class="title">Enclosed Transport</a>
                            <p>State-of-the-art closed trailers Our trailers have an opening angle of 3 degrees for vehicles with particularly low ground clearance.</p>
                            <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->

    <!-- call to action begin -->
    <div class="cta">
        <div class="container">
            <div class="cta-bg">
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-10 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="cta-text">
                            <h2>We're Always Thinking Something Different</h2>
                            <p>Quis nostrud exercitation ullamco laboris nisi utaliquip commodo consequat. Duis aute feeirure dolor voluptate velit esse cillum dolore eu fugiat nulla exercitation ullamco laboris nisi utaliquip commodo consequat. Duis aute feeirure </p>
                            <p class="marked">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum nemo quasi impedit, voluptatem quae voluptas numquam unde dolor!</p>
                            <a href="#" class="btn-hyipox-medium cta-btn">Start Tracking</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex justify-content-end d-block align-items-center">
                        <div class="part-video">
                            <img src="assets/img/video.jpg" alt="">
                            <button data-video-id="L61p2uyiMSo" class="play-video js-video-button"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- call to action end -->

    <!-- testimonial begin -->
    <div class="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        <span class="sub-title">
                            Our Customer Feedback
                        </span>
                        <h2>
                            Clients are<span class="special"> happily Satisfied</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="all-testimonials">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="testi-text-slider">
                            <div class="single-testimonial">
                                <span class="quot-icon">
                                    <img src="assets/img/customer/1.png" alt="">
                                </span>
                                <p>“Easy to talk to and friendly staff members. I transported my VW Polo and everything was on time and without any incidents. Looking forward for my next transport.
                                    5* Stars for your services. Thank you”</p>
                                <div class="part-user">
                                    <span class="user-name">Petr K.</span>
                                    <span class="user-location">CZ, Brno</span>
                                </div>
                            </div>

                            <div class="single-testimonial">
                                <span class="quot-icon">
                                    <img src="assets/img/customer/2.png" alt="">
                                </span>
                                <p>“Driving 1200 Km from one city to another is not an easy job with the current traffic conditions. I gave my car to be transported so I can be relaxed and rested. TOP Service and PRO members!!!”</p>
                                <div class="part-user">
                                    <span class="user-name">Ferhad B.</span>
                                    <span class="user-location">DE, Minderlittgen</span>
                                </div>
                            </div>

                            <div class="single-testimonial">
                                <span class="quot-icon">
                                    <img src="assets/img/customer/3.png" alt="">
                                </span>
                                <p>“I bought a car using their service Vehicle Escrow. At first I was very afraid about paying in advance but all was super and now I am happy with the result.
                                    Great to test the car before signing the buy contract.”</p>
                                <div class="part-user">
                                    <span class="user-name">Johannes W.</span>
                                    <span class="user-location">AT, Altaussee</span>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <span class="quot-icon">
                                    <img src="assets/img/customer/4.png" alt="">
                                </span>
                                <p>“I think this system is made for girls only :)) I had the chance to take my car to a mechanic and to inspect it. The seller was paid only after I was sure the car was in top condition.”</p>
                                <div class="part-user">
                                    <span class="user-name">Fabia Martinakis</span>
                                    <span class="user-location">DE, Heimsheim</span>
                                </div>
                            </div>

                            <div class="single-testimonial">
                                <span class="quot-icon">
                                    <img src="assets/img/customer/5.png" alt="">
                                </span>
                                <p>“Ótimo serviço. Recebi meu carro em menos de 2 dias. Fantástico. Obrigado”</p>
                                <div class="part-user">
                                    <span class="user-name">Ruben da Silva</span>
                                    <span class="user-location">PT, Sintra</span>
                                </div>
                            </div>

                            <div class="single-testimonial">
                                <span class="quot-icon">
                                    <img src="assets/img/customer/6.png" alt="">
                                </span>
                                <p>“Stayed at home and the car was delivered with all the documents to my address. Roads in Bulgaria are not so easy to find but the company managed. Fast delivery. Благодаря ти”</p>
                                <div class="part-user">
                                    <span class="user-name">ANTONIA Chepil</span>
                                    <span class="user-location">BG, Zolochiv</span>
                                </div>
                            </div>

                        </div>
                        <div class="testi-user-slider">
                            <div class="single-user">
                                <img src="assets/img/customer/1.png" alt="">
                            </div>
                            <div class="single-user">
                                <img src="assets/img/customer/2.png" alt="">
                            </div>
                            <div class="single-user">
                                <img src="assets/img/customer/3.png" alt="">
                            </div>
                            <div class="single-user">
                                <img src="assets/img/customer/4.png" alt="">
                            </div>
                            <div class="single-user">
                                <img src="assets/img/customer/5.png" alt="">
                            </div>
                            <div class="single-user">
                                <img src="assets/img/customer/6.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- testimonial end -->

    <!-- footer begin -->
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="about-widget">
                            <a href="index.html" class="logo">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis commodi ut illum. Cumque, unde suscipit error!</p>
                            <div class="social-links">
                                <ul>
                                    <li>
                                        <a href="#0" class="single-link">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-10">
                        <div class="link-widget">
                            <h4 class="title">
                                Useful links
                            </h4>
                            <ul>
                                <li>
                                    <a href="#0" class="single-link">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="single-link">
                                        Affiliate
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="single-link">
                                        Pricing Plan
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="single-link">
                                        Profit
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="single-link">
                                        Terms & Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-10">
                        <div class="newsletter-widget">
                            <h4 class="title">
                                Subscribe To Our Newsletter
                            </h4>
                            <form class="newsletter-form">
                                <input type="text" placeholder="Enter Your Mail Address">
                                <button class="def-btn def-small">
                                    Subscribe
                                </button>
                            </form>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi accusamus labore recusandae! Quia sint consectetur explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <p>Copyright © <a href="index.html">Oitila</a> - 2020. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->

</div> <!-- mobile navbar wrapper end -->

<div class="d-xl-none d-lg-none d-block">
    <div class="mobile-navigation-bar">
        <ul>
            <li>
                <a href="#0">
                    <img src="assets/img/svg/profile.svg" alt="">
                </a>
            </li>
            <li>
                <a href="#0">
                    <img src="assets/img/svg/money-transfering.svg" alt="">
                </a>
            </li>
            <li>
                <a href="#0">
                    <img src="assets/img/svg/calculator.svg" alt="">
                </a>
            </li>
            <li>
                <a href="#header">
                    <img src="assets/img/svg/arrow.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="d-xl-block d-lg-block d-none">
    <div class="back-to-top-btn">
        <a href="#">
            <img src="assets/img/svg/arrow.svg" alt="">
        </a>
    </div>
</div>