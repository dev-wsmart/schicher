<div class="customerinfo">
    <div class="row p-3 pb-5">
      <div class="title">
        <div class="title-circle">
          <img src="<?php base_url(); ?>assets/images/car.png" />
        </div>
        <div class="title-text">
          กรุณาฝากข้อมูลติดต่อกลับ
        </div>
      </div>
      <div class="mx-5 my-3 w-100">
        <form name ="contactinput" action="CustomerInfo/save_contactinput" method="post">
          <div class="row">
            <div class="col-lg-6 form-left">
              <input type="text" name="brand" id="brand" placeholder="ยี่ห้อ" class="form-control form-control-sm" required>
              <input type="text" name="model" id="model" placeholder="รุ่น" class="form-control form-control-sm" required>
              <input type="text" name="year" id="year" placeholder="ปี" class="form-control form-control-sm" required>
              <input type="text" name="mileage" id="mileage" placeholder="เลขไมล์" class="form-control form-control-sm" required>
            </div>
            <div class="col-lg-6 form-right">
              <input type="text" name="name" id="name" placeholder="ชื่อ" class="form-control form-control-sm" required>
              <input type="text" name="lname" id="lname" placeholder="นามสกุล" class="form-control form-control-sm" required>
              <input type="text" name="tel" id="tel" placeholder="เบอร์โทร" class="form-control form-control-sm" required>
              <input type="text" name="email" id="email" placeholder="อีเมล์" class="form-control form-control-sm" required>
						</div>
						<div class="col-lg-12 button" align="right">
                <button type="submit" class="btn btn-dark" style="margin-right: -15px;margin-top:5px">ติดต่อกลับ</button>
              </div>
          </div>
        </form>
      </div>
      <div class="mt-2 mx-auto">
        <div style="font-size: 22px; font-weight: 600;">Thank You</div>
        <div>
					<img src="<?php base_url(); ?>assets/images/schicher-logo-white.png" width="10%" style="border-radius: 10%;box-shadow: 1px 3px 5px 1px #888888;" />
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

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
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
.ui-menu-item{
  text-align: left;
}
form {
  padding: 15px;
}
.form-left {
  padding: 10px 20px;
  background-color: #012c49;
  border-right: 15px solid #ffffff;
}
.form-right {
  padding: 10px 20px;
  background-color: #012c49;
  border-left: 15px solid #ffffff;
}
input[type="text"] {
  margin-top: 15px;
  margin-bottom: 15px;
}
.button {
  display: flex;
  justify-content: flex-end;
}
.btn-submit {
  margin-top: 5px;
  color: #ffffff;
  background-color: #000000;
}
@media only screen and (max-width: 991px){
  .form-left {
    border: none;
  }
  .form-right {
    border: none;
  }
}
</style>
