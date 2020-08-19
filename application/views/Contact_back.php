<?php
$this->db->select("*");
$this->db->from("about");
$this->db->where("about.status", "1");
$query = $this->db->get();
$about = $query->result();
?>


<div class="about pb-5">
    <div class="py-4">
      <div class="page-title">SCHICHER</div>
    </div>
    <div class="mx-lg-5">
      <div class="content">
        <?php foreach($about as $abouts): ?>
        <div class="row">
            <div class="col-lg-12 d-none d-sm-block"><br><br><br><br>
				<a style="font-size: 30px; color:#ffffff">
					ข้อมูลของคุณถูกส่งให้ SCHICHER เรียบร้อยแล้ว<br>
					เจ้าหน้าที่จะติดต่อกลับภายใน 24 ชั่วโมงค่ะ
				</a><br><br><br><br>
            </div>
            <div class="col-lg-12 d-none d-sm-block">
            	<img src="<?php echo base_url(); ?>/assets/images/callcenter.png" width="40%" />
            </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#nav a').removeClass("active");
        $('#service').addClass("active");
        
        $('.navbar-nav a').removeClass("active");
        $('a.service').addClass("active");
    });
</script>

<style>
.detail{
  margin-top: 25px;
  text-align: left;
}
</style>
