<?php
    $color  = session()->get('color');

    $bcolor = 'bg-white text-dark';
    $ncolor = 'bg-secondary text-white';
    
    if(@$color)
    {
        $color  = 'white';
    }
    if(@$color == 'black')
    {
        $bcolor = 'bg-dark text-white';
        $ncolor = 'bg-black text-white';
    }

?>

<?= $this->extend('default') ?>
<?= $this->section('title') ?>
	<?=lang('app.home_title')?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <?php
    if(file_exists('assets/img/home/'.$records[0]->img))
    {?>
	<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small"><?=$records[0]->name?> </span>
      
    <span class="w3-xlarge w3-hide-large w3-hide-medium"><?=$records[0]->desc?></span><br>
    <span class="w3-large w3-hide-small"><?=$records[0]->desc?></span>
    <?php if(sess()->get('login'))
    {?>
        <i class="w3-text-blue w3-xxlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/home/'.$records[0]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
      <?php
    }?>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more</a> 
    </p>
  </div> 
  <div class="w3-display-bottomleft w3-text-black w3-xlarge" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>
  	<?php if(0)
	{?>
		<button type="button" class="w3-button w3-large w3-teal" onclick="$.get('<?=base_url('edit/home/'.$r->id)?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-edit"></i></button>
		<button type="button" class="w3-button w3-large w3-red" onclick="$.get('<?=base_url('del/home/'.$r->id)?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-trash"></i></button>
	<?php
	}
	}?>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center"><?=$abouts[0]->name?>
    <?php if(sess()->get('login'))
    {?>
        <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/about/'.$abouts[0]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
      <?php
    }?>
    </h3>
  <p class="w3-center w3-large"><?=$abouts[0]->desc?></p>
    
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-cogs w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large"><?=$abouts[1]->name?>
        <?php if(sess()->get('login'))
        {?>
            <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/about/'.$abouts[1]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
        <?php
        }?>
        </p>
        <p><?=$abouts[1]->desc?></p>
        
    </div>
    <div class="w3-quarter">
      <i class="fas fa-paint-roller w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><?=$abouts[2]->name?>
        <?php if(sess()->get('login'))
        {?>
            <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/about/'.$abouts[2]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
        <?php
        }?>
        </p>
      <p><?=$abouts[2]->desc?></p>
    </div>
      
    <div class="w3-quarter">
      <i class="fas fa-award w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><?=$abouts[3]->name?>
        <?php if(sess()->get('login'))
        {?>
            <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/about/'.$abouts[3]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
        <?php
        }?>
        </p>
      <p><?=$abouts[3]->desc?>

</p>
    </div>
    <div class="w3-quarter">
      <i class="fas fa-magic w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large"><?=$abouts[4]->name?>
        <?php if(sess()->get('login'))
        {?>
            <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/about/'.$abouts[4]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
        <?php
        }?>
        </p>
      <p><?=$abouts[4]->desc?>
    </div>
  </div>
</div>

<!-- Services Section -->
<div class="w3-container w3-light-grey" style="padding:16px" id="services">
  <h3 class="w3-center w3-xxlarge">The Services</h3>
  <p class="w3-center w3-large">Our company provides a range of services to meet your needs:
  <br>
      Roofing and roof painting<br>
      Water blasting<br>
      Exterior painting<br>
      Ceiling battens and suspended ceilings<br>
      Steel stud wall framing<br>
      Gib supply, install, and stopping<br>
      Painting and decoration<br>
      We offer comprehensive solutions in these areas to enhance the aesthetics and functionality of your property.</p>
  
    <div class="w3-row-padding" style="margin-top:64px">
    <?php
        $z=1;
        foreach($services as $r)
        {
        if($z >3)
        {
            $e=3;
        }
        else
        {
            $e=4;
        }?>
        <div class="w3-col l<?=$e?> m6 w3-margin-bottom">
        <div class="w3-card w3-white">
        <img src="<?=base_url('assets/img/services/'.$r->img)?>" style="width:100%">
        <div class="w3-container">
          <h3><?=$r->name?></h3>
          <p><?=$r->desc?></p>
          <p><a href="mailto:info@eicconstruction.co.nz" class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</a></p>
        </div>
      </div>
    </div>
    <?php
    $z++;
    }?>
        
       
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container" style="padding:16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <a class="w3-large" href="https://www.google.com/maps/place/14+Fjord+Way,+Karaka+2113,+New+Zealand/@-37.0828634,174.9154926,17z/data=!3m1!4b1!4m6!3m5!1s0x6d0d536abfe6c871:0xce54c3792d082fb0!8m2!3d-37.0828677!4d174.9180675!16s%2Fg%2F11sd_z_fdg?entry=ttu" target="_blank"><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> 14 Fjord Way Karaka Papakura 2113 New Zealand</a>
    <br>
    <br>
    <a class="w3-large" href="tel:+64211723397"><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> +64211723397</a>
      <br>
      <br>
      <a class="w3-large" href="mailto:info@eicconstruction.co.nz"><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> info@eicconstruction.co.nz</a>
    <br>
    <br>
    <form action="<?= base_url('email') ?>" method="post">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-border" type="email" placeholder="Email" required name="email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  </div>
</div>
<?= $this->endSection() ?>