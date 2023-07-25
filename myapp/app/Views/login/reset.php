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
<?= $this->section('content') ?>

    <div class="w3-display-middle w3-card-4 w3-white w3-col s11 m4 w3-mobile">
        <div class="w3-xlarge w3-center w3-grey"><?=lang('app.NPTitle')?></div>
        <form class="w3-form w3-container" action="newpassword" method="post" id="login">
            <?= csrf_field() ?>
            <div class="w3-section">
                <?php if(session()->get('fail'))
                {?>
                    <strong class="w3-text-red w3-<?=$align?>-align"><?=lang('app.passReq')?></strong>
                <?php
                }?>
                <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="<?=lang('app.NPassword')?>" name="password" required>
                <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="<?=lang('app.RPassword')?>" name="rpassword" required>
                <button type="submit" class="w3-<?=$align?> w3-button w3-quarter w3-blue w3-margin-bottom"><i class="fa fa-save"></i></button>
                <button class="w3-<?=$align?> w3-button w3-quarter w3-khaki w3-margin-bottom" type="reset"><i class="fa fa-undo"></i></button>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>