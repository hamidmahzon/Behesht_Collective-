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
<div class="w3-row-padding w3-margin-top">
	<?php if(auth('add'))
	{?>
		<button class="w3-button w3-xlarge w3-circle w3-blue" title="<?=lang('app.newPost')?>" onclick="$.get('<?=base_url('add/nevents')?>', function(data, status){$('#target').html(data).show();});"><i class="fa fa-plus"></i></button>
	<?php
	}?>
	<br>
	<?php
	foreach($records as $r)
	{?>
    <div class="w3-col l4 m6 s12">
    <?php if(file_exists('assets/img/nevents/'.$r->img))
    {?>
		<img src="<?=base_url('assets/img/nevents/'.$r->img)?>" class="w3-image w3-margin-top w3-image">
    <?php
    }?>
	<div class="w3-card w3-padding w3-hover-teal">
        <a  href="<?=base_url('inevents/'.$r->id)?>">
            <h3><?=$r->$name?></h3>
        </a>
  	<?php if(auth('edit'))
	{?>
		<button type="button" class="w3-button w3-large w3-teal" onclick="$.get('<?=base_url('edit/nevents/'.$r->id)?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-edit"></i></button>
		<button type="button" class="w3-button w3-large w3-red" onclick="$.get('<?=base_url('del/nevents/'.$r->id)?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-trash"></i></button>
	<?php
	}?>
    </div>
    </div>
    <?php
	}?>
</div>
<?= $this->endSection() ?>