
<div>
    <div class="row p-3">
        <div class="title">
            <div class="title-circle">
                <img src="<?php echo base_url(); ?>/assets/images/car.png" />
            </div>
            <div class="title-text"><?php echo $this->lang->line('register'); ?></div>
        </div>
    </div>
    <div class="register-content">
        <div class="row">
            <div class="col-lg-6 img-col">
                <img src="<?php echo base_url(); ?>/assets/images/schicher-logo.png">
            </div>
            <div class="col-lg-6 form-col">
                <form action="<?php echo current_url(); ?>/sendinfo" method="post">
                    <div class="form-col-content">
                        <input name="name" class="form-control" placeholder="<?php echo $this->lang->line('name'); ?>" required/>
                        <input name="surname" class="form-control" placeholder="<?php echo $this->lang->line('surname'); ?>" required/>
                        <input name="email" class="form-control" type="email" placeholder="<?php echo $this->lang->line('mail'); ?>" required/>
                        <input name="tel" class="form-control" type="tel" placeholder="<?php echo $this->lang->line('tel'); ?>" required/>
                        
                    </div>
                    <div class="submit-btn">
                        <button class="btn btn-dark" type="submit"><?php echo $this->lang->line('register'); ?></button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.register-content{
    padding: 30px;
}

.img-col img{
    margin-top: 40px;
    margin-bottom: 40px;
    width: 250px;
}

.form-col-content{
    background-color: #012C49;
    padding: 30px;
}

.form-col-content .form-control{
    margin: 10px 0px;
}

.submit-btn{
    text-align: right;
    margin-top: 10px;
}
</style>