<?php
	$align	= 'left';
	$ralign	= 'right';
  $name   = 'namee';
	if(session()->get('lang') == 'pr')
	{
		$align	= 'right';
		$ralign	= 'left';		
    $name   = 'namep';
	}
?>
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div class="w3-center"><br>
            <strong class="w3-col w3-text-red w3-large"><?=lang('app.del').': '.$record[0]->$name;?></strong>
        <form class="w3-container" action="<?=base_url('del/contacts/'.$record[0]->id)?>" method="post">
            <input type="hidden" name="post" value="post">
            <div class="w3-section">
                <button class="w3-<?=$align?> w3-margin-bottom w3-button w3-circle w3-blue w3-padding" type="submit" onclick="$('.w3-modal').hide();"><?=lang('app.yes')?></button>
                <button type="button" class="w3-<?=$ralign?> w3-margin-bottom w3-button w3-circle w3-red w3-padding" onclick="$('.w3-modal').hide();"><?=lang('app.no')?></button>
            </div>
        </form>
    </div>