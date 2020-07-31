<?php
$this->db->select("*");
$this->db->from("menu_slide");
$this->db->where("menu_slide.status", "1");
$this->db->limit("3,0");
$query = $this->db->get();
$images = $query->result();
$countIndicator = 0;
$countImage = 0;

$this->db->select("*")
?>
<div class="banner">
    
    <div class="row mx-lg-4 py-lg-3">
        <div class="col-lg-9 pr-lg-3 px-0 slide">
            <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php foreach($images as $image): ?>
                    <li data-target="#carouselFade" data-slide-to="<?php echo $countIndicator; ?>" class="<?php if($countIndicator == 0){ echo "active"; } ?>"></li>
                    <?php $countIndicator++; ?>
                    <?php endforeach; ?>
                </ol>
                <div class="carousel-inner">
                    <?php foreach($images as $image):  ?>
                    <div class="carousel-item <?php if($countImage == 0){ echo "active"; } ?>">
                        <img src="<?php echo base_url(); ?>assets/uploads/MenuSlide/<?php echo $image->image ?>" class="d-block w-100">
                    </div>
                    <?php $countImage++; ?>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-3 search">
            <div class="search-title">ค้นหาผลิตภัณฑ์</div>
            <div class="search-form">
                <div id="search-result dropdown"></div>
                <div class="border-form">
                    <form action="">
                        <input type="text" id="brand" name="brand" class="form-control form-control-sm" placeholder="ยี่ห้อ" autocomplete="off" required>
                        <input type="text" id="model" name="model" class="form-control form-control-sm" placeholder="รุ่น"autocomplete="off" required>
                        <input type="text" id="year" name="year" class="form-control form-control-sm" placeholder="ปี"autocomplete="off" required>
                        <input type="text" id="cc" name="cc" class="form-control form-control-sm" placeholder="ขนาดเครื่องยนต์"autocomplete="off" required>
                        <input type="text" id="mileage" name="mileage" class="form-control form-control-sm" placeholder="เลขไมล์"autocomplete="off" required>
                        <button type="submit" class="btn btn-sm">ค้นหา</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
<script>
  var brandWording = "";
  var modelWording = "";
  var ccWording = "";

  $("#brand").on("keyup", function(){
    var str = $(this).val();
    brandWording = str;
  });
  $("#model").on("keyup", function(){
    var str = $(this).val();
    modelWording = str;
  });
  $("#cc").on("keyup", function(){
    var str = $(this).val();
    ccWording = str;
  });

  $("#brand").autocomplete({
    source: function(request, response){
      $.ajax({
      type: "GET",
      url:"suggest/brand/"+brandWording,
      dataType: 'json',
      success:function(data)
      {
        response($.map(data, function (el){
          return {
            label: el.name_brand,
            value: el.name_brand
          }
        }));
      }
      });
    }
  });

  $("#model").autocomplete({
    source: function(request, response){
      $.ajax({
      type: "GET",
      url:"suggest/model/"+$('#brand').val()+"/"+modelWording,
      dataType: 'json',
      success:function(data)
      {
        console.log(data[0]['name_model']);
        response($.map(data, function (el){
          return {
            label: el.name_model,
            value: el.name_model
          }
        }));
      }
      });
    }
  });

  $("#cc").autocomplete({
    source: function(request, response){
      $.ajax({
      type: "GET",
      url:"suggest/ccs/"+ccWording,
      dataType: 'json',
      success:function(data)
      {
        response($.map(data, function (el){
          return {
            label: el.cc,
            value: el.cc
          }
        }));
      }
      });
    }
  });


</script>

<style>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
.ui-menu-item{
  display: block;
  text-align: left;
}

.carousel-item, .carousel-item img{
  height: 335px;
}
.carousel-item img{
  object-fit: cover;
}
.search{
  padding: 0;
  background-color: #A2CED1;
  color: #ffffff;
}
.search-title{
  background-color: #000;
  padding: 1px;
  font-size: 24px;
  font-weight: bold;
}
.border-form{
  border: 1px solid #d9d9d9;
  padding: 15px 25px;
  box-shadow: 4px 4px 5px -4px #666666;
}
.search-form{
  padding: 10px;
}
.search-form input{
  margin-bottom: 10px;
  background-color: rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 8px 5px -7px #525252;
  border: none;
  border-bottom: 2px solid #ffffff;
}
.search-form input::placeholder{
  text-align: center;
  font-size: 13px;
  color: #ffffff;
}
.search-form button{
  margin-top: 5px;
  padding: 3px 20px;
  font-size: 17px;
  font-weight: bold;
  color: #ffffff;
  background-color: #000000;
}
.search-form button:hover{
    color: #ffffff;
}

@media only screen and (max-width: 991px){
  .slide{
    margin: 10px 15px 0;
  }
  .carousel-item{
    height: auto !important;
  }
  .search{
    margin: 15px 30px;
  }
  .search-title{
    font-size: 20px;
  }
}
</style>
