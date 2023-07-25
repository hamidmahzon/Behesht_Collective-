<?php

    $lang   = session('lang');
    $color  = session()->get('color');
    $align  = 'right';
    $ralign = 'left';
    $dir    = 'rtl';

    if(!$lang)
    {
        $lang = 'fa';
    }

    $desc   = 'descp';
    $name   = 'namep';
    if($lang == 'en')
    {
        $ralign = 'right';
        $align  = 'left';
        $dir    = false;
        
        $desc   = 'desce';
        $name   = 'namee';
    }

    $bcolor = 'bg-white text-dark';
    $ncolor = 'bg-secondary text-white';
    
    if(!$color)
    {
        $color  = 'white';
    }
    if($color == 'black')
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
<div class="w3-container w3-margin-top">
	<?php if(auth('add'))
	{?>
		<button class="w3-button w3-xlarge w3-circle w3-blue" title="<?=lang('app.newPost')?>" onclick="$.get('<?=base_url('add/home')?>', function(data, status){$('#target').html(data).show();});"><i class="fa fa-plus"></i></button>
	<?php
	}?>
	
	<?php
	foreach($records as $r)
	{?>
    <?php if(file_exists('assets/img/home/'.$r->img))
    {?>
	<center>
		<img src="<?=base_url('assets/img/home/'.$r->img)?>" class="w3-image w3-margin-top" width="70%;">
	</center>
    <?php
    }?>
	
  <h1><?=$r->$name?></h1>

  <div class="w3-panel w3-sand w3-<?=$align?>bar">
    <p><i class="fa fa-quote-<?=$align?> w3-xxlarge w3-opacity"></i>
	<br>
    <i class="w3-serif w3-xlarge">
		<?=$r->$desc?>
	</i>
	</p>
  </div>
  	<?php if(auth('edit'))
	{?>
		<button type="button" class="w3-button w3-large w3-teal" onclick="$.get('<?=base_url('edit/home/'.$r->id)?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-edit"></i></button>
		<button type="button" class="w3-button w3-large w3-red" onclick="$.get('<?=base_url('del/home/'.$r->id)?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-trash"></i></button>
	<?php
	}
	}?>
</div>
<?= $this->endSection() ?>