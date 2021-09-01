<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- breadcrumb begin -->
<div class="breadcrumb-oitila">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-8">
                <div class="part-txt">
                    <h1>Action Result</h1>
                    <ul>
                        <li>home</li>
                        <li>Action Result</li>
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

<!-- error begin -->
<div class="error">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8">
                <div class="part-img">
                    <img src="assets/img/error.png" alt="">
                </div>
                <div class="part-text">
                    <h4><?= $message; ?></h4>
                    <div class="row">
                    <?php if($this->session->userdata('status') == 'logged_in') : ?>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center">
                            <a href="<?= base_url('dashboard'); ?>" class="back-to-home-btn">Dashboard</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center">
                            <a href="<?= base_url(); ?>" class="back-to-home-btn">Back to home</a>
                        </div>
                    <?php else : ?>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                            <a href="<?= base_url(); ?>" class="back-to-home-btn">Back to home</a>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- error end -->