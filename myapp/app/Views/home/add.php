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
    $rname  = 'namee';
    if($lang == 'en')
    {
        $ralign = 'right';
        $align  = 'left';
        $dir    = false;
        
        $desc   = 'desce';
        $name   = 'namee';
        $rname  = 'namep';
    }

    $bcolor = 'bg-white text-dark';
    $ncolor = 'bg-secondary text-white';
    $gcolor = 'white 0%, grey 100%';
    
    if(!$color)
    {
        $color  = 'white';
        $gcolor = 'white 0%, grey 100%';
    }
    if($color == 'black')
    {
        $bcolor = 'bg-dark text-white';
        $ncolor = 'bg-black text-white';
        $gcolor = 'black 0%, white 100%';
    }

?>

    <form class="w3-form w3-modal-content w3-animate-opacity" action="<?=base_url('add/home')?>" enctype="multipart/form-data" method="post" style="background: linear-gradient(<?=$gcolor?>)">
        <?= csrf_field() ?>

        <div class="w3-panel w3-xlarge w3-center <?=$ncolor?>"><?=lang('app.newPost')?></div>
    <div class="w3-container w3-row-padding">
        <div class="w3-third w3-section w3-<?=$align?>">
            <label class="w3-label w3-large" for="namep"><?=lang('app.namep')?></label>
            <input type="text" name="namep" id="namep" required class="w3-input w3-border" value="" placeholder="<?=lang('app.namep')?>" autofocus />
        </div>
        <div class="w3-third w3-section w3-<?=$align?>">
            <label class="w3-label w3-large" for="namee"><?=lang('app.namee')?></label>
            <input type="text" name="namee" id="namee" required class="w3-input  w3-border" value="" placeholder="<?=lang('app.namee')?>" />
        </div>
        <div class="w3-third w3-section w3-border w3-<?=$align?>">
            <label class="w3-label w3-large" for="img"><?=lang('app.img')?></label>
            <input type="file" name="img" id="img" class="w3-input">
        </div>
        <div class="w3-half w3-section w3-<?=$align?>">
            <label class="w3-label w3-large" for="descp"><?=lang('app.descp')?></label>
            <textarea class="w3-input" name="descp" id="contentp" rows="8" required></textarea>
        </div>
        <div class="w3-half w3-section w3-<?=$align?>">
            <label class="w3-label w3-large" for="desce"><?=lang('app.desce')?></label>
            <textarea class="w3-input" name="desce" id="contente" rows="8" required></textarea>
        </div>
        <div class="w3-continer" id="target">
            <button type="submit" class="w3-margin-bottom w3-<?=$align?> w3-button w3-margin-<?=$ralign?> w3-blue w3-col l2 m3 s12 w3-large" title="<?=lang('app.save')?>" onclick="load();"><i class="fa fa-save"></i></button>
            <button type="reset" class="w3-margin-bottom w3-<?=$align?> w3-button w3-margin-<?=$ralign?> w3-yellow w3-col l2 m3 s12 w3-large" title="<?=lang('app.reset')?>"><i class="fa fa-undo"></i></button>
            <button type="button" class="cbtn1 w3-margin-bottom w3-<?=$align?> w3-button w3-margin-<?=$ralign?> w3-red w3-col l2 m3 s12 w3-large" title="<?=lang('app.cencel')?>" onclick="$('.w3-modal').hide();"><i class="fa fa-times"></i></button>
        </div>
    </div>
    </form>