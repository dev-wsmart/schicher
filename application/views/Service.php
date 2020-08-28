<?php

  $this->db->select("*");
	$this->db->from("service");
  $this->db->where("service.status", "1");
  $query = $this->db->get();
	$services = $query->result();
	

?>
<?php include('Banner.php'); ?>
<div class="product">
    <div class="row p-3">
        <div class="title">
            <div class="title-circle">
                <img src="<?php echo base_url(); ?>/assets/images/car.png" />
						</div>
            <div class="title-text"><?php echo $this->lang->line('qualityservice'); ?></div>
        </div>
    </div>
      <div class="row p-1">
        <div class="mx-5 my-4">

				<?php foreach($services as $service): 
							
							if($this->session->userdata("language")=='english')
							{
								$topic = $service->topic_en;
								$detail = $service->detail_en;
							}
							elseif($this->session->userdata("language")=='german')
							{
								$topic = $service->topic_de;
								$detail = $service->detail_de;
							}
							else
							{
								$topic = $service->topic_th;
								$detail = $service->detail_th;
							}
						?>
                <div class="row frame mb-3">
                    <div class="col-lg-4">
                        <div class="package-title"><?php echo $topic; ?></div>
                        <div class="images">
                            <img src="<?php echo base_url();?>/assets/uploads/Service/<?php echo $service->images?>" />
                        </div>
                    </div>
              
                    <div class="col-lg-8">
                        <div class="details-title"><?php echo $topic;?></div>
                        <div class="details">
                          <?php echo mb_substr($detail,0,600,'UTF-8'); ?>
                        </div>
                        <!-- <div class="button"><a href="<?php echo base_url(); ?>Service_list?service=<?php echo $service->id_service ?>" class="btn btn-more"><?php echo $this->lang->line('more'); ?></a></div> -->
                        <div class="button"><a href="<?php echo base_url(); ?>Service_list?service=<?php echo $service->id_service ?>" class="btn btn-more"><?php echo $this->lang->line('more'); ?></a></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
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
.content-row{
  display: block;
}

.frame {
  padding: 10px;
  border: 9px solid #012C49;
}
.images{
  width: 100%;
  height: 200px;
  overflow: hidden;
}
.images img{
  width: 100%;
  height: auto;
  object-fit: cover;
}
.package-title {
  font-size: 22px;
  font-weight: bold;
}
.details-title {
  background-color: #000000;
  color: #ffffff;
  padding: 5px;
  margin-bottom: 10px;
  font-size: 19px;
  font-weight: bold;
}
.details {
  text-align: left;
}
.button {
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
