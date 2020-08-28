<?php
$this->db->select("*");
$this->db->from("news");
$this->db->where("news.id", $id);
$query = $this->db->get();
$news = $query->row();
?>
<div class="container">
    <div class="row">
        <div class="col-12 p-4">
            <img class="top-img" src="<?php echo base_url(); ?>assets/uploads/News/<?php echo $news->news_image ?>">
        </div>

		<?php
		if($this->session->userdata("language")=='english'){$detail = $news->news_detail_en;$topic='Topic';}
		elseif($this->session->userdata("language")=='german'){$detail = $news->news_detail_de;$topic='Thema';}
		else{$detail = $news->news_detail_th;$topic='หัวข้อ';}
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
        $('#news').addClass("active");

        $('.navbar-nav a').removeClass("active");
        $('a.news').addClass("active");
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
