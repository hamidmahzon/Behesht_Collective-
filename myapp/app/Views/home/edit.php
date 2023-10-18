    <form class="w3-form w3-modal-content w3-animate-opacity w3-light-grey" action="<?=base_url('edit/home/'.$record[0]->id)?>" enctype="multipart/form-data" method="post">
        <?= csrf_field() ?>
        <div class="w3-panel w3-xlarge w3-center w3-black"><?=lang('app.editPost')?></div>
    <div class="w3-container w3-row-padding">
        <div class="w3-half w3-section">
            <label class="w3-label w3-large" for="name">Name</label>
            <input type="text" name="name" id="name" required class="w3-input w3-border" value="<?=$record[0]->name?>" placeholder="<?=lang('app.name')?>" autofocus />
        </div>
        <div class="w3-half w3-section">
            <label class="w3-label w3-large" for="img"><?=lang('app.img')?></label>
            <input type="file" name="img" id="img" class="w3-input w3-border w3-white">
        </div>
        <div class="w3-col w3-section">
            <label class="w3-label w3-large" for="desc">Description</label>
            <textarea class="w3-input" name="desc" id="desc" rows="8" required><?=$record[0]->desc?></textarea>
        </div>
        <div class="w3-continer" id="target">
            <input type="hidden" value="<?=$record[0]->img?>" name="oimg" id="oimg">
            <button type="submit" class="w3-margin-bottom w3-button w3-blue w3-col l2 m3 s12 w3-large" title="<?=lang('app.save')?>" onclick="loadding();"><i class="fa fa-save"></i></button>
            <button type="reset" class="w3-margin-bottom w3-button w3-yellow w3-col l2 m3 s12 w3-large" title="<?=lang('app.reset')?>"><i class="fa fa-undo"></i></button>
            <button type="button" class="cbtn1 w3-margin-bottom w3-button w3-red w3-col l2 m3 s12 w3-large" title="<?=lang('app.cencel')?>" onclick="$('.w3-modal').hide();"><i class="fa fa-times"></i></button>
        </div>
    </div>
    </form>