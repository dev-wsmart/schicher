<!--Desktop / Tablet -->
<div class="d-none d-md-block">
    <div class="d-flex bd-highlight mb-3">
        <div class ="mr-auto bd-highlight">
            <a href="<?php echo base_url(); ?>">
                <div class="logo animate__animated animate__fadeInDown">
                    <img alt="SmartSure" src="<?php echo base_url(); ?>assets/images/schicher-logo.png">
                </div>
            </a>
        </div>
        <div class="bd-highlight lang-link">
            <a href="#">TH</a> /
            <a href="#">EN</a> /
            <a href="#">DE</a>
        </div>
    </div>

    <div id="nav">
        <a href="<?php echo base_url();?>" id="home" class="active">หน้าหลัก</a>
        <a href="<?php echo base_url();?>about" id="about">เกี่ยวกับเรา</a>
        <a href="<?php echo base_url();?>product" id="product">ซื้อผลิตภัณฑ์</a>
        <a href="<?php echo base_url();?>promotion" id="promotion">โปรโมชั่น</a>
        <a href="<?php echo base_url();?>news" id="news">ข่าวสารและกิจกรรม</a>
        <a href="<?php echo base_url();?>contactus" id="contactus">ติดต่อเรา</a>
    </div>
</div>

<div class="d-md-none d-block" style="margin-bottom: 20px;">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand animate__animated animate__fadeInDown" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/images/schicher-logo.png" width="150px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="padding-top: 20px;">
                <a class="home nav-item nav-link active" href="<?php echo base_url();?>">หน้าหลัก <span class="sr-only">(current)</span></a>
                <a class="about nav-item nav-link" href="<?php echo base_url();?>about">เกี่ยวกับเรา</a>
                <a class="product nav-item nav-link" href="<?php echo base_url();?>product">ซื้อผลิตภัณฑ์</a>
                <a class="promotion nav-item nav-link" href="<?php echo base_url();?>promotion">โปรโมชั่น</a>
                <a class="news nav-item nav-link" href="<?php echo base_url();?>news">ข่าวสารและกิจกรรม</a>
                <a class="contactus nav-item nav-link" href="<?php echo base_url();?>contactus">ติดต่อเรา</a>
                <div class="d-flex justify-content-center lang-link">
                    <a href="#">TH</a> 
                    <a href="#">EN</a> 
                    <a href="#">DE</a>
                </div>
            </div>
        </div>
    </nav>
</div>