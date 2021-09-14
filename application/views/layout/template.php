<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('layout/header.php'); ?>

<div class="notification-alert">
    <div class="notice-list">

    </div>
</div>

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
                            <p>Welcome to <?= WEBSITE_NAME; ?></p>
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
                                        <img src="<?= base_url('assets/img/logo.png'); ?>" alt="">
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
                                                    <a class="dropdown-item" href="<?= base_url('edit/' . $this->session->userdata('id')); ?>">edit account details</a>
                                                    <a class="dropdown-item" href="<?= base_url('change_password'); ?>">change password</a>
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

    <?php
    if (isset($mainContent)) {
        $this->load->view($mainContent);
    } ?>

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
                            <p>Akos Trans GmbH brokerage services and transport solutions!</p>
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
                                    <a href="<?= base_url(); ?>" class="single-link">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('site/services'); ?>" class="single-link">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('site/contact'); ?>" class="single-link">
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('site/legal_info'); ?>" class="single-link">
                                        Privacy policy
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('site/terms_and_conditions'); ?>" class="single-link">
                                        Terms of service
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
                            <p>Subscribe to receive news and updates of our services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <p>Copyright © <a href="<?= base_url(); ?>"><?= WEBSITE_NAME; ?></a> - 2021. All Rights Reserved</p>
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

<?php $this->load->view('layout/footer.php'); ?>