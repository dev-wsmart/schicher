
<div id="footer" class="row">
    <div class="col-12 col-lg-6 footer-left">
        <div class="sitemap">
            <div class="sitemap-title"><?php echo $this->lang->line('sitemap'); ?></div>
            <div class="row">
                <div class="col-lg-6 sitemap-left">
                    <a href="<?php echo base_url();?>"><?php echo $this->lang->line('home'); ?></a><br>
                    <a href="<?php echo base_url();?>about"><?php echo $this->lang->line('about'); ?></a><br>
					<a href="<?php echo base_url();?>service"><?php echo $this->lang->line('service'); ?></a>
                </div>
                <div class="col-lg-6 sitemap-right">
					<a href="<?php echo base_url();?>partner"><?php echo $this->lang->line('partner'); ?></a><br>
                    <a href="<?php echo base_url();?>news"><?php echo $this->lang->line('news'); ?></a><br>
                    <a href="<?php echo base_url();?>gallery"><?php echo $this->lang->line('gallery'); ?></a><br>
					<a href="<?php echo base_url();?>contactus"><?php echo $this->lang->line('contactus'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 footer-right">
        <div class="map">
            <img alt="map" src="<?php echo base_url(); ?>assets/images/map.png" width="50%">
        </div>
        <div class="phone">
            <img alt="phone" src="<?php echo base_url(); ?>assets/images/phone.png" width="6%">
            <span style="margin-left: 15px;">02-002-1234</span>
        </div>
    </div>
</div>
