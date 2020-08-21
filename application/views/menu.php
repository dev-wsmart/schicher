<!--Desktop / Tablet -->

<?php

    const TH = 'thai';
    const EN = 'english';
    const DE = 'german';

    if (!$this->session->userdata("language")){
        $this->session->set_userdata("language", TH);
    }
?>
<div class="d-none d-md-block">
    <div class="d-flex bd-highlight mb-3">
        <div class ="mr-auto bd-highlight">
            <a href="<?php echo base_url(); ?>">
                <div class="logo animate__animated animate__fadeInDown">
                    <img alt="SmartSure" src="<?php echo base_url(); ?>assets/images/schicher-logo.png">
                </div>
            </a>
		</div>
        <div class="bd-highlight lang-link">
			<?php $currenturl = $_SERVER['QUERY_STRING'] ? current_url(). '?'.$_SERVER['QUERY_STRING'] : current_url(); ?>
            <a href="<?php echo base_url().'/language?url='.$currenturl.'&lang='.TH ?>" class="<?php if($this->session->userdata("language") == TH) { echo "active"; } ?>">TH</a> |
            <a href="<?php echo base_url().'/language?url='.$currenturl.'&lang='.EN ?>" class="<?php if($this->session->userdata("language") == EN) { echo "active"; } ?>">EN</a> |
            <a href="<?php echo base_url().'/language?url='.$currenturl.'&lang='.DE ?>" class="<?php if($this->session->userdata("language") == DE) { echo "active"; } ?>">DE</a>
        </div>
    </div>
		<div id="nav">
			<a href="<?php echo base_url();?>" id="home" class="active"><?php echo $this->lang->line('home'); ?></a>
            <a href="<?php echo base_url();?>about" id="about"><?php echo $this->lang->line('about'); ?></a>
            <div class="service-dropdown">
                <a href="<?php echo base_url();?>service" id="service"><?php echo $this->lang->line('service'); ?></a>
                <div class="nav-dropdown">
                    <a href="<?php echo base_url();?>service"><?php echo $this->lang->line('qualityservice'); ?></a>
                    <a href="<?php echo base_url(); ?>customerinfo"><?php echo $this->lang->line('callback');?></a>
                </div>
            </div>
            <a href="<?php echo base_url();?>partner" id="partner"><?php echo $this->lang->line('partner'); ?></a>
			<a href="<?php echo base_url();?>promotion" id="promotion"><?php echo $this->lang->line('promotion'); ?></a>
			<a href="<?php echo base_url();?>news" id="news"><?php echo $this->lang->line('news'); ?></a>
            <a href="<?php echo base_url();?>gallery" id="gallery"><?php echo $this->lang->line('gallery'); ?></a>
			<a href="<?php echo base_url();?>contactus" id="contactus"><?php echo $this->lang->line('contactus'); ?></a>
        </div>
        
</div>

<div class="d-md-none d-block" style="margin-bottom: 20px;">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand animate__animated animate__fadeInDown" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/images/schicher-logo.png" width="150px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="padding-top: 20px;">
                <a class="home nav-item nav-link active" href="<?php echo base_url();?>"><?php echo $this->lang->line('home'); ?> <span class="sr-only">(current)</span></a>
                <a class="about nav-item nav-link" href="<?php echo base_url();?>about"><?php echo $this->lang->line('about'); ?></a>
                <a class="service nav-item nav-link" href="<?php echo base_url();?>service"><?php echo $this->lang->line('service'); ?></a>
                <a class="partner nav-item nav-link" href="<?php echo base_url();?>partner"><?php echo $this->lang->line('partner'); ?></a>
                <a class="promotion nav-item nav-link" href="<?php echo base_url();?>promotion"><?php echo $this->lang->line('promotion'); ?></a>
                <a class="news nav-item nav-link" href="<?php echo base_url();?>news"><?php echo $this->lang->line('news'); ?></a>
                <a class="gallery nav-item nav-link" href="<?php echo base_url();?>gallery"><?php echo $this->lang->line('gallery'); ?></a>
                <a class="contactus nav-item nav-link" href="<?php echo base_url();?>contactus"><?php echo $this->lang->line('contactus'); ?></a>
                <div class="d-flex justify-content-center lang-link">
                    <a href="<?php echo base_url().'/language?url='.current_url().'&lang='.TH ?>" class="<?php if($this->session->userdata("language") == TH) { echo "active"; } ?>">TH</a> |
                    <a href="<?php echo base_url().'/language?url='.current_url().'&lang='.EN ?>" class="<?php if($this->session->userdata("language") == EN) { echo "active"; } ?>">EN</a> |
                    <a href="<?php echo base_url().'/language?url='.current_url().'&lang='.DE ?>" class="<?php if($this->session->userdata("language") == DE) { echo "active"; } ?>">DE</a>
                </div>
            </div>
        </div>
    </nav>
</div>
