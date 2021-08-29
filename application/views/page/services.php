<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- preloader begin-->
<div class="preloader">
    <img src="<?= base_url('assets/img/tenor.gif'); ?>" alt="">
</div>
<!-- preloader end -->

<div class="mobile-navbar-wrapper">

    <!-- header begin -->
    <div class="header header-style-4" id="header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-3">
                        <div class="welcome-text">
                            <p>Welcome to Oitila</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-9 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="part-right">
                            <ul>
                                <li>
                                    <span class="simple-text">Sever Time : </span>
                                    <div class="server-time">
                                        <div class="single-time clock-time">
                                            <span class="icon">
                                                <i class="far fa-clock"></i>
                                            </span>
                                            <span class="text">
                                                <span id="hours"></span>
                                                <span id="minutes"></span>
                                                <span id="seconds"></span>
                                            </span>
                                        </div>
                                        <div class="single-time">
                                            <span class="icon">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                            <span class="text">
                                                <span id="date"></span>
                                                <span id="month"></span>
                                                <span id="year"></span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-2 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="row">
                            <div class="col-4 d-xl-none d-lg-none d-block">
                                <button class="navbar-toggler" type="button">
                                    <span class="dag"></span>
                                    <span class="dag2"></span>
                                    <span class="dag3"></span>
                                </button>    
                            </div>
                            <div class="col-xl-12 col-lg-12 col-8 d-xl-block d-lg-block d-flex align-items-center justify-content-end">
                                <div class="logo">
                                    <a href="<?= base_url(); ?>">
                                        <img src="<?= base_url('assets/img/logo2.png'); ?>" alt="">
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
                                            <img src="<?= base_url('assets/img/member-1.jpg'); ?>" alt="">
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

    <!-- breadcrumb begin -->
    <div class="breadcrumb-oitila">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-8">
                    <div class="part-txt">
                        <h1>Services</h1>
                        <ul>
                            <li>home</li>
                            <li>Services page</li>
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

    <div class="about about_services">
        <div class="container">
            <div class="part-text">
                <h2><span class="special">Our Services</span></h2>
                <p>
                    We understand your concerns about your valuable vehicles whether it is of an extraordinary high material or sentimental value for you. Draw on our long standing experience and benefit from the know-how of our staff. Following this we take care for an ideal and smooth transport process. Accordingly we also will inform you about possible alternatives that are at your disposal.<br>
                    <p class="static_special">Intermediary services this is HOW OUR SYSTEM WORKS!</p>
                    If you want to buy a used car, it is a huge expense. If you buy a car online, the element of risk is increased. <span class="spc">This is where we are here to help.</span>
                </p>
                <ul>
                    <li><i class="fas fa-check"></i> The standard chunk of Lorem Ipsum used since </li>
                    <li><i class="fas fa-check"></i> reproduced below for those interested. Sections </li>
                    <li><i class="fas fa-check"></i> de Finibus Bonorum et Malorum" by Cicero are also </li>
                    <li><i class="fas fa-check"></i> reproduced in their exact original form</li>
                </ul>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
        </div>
    </div>

    <!-- services begin -->
    <div class="payment-gateway">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center" style="margin-bottom: 20px;">
                <div class="col-xl-8 col-lg-8 col-sm-10 col-md-12 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-text">
                        <h2>Enclosed Transport</h2>   
                        <p>We guarantee a safe and reliable transport with our closed vehicles, whether it is a classic car, a race car or a rarity. There are several demands and fields that have one thing in common: The shipped vehicles which are often highly delicate and very valuable have to reach their destination well covered, punctually and, of course, undamaged.</p>
                        <p>Our company has specialised on the transport of exclusive two- and four wheeled vehicles as well as non-ordinary vehicles such as prototypes, classic cars, formula 1 cars, GT and touring cars. We have been an experienced and competent partner of testing and research institutes, motorsport clubs, race organizers and many private owners of valuable cars for many years.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-10 col-md-6">
                    <div class="part-crypto">
                        <h3 class="title">Enclosed Transport:</h3>
                        <div class="part-img">
                            <img src="<?= base_url('public/img/services/enclosed_transport.jpg'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center" style="margin-bottom: 20px;">
                <div class="col-xl-3 col-lg-3 col-sm-10 col-md-6">
                    <div class="part-crypto">
                        <h3 class="title">Open Transport:</h3>
                        <div class="part-img">
                            <img src="<?= base_url('public/img/services/open_transport.jpg'); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-sm-10 col-md-12 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-text">
                        <h2>Open Transport</h2>
                        <p>We are your competent partner regarding the subject of car and passenger car transport. We work fast, reliable and at reasonable prices! We offer car transports and flyovers all over Germany and we pay particular attention to safety and velocity. You can expect an execution time of only 8 days for a car transport. We also offer reliable transports of cars and flyovers all over Europe. You certainly have the opportunity to have delivered a particularly valuable car delivered by a closed transport. It doesn’t matter if it is a sports car, an accident damaged car, a classic car or a tractor – we guarantee a safe transport of your vehicle. You can send your personal enquiry concerning the subject of car transport and flyover by using our contact form or by phone via the phone number.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-xl-8 col-lg-8 col-sm-10 col-md-12 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-text">
                        <h2>Low Costs & Efficiency</h2>
                        <p>Our Internet Platform is an intemediery service. We can process your payment, handle your paperwork, provide a cheap and fast transport solution. Current times and daily activities limit the your free time so this is where we step in.</p>
                        <p>Let us be the "middle man" in your transaction. We are a digital escrow service that handles your cash payments through a transparent step-by-step process. The money does not flow directly into the account of the beneficiary (seller or handler), but into a escrow account with our banking partner. Our company stands for highest security and transparency in online-based payment transactions. Our company protects buyers and sellers against fraud!</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-10 col-md-6">
                    <div class="part-crypto">
                        <h3 class="title">Low Costs & Efficiency:</h3>
                        <div class="part-img">
                            <img src="<?= base_url('public/img/services/planenanhaenger.jpg'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-sm-10 col-md-12">
                    <div class="all-payment">
                    <h3 class="title">Image Gallery :</h3>
                        <div class="gateway-slider">
                            <div class="single-payment-way">
                                <img src="<?= base_url('public/img/elements/g1.jpg'); ?>" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="<?= base_url('public/img/elements/g2.jpg'); ?>" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="<?= base_url('public/img/elements/g3.jpg'); ?>" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="<?= base_url('public/img/elements/g4.jpg'); ?>" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="<?= base_url('public/img/elements/g5.jpg'); ?>" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="<?= base_url('public/img/elements/g6.jpg'); ?>" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="<?= base_url('public/img/elements/g7.jpg'); ?>" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="<?= base_url('public/img/elements/g8.jpg'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services end -->

    <!-- team begin -->
    <div class="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        <span class="sub-title">
                            Uppermost Investments
                        </span>
                        <h2>
                            Meet with our<span class="special">  Top Investors</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-member">
                        <div class="img-box">
                            <div class="part-img">
                                <a href="<?= base_url('site/contact'); ?>" class="view-btn">
                                    <i class="far fa-eye"></i>
                                </a>
                                <img src="<?= base_url('public/img/feature/f2.png'); ?>" alt="">
                            </div>
                        </div>
                        <div class="part-text">
                            <span class="name">In good hands</span>
                            <span class="invested-amount">Our company transports over 600 vehicles every year throughout Europe.</span>
                            <div class="paid-from">
                                CONTACT US
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-member">
                        <div class="img-box">
                            <div class="part-img">
                                <a href="<?= base_url('site/contact'); ?>" class="view-btn">
                                    <i class="far fa-eye"></i>
                                </a>
                                <img src="<?= base_url('public/img/feature/f1.png'); ?>" alt="">
                            </div>
                        </div>
                        <div class="part-text">
                            <span class="name">Fast and trusted</span>
                            <span class="invested-amount">Transporting automobiles punctually and safely.</span>
                            <div class="paid-from">
                                CONTACT US
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-member">
                        <div class="img-box">
                            <div class="part-img">
                                <a href="<?= base_url('site/contact'); ?>" class="view-btn">
                                    <i class="far fa-eye"></i>
                                </a>
                                <img src="<?= base_url('public/img/feature/f3.png'); ?>" alt="">
                            </div>
                        </div>
                        <div class="part-text">
                            <span class="name">Easy and comfortable</span>
                            <span class="invested-amount">We will be happy to advise you. Just send us an email or give us a call.</span>
                            <div class="paid-from">
                                CONTACT US
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team end -->

    <!-- footer begin -->
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="about-widget">
                            <a href="<?= base_url(); ?>" class="logo">
                                <img src="<?= base_url('assets/img/logo.png'); ?>" alt="">
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
                        <p>Copyright © <a href="<?= base_url(); ?>">Oitila</a> - 2020. All Rights Reserved</p>
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
                    <img src="<?= base_url('assets/img/svg/profile.svg'); ?>" alt="">
                </a>
            </li>
            <li>
                <a href="#0">
                    <img src="<?= base_url('assets/img/svg/money-transfering.svg'); ?>" alt="">
                </a>
            </li>
            <li>
                <a href="#0">
                    <img src="<?= base_url('assets/img/svg/calculator.svg'); ?>" alt="">
                </a>
            </li>
            <li>
                <a href="#header">
                    <img src="<?= base_url('assets/img/svg/arrow.svg'); ?>" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="d-xl-block d-lg-block d-none">
    <div class="back-to-top-btn">
        <a href="#">
            <img src="<?= base_url('assets/img/svg/arrow.svg'); ?>" alt="">
        </a>
    </div>
</div>