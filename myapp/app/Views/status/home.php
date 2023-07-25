<?php
	$align	= 'left';
	$ralign	= 'right';
  $name   = 'namee';
  $desc   = 'desce';
  $title  = 'titlee';
	if(session()->get('lang') == 'pr')
	{
		$align	= 'right';
		$ralign	= 'left';		
    $name   = 'namep';
    $desc   = 'descp';
    $title  = 'titlep';
	}
?>
<?= $this->extend('default') ?>
<?= $this->section('title') ?>
<?=lang('app.contacts_title')?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Product grid -->
<?php 
if(session()->get('role') == 1 OR session()->get('role') ==3)
{?>
  <button class="w3-button w3-circle w3-blue w3-<?=$align?> w3-margin" onclick="$.get('<?=base_url('add/contacts')?>', '#target', function(data, status){$('#target').html(data).show();});"><i id="apbtn" class="fas fa-plus"></i></button>
<?php
}?>
<div class="w3-row-padding">
<br>
  <?php
  if($records)
  {
    foreach($records as $r)
   {?>
    <div class="w3-quarter w3-margin-top" title="<?=$r->$desc?>">
    <?php if($r->link)
    {?>
    <a href="<?=$r->link?>" target="_blank">
      <div class="w3-container w3-card w3-center w3-circle w3-teal">
        <div class="w3-margin">
          <div class="<?=$r->icon?> w3-jumbo"></div>
          <h4><?=$r->$name?></h4>
          <h4><?=$r->$title?></h4>
        </div>
      </div>
    </a>
    <?php 
    }
    else
    {?>
      <div class="w3-container w3-card w3-center w3-circle w3-teal">
        <div class="w3-margin">
          <div class="<?=$r->icon?> w3-jumbo"></div>
          <h4><?=$r->$name?></h4>
          <h4><?=$r->$title?></h4>
        </div>
      </div>
      <?php
    }
    if(session()->get('role') == 1 OR session()->get('role') ==2)
    {?>
      <div class="w3-margin w3-center">
        <button class="w3-button w3-blue" onclick="$.get('<?=base_url('edit/contacts/'.$r->id)?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-edit"></i></button>
        <button class="w3-button w3-red" onclick="$.get('<?=base_url('del/contacts/'.$r->id)?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-trash-alt"></i></button>
      </div>
      <?php
      }?>
    </div>
    <?php
    }
  }
  else
  {?>
  <div class="w3-continer w3-center">
    <strong class="w3-red w3-padding"><?=lang('app.nrecord')?></strong>
  </div>
  <?php
  }?>
</div>
<?= $this->endSection() ?>