<div class="contactus pb-5">
    <div class="py-4">
        <div class="page-title">ติดต่อเรา</div>
    </div>
    <div class="mx-lg-5">
        <div class="content row">
            <div class="col-lg-7">

                <form action="<?php base_url();?>Mail/Send" method="POST" parsley-validate>
                    <input type="text" name="name" class="form-control form-control-sm my-1" placeholder="Name">
                    <input type="text" name="email" class="form-control form-control-sm my-1" placeholder="Email address">
                    <input type="text" name="headline" class="form-control form-control-sm my-1" placeholder="Subject">
                    <textarea name="message" cols="30" rows="6" class="form-control form-control-sm my-1" placeholder="Your message"></textarea>
                    <button type="submit" class="btn btn-sm btn-send mt-4">Send</button>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="ss-logo">
                    <img src="<?php base_url(); ?>assets/images/LOGO2.png" width="100%" />
                </div>
                <div class="bg-address">
                    <table>
                        <tr>
                            <td><img src="<?php base_url(); ?>assets/images/contact-h.png" width="16px" /></td>
                            <td class="contact-text">1122 Wasutha Group 4floor Rama 9 Rd. Suanluang, Suanluang Bangkok 10250</td>
                        </tr>
                        <tr>
                            <td><img src="<?php base_url(); ?>assets/images/contact-f.png" height="16px" /></td>
                            <td class="contact-text">SMART SURE</td>
                        </tr>
                        <tr>
                            <td><img src="<?php base_url(); ?>assets/images/contact-p.png" width="16px" /></td>
                            <td class="contact-text">02-002-1234</td>
                        </tr>
                        <tr>
                            <td><img src="<?php base_url(); ?>assets/images/contact-m.png" width="16px" /></td>
                            <td class="contact-text">info@smartsure.co.th</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="contact-map"><img src="<?php base_url(); ?>assets/images/contact-map.png" width="85%" /></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#nav a').removeClass("active");
        $('#contactus').addClass("active");
        
        $('.navbar-nav a').removeClass("active");
        $('a.contactus').addClass("active");
    });
</script>

<style>
.content{
  margin-bottom: 140px;
  box-shadow: -80px 115px 20px -105px #5a5a5a;
}
.btn-send{
    color: #ffffff;
  background-color: #000000;
}
.btn-send:hover{
    color: #ffffff;
  box-shadow: 0 5px 10px -3px #757575;
}
.ss-logo {
  margin: 20px 60px;
  padding: 10px 30px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 5px 10px -2px #5a5a5a;
}
.bg-address{
  position: absolute;
  margin: 0 10%;
  padding: 40px 30px;
  font-weight: 600;
  text-align: left;
  color: #000000;
  background-color: #ffffff;
}
.bg-address table tr td{
  padding-bottom: 10px;
}
.contact-text{
  padding-left: 20px;
}
.contact-map{
  padding-top: 15px;
  text-align: center;
}

@media only screen and (max-width: 991px) {
    .content{
        padding: 30px 20px;
        margin-bottom: 20px;
        box-shadow: 0px 9px 12px 0px #5a5a5a;
    }
    .bg-address{
        position: static;
        margin: 0;
    }
    .ss-logo{
        margin: 20px;
    }
}
</style>