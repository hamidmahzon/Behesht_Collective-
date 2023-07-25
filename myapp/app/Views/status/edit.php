<?php
	$align	= '';
	$ralign	= 'right';
    $name = 'namee';
	if(session()->get('lang') == 'pr')
	{
		$align	= 'right';
		$ralign	= 'left';		
        $name = 'namep';
	}
?>

<div class="w3-modal-content w3-animate-opacity" style="top:-10%">
    <div class="w3-container">
    <form action="<?=base_url('edit/contacts/'.$record[0]->id)?>" method="post" class="w3-form w3-row-padding w3-margin-bottom" enctype="multipart/form-data">
      <div class="w3-center w3-yellow w3-xlarge w3-padding"> <?=lang('app.edit')?> <?=$record[0]->$name;?></div>
        <?= csrf_field() ?>
      <div class="w3-col w3-row-padding">
      <div class="w3-section w3-half w3-<?=$align?>">
        <input type="text" name="namep" id="namep" class="w3-input w3-border w3-right-align" placeholder="<?=lang('app.namep')?>" value="<?=$record[0]->namep?>" required>
      </div>
      <div class="w3-section w3-half w3-<?=$align?>">
        <input type="text" name="namee" id="namee" class="w3-input w3-border w3-left-align" placeholder="<?=lang('app.namee')?>" value="<?=$record[0]->namee?>" required>
      </div>      
      </div>

      <div class="w3-col w3-row-padding ">
      <div class="w3-section w3-third w3-<?=$align?>">
        <label class="w3-label"><?=lang('app.link')?></label>
        <input type="url" name="link" id="link" class="w3-input w3-border" value="<?=$record[0]->link?>">
      </div>

      <div class="w3-section w3-third w3-<?=$align?>">
      <label class="w3-label"><?=lang('app.titlep')?></label>
        <input type="text" name="titlep" id="titlep" class="w3-input w3-border" placeholder="<?=lang('app.title')?>" value="<?=$record[0]->titlep?>"  required>
      </div>

      <div class="w3-section w3-third w3-<?=$align?>">
      <label class="w3-label"><?=lang('app.titlee')?></label>
        <input type="text" name="titlee" id="titlee" class="w3-input w3-border" placeholder="<?=lang('app.titlee')?>" value="<?=$record[0]->titlee?>"  required>
      </div>
    </div>

    <div class="w3-section w3-col w3-<?=$align?>">
    <label class="w3-label"><?=lang('app.icon')?></label>	
    <br>
      <span>
        <label class="w3-label" for="ph<?=$record[0]->id?>"><i class="<?=$record[0]->icon?>	w3-xlarge"></i></label>
        <input type="radio" name="icon" id="ph<?=$record[0]->id?>" class="w3-radio" value="<?=$record[0]->icon?>" checked>

        <label class="w3-label" for="ph"><i class="fas fa-phone-square	w3-xlarge"></i></label>
        <input type="radio" name="icon" id="ph" class="w3-radio" value="fas fa-phone-square">

        <label class="w3-label" for="em"><i class="fas fa-envelope w3-xlarge w3-margin-<?=$align?>"></i></label>
        <input type="radio" name="icon" id="em" class="w3-radio" value="fas fa-envelope">

        <label class="w3-label" for="fb"><i class="fab fa-facebook-square	w3-xlarge w3-margin-<?=$align?>"></i></label>
        <input type="radio" name="icon" id="fb" class="w3-radio" value="fab fa-facebook-square">
        	
        <label class="w3-label" for="ins"><i class="fab fa-instagram w3-xlarge w3-margin-<?=$align?>"></i></label>
        <input type="radio" name="icon" id="ins" class="w3-radio" value="fab fa-instagram">

        <label class="w3-label" for="yt"><i class="fab fa-youtube w3-xlarge w3-margin-<?=$align?>"></i></label>
        <input type="radio" name="icon" id="yt" class="w3-radio" value="fab fa-youtube">

        <label class="w3-label" for="ld"><i class="fab fa-linkedin-in w3-xlarge w3-margin-<?=$align?>"></i></label>
        <input type="radio" name="icon" id="ld" class="w3-radio" value="fab fa-linkedin-in">

        <label class="w3-label" for="ln"><i class="fab fa-line w3-xlarge w3-margin-<?=$align?>"></i></label>
        <input type="radio" name="icon" id="ln" class="w3-radio" value="fab fa-line">

        <label class="w3-label" for="wa"><i class="fab fa-whatsapp-square w3-xlarge w3-margin-<?=$align?>"></i></label>
        <input type="radio" name="icon" id="wa" class="w3-radio" value="fab fa-whatsapp-square">

        <label class="w3-label" for="tt"><i class="fab fa-twitter-square w3-xlarge w3-margin-<?=$align?>"></i></label>
        <input type="radio" name="icon" id="tt" class="w3-radio" value="fab fa-twitter-square">

        <label class="w3-label" for="tg"><i class="fab fa-telegram w3-xlarge w3-margin-<?=$align?>"></i></label>
        <input type="radio" name="icon" id="tg" class="w3-radio" value="fab fa-telegram">

        <label class="w3-label" for="wc"><i class="fab fa-weixin w3-xlarge w3-margin-<?=$align?>"></i></label>
        <input type="radio" name="icon" id="wc" class="w3-radio" value="fab fa-weixin">
    </div>

  <div class="w3-col w3-row-padding">
      <div class="w3-section w3-half w3-<?=$align?>">
        <label class="w3-label"><?=lang('app.descp')?></label>
        <textarea class="w3-input w3-border" name="descp" rows="8" id="descp"><?=$record[0]->descp?></textarea>
      </div>
      <div class="w3-section w3-half w3-<?=$align?>">
        <label class="w3-label w3-left"><?=lang('app.desce')?></label>
        <textarea class="w3-input w3-border w3-left-align" name="desce" rows="8" id="desce"><?=$record[0]->desce?></textarea>
      </div>
  </div>
    <div class="w3-section w3-col m2 w3-<?=$align?>">
      <button type="submit" class="w3-button w3-col w3-blue w3-<?=$align?> w3-large w3-padding"><i class="fas fa-save"></i></button>
    </div>
    <div class="w3-section w3-col m2 w3-<?=$align?>">
      <button type="reset" class="w3-button w3-col w3-yellow w3-<?=$align?> w3-large w3-padding"><i class="fas fa-undo"></i></button>
    </div>
    <div class="w3-section w3-col m2 w3-<?=$align?>">
      <button type="button" class="w3-button w3-col w3-red w3-<?=$align?> w3-large w3-padding" onclick="$('.w3-modal').hide();"><i class="fas fa-times"></i></button>
    </div>
  </form>
</div>