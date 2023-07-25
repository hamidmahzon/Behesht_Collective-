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
<div class="w3-row-padding">
	<br>
	<?php
    $z=1;
	foreach($records as $r)
	{
        if($z ==1)
        {?>
        <div class="w3-card w3-margin-top">
        <?php if(file_exists('assets/img/nevents/'.$r->img))
        {?>
        <div class="w3-center">
		  <img src="<?=base_url('assets/img/nevents/'.$r->img)?>" class="w3-image w3-margin-top w3-image w3-center">
        </div>
        <?php
        }?>
	   <div class="w3-padding">
            <h3><?=$r->$name?></h3>
           <i class="w3-black w3-padding-small"><?=cdate($r->date)?></i>
           <p class="w3-large"><?=$r->$desc?></p>
        </div>
        </div>
    <?php
	   }
        else
        {?>
        <a class="w3-col l4 m6 s12" href="<?=base_url('inevents/'.$r->id)?>">
        <?php if(file_exists('assets/img/nevents/'.$r->img))
        {?>
		  <img src="<?=base_url('assets/img/nevents/'.$r->img)?>" class="w3-image w3-margin-top w3-image">
        <?php
        }?>
	   <div class="w3-card w3-padding w3-hover-teal">
        <h3><?=$r->$name?></h3>
        </div>
        </a>
    <?php
        }
    $z++;
    }
    ?>
</div>
<?= $this->endSection() ?>