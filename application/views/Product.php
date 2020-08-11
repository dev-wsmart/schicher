<?php
if (isset($_GET['brand']) && isset($_GET['model'])){

  $brand = $_GET['brand'];
  $model = $_GET['model'];
  $currentYear = date('Y');
  $year = intval($_GET['year']);
  $remainYear = $currentYear - $year;
  $mileage = intval($_GET['mileage']);

  $this->db->select("distinct('car_package.package'), product.package, product.details, product.image, product.id");
  $this->db->from('car_package');
  $this->db->join('product', 'car_package.package_name = product.package');
  $this->db->like("car_package.car_brand", $brand, 'after');
  $this->db->like('car_package.car_model', $model, 'after');
  $this->db->where('car_package.year_limit >', $remainYear);
  $this->db->where('car_package.km_limit >=', $mileage);
  $this->db->where("product.status", "1");
  $query_package = $this->db->get();
  $products = $query_package->result();

}else{
  $this->db->select("*");
  $this->db->from("product");
  $this->db->where("product.status", "1");
  $query = $this->db->get();
  $products = $query->result();
}
?>
<?php include('Banner.php'); ?>
<div class="product">
    <div class="row p-3">
        <div class="title">
            <div class="title-circle">
                <img src="<?php echo base_url(); ?>/assets/images/car.png" />
            </div>
            <div class="title-text">ผลิตภัณฑ์คุณภาพ</div>
        </div>
    </div>
      <div class="row p-1">
        <div class="mx-5 my-4">
            <?php foreach($products as $product): ?>
                <div class="row frame mb-3">
                    <div class="col-lg-4">
                        <div class="package-title"><?php echo $product->package ?></div>
                        <div class="images">
                            <img src="<?php echo base_url();?>/assets/uploads/Product/<?php echo $product->image?>" />
                        </div>
                    </div>
              
                    <div class="col-lg-8">
                        <div class="details-title">รายละเอียดผลิตภัณฑ์</div>
                        <div class="details">
                          <?php echo mb_substr($product->details,0,600,'UTF-8'); ?>...
                        </div>
                        <div class="button"><a href="<?php echo base_url(); ?>details/view/<?php echo $product->id ?>" class="btn btn-more">เพิ่มเติม</a></div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php if (isset($_GET['brand']) && isset($_GET['model'])){
                if ($query_package->num_rows() > 0){
                  echo "พบ ".$query_package->num_rows()." แพคเกจของ<br>";
                  echo $brand . " ". $model. " ". $year ;
                }else{
                  echo "ไม่พบผลการค้นหา";
                }
              }?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#nav a').removeClass("active");
        $('#product').addClass("active");

        $('.navbar-nav a').removeClass("active");
        $('a.product').addClass("active");
    });
</script>

<style>
.content-row{
  display: block;
}

.frame {
  padding: 10px;
  border: 9px solid #a2ced1;
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