<?php
$this->db->select("*");
$this->db->from("about");
$this->db->where("about.status", "1");
$query = $this->db->get();
$about = $query->result();
?>


<div class="about pb-5">
    <div class="py-4">
      <div class="page-title">เกี่ยวกับเรา</div>
    </div>
    <div class="mx-lg-5">
      <div class="content">
        <?php foreach($about as $abouts): ?>
        <div class="row">
            <div class="col-lg-12 d-none d-sm-block">
            <img src="<?php echo base_url();?>assets/uploads/About/<?php echo $abouts->img_name; ?>" width="100%" alt="" />
            <!-- <img src="<?php echo base_url(); ?>/assets/images/car12.jpg" width="100%" /> -->
            </div>
            
            <div class="col-lg-12 detail">
              <?php echo $abouts->content;?>
            </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#nav a').removeClass("active");
        $('#about').addClass("active");
        
        $('.navbar-nav a').removeClass("active");
        $('a.about').addClass("active");
    });
</script>

<style>
.detail{
  margin-top: 25px;
  text-align: left;
}
</style>