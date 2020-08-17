<!-- <?php echo "<meta http-equiv=\"refresh\" content=\"1;url='".base_url()."'\">"; ?> -->
<div class="success pb-5">
    <div class="py-4">
        <div class="page-title">SMART SURE ID</div>
    </div>
    <div class="mx-5 content">
        <div class="text">
            ข้อมูลของคุณถูกส่งให้ SMART SURE เรียบร้อยแล้ว
            <br />
            เจ้าหน้าที่จะติดต่อกลับภายใน 24 ชั่วโมงค่ะ
            <br/>
            <?php echo "$name";?> <br>
            <?php echo "$email";?> <br>
            <?php echo "$headline";?> <br>
            <?php echo "$message";?> <br>
        </div>
        <div class="mt-5">
            <img src="<?php echo base_url(); ?>assets/images/callcenter.png" width="40%" />
        </div>
    </div>
</div>
<?php
// session_start();
// session_destroy();
?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#nav a').removeClass("active");
        $('#product').addClass("active");

        $('.navbar-nav a').removeClass("active");
        $('a.product').addClass("active");
    });
</script>

<style>
.page-title {
  margin: 0 50px 0 auto;
  padding-left: 20px;
  padding-right: 20px;
  background-color: #000000;
  box-shadow: 4px 6px 3px -3px #8c8c8c;
}
.text {
  margin-top: 60px;
  font-size: 22px;
  font-weight: 600;
  color: #ffffff;
}
</style>
