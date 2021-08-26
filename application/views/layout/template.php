<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('layout/header.php'); ?>
    <?php
    if (isset($mainContent)) {
        $this->load->view($mainContent);
    } ?>
<?php $this->load->view('layout/footer.php'); ?>
