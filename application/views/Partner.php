<?php
$this->db->select("*");
$this->db->from("partner");
$this->db->where("partner.status", "1");
$query = $this->db->get();
$partners = $query->result();
?>

<?php include('Banner.php'); ?>
<div class="promotion">
    <div class="row">
        <div class="p-3">
            <div class="title">
                <div class="title-circle">
                  <img src="<?php echo base_url(); ?>/assets/images/car.png" />
                </div>
                <div class="title-text"><?php echo $this->lang->line('partner'); ?></div>
            </div>
        </div>
    </div>
    <div class="row">
		<?php foreach($partners as $partner):  

			if($this->session->userdata("language")=='english')
			{
				$topic = $partner->name_part_en;
				$detail = $partner->detail_part_en;
			}
			elseif($this->session->userdata("language")=='german')
			{
				$topic = $partner->name_part_de;
				$detail = $partner->detail_part_de;
			}
			else
			{
				$topic = $partner->name_part_th;
				$detail = $partner->detail_part_th;
			}
		?>
        <div class="mx-5 mt-2">
            <div cols="12" class="promotion-title"><?php echo $topic;?></div>
            <div class="frame">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php echo base_url(); ?>/assets/uploads/Partner/<?php echo $partner->images_part ?>" width="100%" />
                    </div>
                    <div class="col-lg-8">
                        <div class="details">
                            <?php echo mb_substr($detail,0,500,'UTF-8'); ?>...
                        </div>
                        <div class="button">
                            <a class="btn btn-more" href="<?php base_url();?>Partner/view/<?php echo $partner->id_partner;?>"><?php echo $this->lang->line('read'); ?></a>
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
        $('#partner').addClass("active");
        
        $('.navbar-nav a').removeClass("active");
        $('a.partner').addClass("active");
    });
</script>


<style>
.frame {
  margin-bottom: 25px;
  padding: 10px;
  background-color: #012C49;
  color: #ffffff;
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
