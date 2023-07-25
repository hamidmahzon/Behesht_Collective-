<div class="w3-modal-content w3-card-4 w3-animate-opacity w3-light-grey" style="max-width:600px">
    <div class="w3-panel w3-yellow w3-center">
  <b class="w3-large"><?=lang('app.sure')?></b>
</div>
    <form class="w3-container" action="<?=base_url('del/nevents/'.$id)?>" method="post" id="frm">
        <?= csrf_field() ?>
        <input type="hidden" value="deleting" name="deleting">
        <div class="w3-section">
            <div class="w3-panel">
                <button type="button" class="w3-right w3-button w3-circle w3-col m2 l2 s3 w3-blue w3-padding" onclick="$('#frm').submit(); load();"><i class="fa fa-check"></i> <?=lang('app.yes')?></button>
                <button type="button" class="w3-left w3-button w3-col m2 l2 s3 w3-circle w3-red w3-padding" onclick="$('.w3-modal').hide();"> <i class="fa fa-times"></i> <?=lang('app.no')?></button>
            </div>
        </div>
    </form>
</div>
