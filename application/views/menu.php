<!--Desktop / Tablet -->
<div class="d-none d-md-block">
    <table cellspacing="0" cellpadding="0" class="">
        <tr>
            <td width="50%">
                <a href="/">
                    <div class="col-md-7 col-lg-5 logo animate__animated animate__fadeInDown">
                        <img alt="SmartSure" src="<?php echo base_url(); ?>assets/images/logo.png" width="100%">
                    </div>
                </a>
            </td>
            <td width="50%" align="right" style="padding: 20px 20px 0;">
                <img alt="phone" src="<?php echo base_url(); ?>assets/images/phone.png" width="4%" class="pb-2">
                <span style="margin-left: 15px; color: #ffffff; font-size: 23px; font-weight: bold;">02-002-1234</span>
            </td>
        </tr>
    </table>

    <div id="nav">
        <a href="<?php base_url();?>/backend/" id="home" class="active">หน้าหลัก</a>
        <a href="<?php base_url();?>/backend/about" id="about">เกี่ยวกับเรา</a>
        <a href="<?php base_url();?>/backend/product" id="product">ซื้อผลิตภัณฑ์</a>
        <a href="<?php base_url();?>/backend/promotion" id="promotion">โปรโมชั่น</a>
        <a href="<?php base_url();?>/backend/news" id="news">ข่าวสารและกิจกรรม</a>
        <a href="<?php base_url();?>/backend/contactus" id="contactus">ติดต่อเรา</a>
    </div>
</div>

<div class="d-md-none d-block" style="margin-bottom: 20px;">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand animate__animated animate__fadeInDown" href="#">
            <img src="<?php echo base_url(); ?>assets/images/logo.png" width="150px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="padding-top: 20px;">
                <a class="home nav-item nav-link active" href="<?php base_url();?>/backend/">หน้าหลัก <span class="sr-only">(current)</span></a>
                <a class="about nav-item nav-link" href="<?php base_url();?>/backend/about">เกี่ยวกับเรา</a>
                <a class="product nav-item nav-link" href="<?php base_url();?>/backend/product">ซื้อผลิตภัณฑ์</a>
                <a class="promotion nav-item nav-link" href="<?php base_url();?>/backend/promotion">โปรโมชั่น</a>
                <a class="news nav-item nav-link" href="<?php base_url();?>/backend/news">ข่าวสารและกิจกรรม</a>
                <a class="contactus nav-item nav-link" href="<?php base_url();?>/backend/contactus">ติดต่อเรา</a>
            </div>
        </div>
    </nav>
</div>