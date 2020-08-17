<?php
$this->db->select("*");
$this->db->from("news");
$this->db->where("news.status", "1");
$query = $this->db->get();
$news = $query->result();
?>

<?php include('Banner.php'); ?>
<div class="promotion">
    <div class="row">
        <div class="p-3 pb-4">
            <div class="title mb-3">
                <div class="title-circle">
                  <img src="<?php echo base_url(); ?>/assets/images/car.png" />
                </div>
                <div class="title-text">ข่าวสารและกิจกรรม</div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach($news as $new):  ?>
        <div class="mx-5 mt-2">
            <div cols="12" class="promotion-title">หัวข้อข่าวสารและกิจกรรม</div>
            <div class="frame">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php echo base_url(); ?>/assets/uploads/News/<?php echo $new->news_image ?>" width="100%" />
                    </div>
                    <div class="col-lg-8">
                        <div class="details">
                            <?php echo mb_substr($new->news_detail,0,450,'UTF-8'); ?>...
                        </div>
                        <div class="button">
                            <a class="btn btn-more" href="<?php base_url();?>news/view/<?php echo $new->id;?>">อ่านต่อ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#nav a').removeClass("active");
        $('#news').addClass("active");
        
        $('.navbar-nav a').removeClass("active");
        $('a.news').addClass("active");
    });
</script>


<style>
.frame {
  margin-bottom: 25px;
  padding: 10px;
  background-color: #a2ced1;
  box-shadow: 0 35px 10px -30px #6e6e6e;
}
.promotion-title {
  text-align: left;
  padding: 4px 40px;
  font-size: 18px;
  font-weight: 600;
  color: #ffffff;
  background-color: #000000;
}
.details-title {
  padding: 5px;
  margin-bottom: 10px;
  font-size: 19px;
  font-weight: bold;
}
.details {
  text-align: left;
}
.button {
  position: absolute;
  bottom: 0;
  right: 10px;
  text-align: right;
}
.btn-more {
  padding: 4px 10px 1px;
  background-color: #000000;
  color: #ffffff;
}
.btn-more:hover {
    color: #ffffff;
}
</style>
