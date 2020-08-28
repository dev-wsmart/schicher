
<html>
<head>
<style>
.footerlogo{
    width: 250px;
    height: 100px;
}
hr{
    margin: 20px 0px;
}
</style>
</head>
<body>

    ลูกค้าได้ส่งอีเมลโดยมีเนื้อหาดังนี้<br><br>

    <b>ชื่อลูกค้า : </b><?php echo $name;?> <br>
    <b>หัวข้อ : </b><?php echo $headline;?> <br> <br>
    <hr>
    <b>ข้อความ :</b><br>
    <?php echo $message;?> <br>
    <hr>
    <img class="footerlogo" src="<?php echo base_url(); ?>assets/images/schicher-logo.png">
    
</body>
</html>