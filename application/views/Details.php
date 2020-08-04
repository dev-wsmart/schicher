<?php
$this->db->select("*");
$this->db->from("product");
$this->db->where("product.id", $id);
$query = $this->db->get();
$products = $query->row();
?>

<div class="detail pb-2">
    <?php echo $products->details; ?>
    <!-- <div class="row p-3">
        <div class="title">
            <div class="title-circle">
                <img src="<?php base_url(); ?>assets/images/car.png" />
            </div>
            <div class="title-text">
                ซื้อผลิตภัณฑ์ง่าย ๆ กับ SMART SURE
            </div>
        </div>
        <div class="inside mx-5">
          <div class="row">
            <div class="col-lg-3 font-weight-bold">
              เงื่อนไขการให้บริการ
            </div>
            <div class="col-lg-9">
              <div>
                Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ
                ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16
              </div>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg-3 font-weight-bold">
              ระยะเวลาการรับผิดชอบบริการ
            </div>
            <div class="col-lg-9">
              <div>
                Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ
                ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
              </div>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg-3 font-weight-bold">
              รับผิดชอบสูงสุด
            </div>
            <div class="col-lg-9">
              <div>
                Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ
                ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
              </div>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg-3 font-weight-bold">
              สิทธิพิเศษ
            </div>
            <div class="col-lg-9">
              <div>
                Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ
                ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
              </div>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg-3 font-weight-bold">
              รถที่ไม่สามารถได้รับความคุ้มครอง
            </div>
            <div class="col-lg-9">
              <div>
                Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ
                ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
              </div>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg-3 font-weight-bold">
              รายละเอียดความคุ้มครอง
            </div>
            <div class="col-lg-9">
              <div>
                Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ
                ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
              </div>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg-3 font-weight-bold">
              หมายเหตุ
            </div>
            <div class="col-lg-9">
              <div>
                Lorem Ipsum คืออะไร? Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ
                ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
                มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่
                16
              </div>
            </div>
          </div>
        </div>
        <div class="button">
          <a href="/backend/customerInfo" class="btn btn-buy">ซื้อผลิตภัณฑ์</a>
        </div>
    </div> -->
    <div class="button">
      <a href="<?php echo base_url(); ?>customerInfo" class="btn btn-buy">ซื้อผลิตภัณฑ์</a>
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
.detail{
  padding: 20px;
  text-align: left;
}

hr {
  margin: 5px 0;
  width: 85%;
  background-color: #c4c4c4;
}
.inside {
  height: 800px;
  margin-top: 30px;
  font-size: 15px;
  text-align: left;
  overflow-x: hidden;
  overflow-y: scroll;
}
.inside .col-lg-9 {
  padding-right: 35px;
}
.inside::-webkit-scrollbar-track {
  border-radius: 10px;
  background-color: #f5f5f5;
  box-shadow: inset 0 0 6px rgba(116, 116, 116, 0.3);
}
.inside::-webkit-scrollbar {
  width: 7px;
  background-color: #f5f5f5;
}
.inside::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background-color: rgb(148, 148, 148);
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
.button {
    width: 95%;
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
}
.btn-buy {
    color: #ffffff;
    background-color: #000000;
    box-shadow: 2px 3px 3px 0px #b4b4b4;
}
.btn-buy:hover{
    color: #ffffff;
    box-shadow: 2px 3px 3px 0px #797979;
}
</style>