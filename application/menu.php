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
<div id="nav" class="d-none d-md-block">
    <a href="<?php base_url();?>/backend/" class="<?php if ($this->uri->segment(1) === '/'){ echo "active"; } ?>">หน้าหลัก</a>
    <a href="<?php base_url();?>/backend/about" class="<?php if ($this->uri->segment(1) === 'about'){ echo "active"; } ?>">เกี่ยวกับเรา</a>
    <a href="<?php base_url();?>/backend/product" class="<?php if ($this->uri->segment(1) === 'product'){ echo "active"; } ?>">ซื้อผลิตภัณฑ์</a>
    <a href="<?php base_url();?>/backend/promotion" class="<?php if ($this->uri->segment(1) === 'promotion'){ echo "active"; } ?>">โปรโมชั่น</a>
    <a href="<?php base_url();?>/backend/news" class="<?php if ($this->uri->segment(1) === 'news'){ echo "active"; } ?>">ข่าวสารและกิจกรรม</a>
    <a href="<?php base_url();?>/backend/contactus" class="<?php if ($this->uri->segment(1) === 'contactus'){ echo "active"; } ?>">ติดต่อเรา</a>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>