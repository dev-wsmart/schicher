<?php

	$service = $_GET['service'];;

  $this->db->select("*");
  $this->db->from("service_list");
  $this->db->join('service', 'service_list.id_service = service.id_service');
	$this->db->where("service_list.status", "1");
  $this->db->where("service_list.id_service", "$service");
  $query = $this->db->get();
  $service_list = $query->result();
	
  $this->db->select("*");
  $this->db->from("service");
  $this->db->where("service.status", "1");
  $this->db->where("service.id_service", "$service");
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
	<?php foreach($services as $ser):
		if($this->session->userdata("language")=='english'){$topicH = $ser->topic_en;}
		elseif($this->session->userdata("language")=='german'){$topicH = $ser->topic_de;}
		else{$topicH = $ser->topic_th;}
		?>
			<div class="title-text"><?php echo $ser->id_service.'. '.$topicH; ?></div>
	<?php endforeach; ?>
        </div>
    </div>
      <div class="row p-1">
        <div class="mx-5 my-4">

		<?php foreach($service_list as $service): 
							
			if($this->session->userdata("language")=='english')
			{
				$list = $service->list_en;
        $detail = $service->detail_en;
        $pdf = $service->pdf_en;
        $pdfPath = base_url()."/assets/uploads/PDF_en/".$pdf;
			}
			elseif($this->session->userdata("language")=='german')
			{
				$list = $service->list_de;
        $detail = $service->detail_de;
        $pdf = $service->pdf_de;
        $pdfPath = base_url()."/assets/uploads/PDF_de/".$pdf;
			}
			else
			{
				$list = $service->list_th;
        $detail = $service->detail_th;
        $pdf = $service->pdf_th;
        $pdfPath = base_url()."/assets/uploads/PDF_th/".$pdf;
			}
		?>
                <div class="row frame mb-3">
                    <div class="col-lg-4">
                        <div class="package-title"><?php echo $list; ?></div>
                        <div class="images">
                            <img src="<?php echo base_url();?>/assets/uploads/Service_list/<?php echo $service->images_list?>" />
                        </div>
                    </div>
              
                    <div class="col-lg-8">
                        <div class="details-title"><?php echo $list;?></div>
                        <div class="details">
                          <id
                          <?php echo $detail ?>
                        </div>
                        <div class="button"><a href="<?php echo $pdfPath; ?>" target="_blank" class="btn btn-more"><?php echo $this->lang->line('more'); ?></a></div>
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
