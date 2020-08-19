<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    if (!$this->session->userdata("language")){
        $this->session->set_userdata("language", "thai");
    }
    $this->lang->load("user_ui", $this->session->userdata("language")); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $title; ?></title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/smartsure-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>font/stylesheet.css">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<body>
    <div class="container">
        <?php $this->load->view('menu'); ?>
        <div id="content">
            <?php $this->load->view($content); ?>
        </div>
        <?php $this->load->view('footer'); ?>
    </div>
</body>
</html>