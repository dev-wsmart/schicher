<?php
$this->db->select("*");
$this->db->from("promotion");
$this->db->where("promotion.id", $id);
$query = $this->db->get();
$promotions = $query->row();
?>
<div class="container">
    <div class="row">
        <div class="col-12 p-4">
            <img class="top-img" src="<?php echo base_url(); ?>assets/uploads/Promotion/<?php echo $promotions->image ?>">
		</div>
		
		<?php
		if($this->session->userdata("language")=='english'){$detail = $promotions->details_en;$topic='Topic';}
		elseif($this->session->userdata("language")=='german'){$detail = $promotions->details_de;$topic='Thema';}
		else{$detail = $promotions->details_th;$topic='หัวข้อ';}
		?>

        <div class="col-12">
            <div class="title"><?php echo $topic;  ?></div>
            <div class="content col-12">
                <div>
                    <?php echo $detail ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#nav a').removeClass("active");
        $('#promotion').addClass("active");

        $('.navbar-nav a').removeClass("active");
        $('a.promotion').addClass("active");
    });
</script>

<style>
.container{
    min-height: 768px;
}

.title{
    width: 100%;
    margin: 0px;
    padding: 5px 50px 2px;
    background-color: black;
    font-size: 25px;
    text-align: left;
    font-weight: 600;
    color: #ffffff;
}

.top-img{
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.content{
    margin: 0px 0px 2% 0px;
    padding: 10px;
}

.content > div{
    padding: 20px;
    text-align: left;
    border: 2px solid #f5f5f5;
    background-image: linear-gradient(to left top, #a2ced1, #ffffff);
}
</style>
