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

    if($lang == 'en')
    {
        $ralign = 'right';
        $align  = 'left';
        $dir    = 'ltr';
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
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="Human rights, Afghan LGBT community, Non-profit organization, Marginalized communities, Activism, Social justice, Equality, Advocacy, Empowerment, Diversity and inclusion, LGBTQ+ rights, Community support, Humanitarian aid, Grassroots organization, Civil society, حقوق بشر، جامعه دگرباشان جنسی افغان، سازمان غیر انتفاعی، جوامع به حاشیه رانده شده، کنشگری، عدالت اجتماعی، برابری، حمایت، توانمندسازی، تنوع و شمول، حقوق LGBTQ+، حمایت جامعه، کمک های بشردوستانه، سازمان های مردمی، جامعه مدنی،">
        <meta name="Description" content="<?=lang('app.meta_description')?>">
		
        <title><?= $this->renderSection('title') ?></title>
        <link rel="icon" href="<?=base_url('assets/img/wlogo.png')?>" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/w3.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/bootstrap.min.css')?>">
        <script src="<?=base_url('./assets/js/bootstrap.bundle.min.js')?>"></script>
    
        
       
        <script src="<?=base_url('./assets/js/jquery-3.6.0.min.js')?>"></script>
		<script src="<?=base_url('./assets/js/all.min.js')?>"></script>
        
        <style>
            a{
                color: inherit;
                text-decoration: none;    
            }
            
            a:hover{
                color: inherit;
            }
            
            h2:hover
            {
                text-decoration: underline;    
            }
            
            @font-face 
            {
                src: url('<?=base_url('/assets/font/BBCN.ttf')?>'); 
            }
        </style>


    </head>
<body dir="<?=$dir?>" style="font-family: BBCNassim; -webkit-user-select: none!important;" class="<?=$bcolor?>">
    <nav class="w3-b-topar <?=$ncolor?> w3-hide-small">
        <?php if(session()->get('login'))
        {?>
            <div class="w3-dropdown-hover <?=$ncolor?>">
            <button type="button" class="w3-bar-item w3-button w3-xlarge w3-hide-small w3-grey fa fa-user w3-circle"></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <b class="w3-bar-item w3-button w3-<?=$align?>-align"><?=lang('app.hi')?><br> <?=session('name')?></b>
                    <a href="reset" class="w3-bar-item w3-button w3-<?=$align?>-align"><?=lang('app.CPassword')?></a>
                    <a href="logout" class="w3-bar-item w3-button w3-<?=$align?>-align"><?=lang('app.logout')?></a>
                </div>
            </div>
        <?php
        }
        else
        {?>
            <img src="<?=base_url('assets/img/wlogo.png')?>" class="w3-hide-small w3-image w3-circle w3-border" style="width:3%; margin-<?=$align?>:8px; pointer-events: none" />
        <?php
        }
        ?>
        <a href="<?=base_url()?>" class="w3-bar-item w3-button w3-xlarge w3-hide-small "><b class="fa fa-home w3-large"></b> <?=lang('app.home')?></a>
        <a href="<?=base_url('nevents')?>" class="w3-bar-item w3-button w3-xlarge w3-hide-small "><b class="fas fa-newspaper w3-large"></b> <?=lang('app.news_events')?></a>
        <a href="<?=base_url('status')?>" class="w3-bar-item w3-button w3-xlarge w3-hide-small "><b class="fas fa-chart-bar w3-large"></b> <?=lang('app.status')?></a>
        <a href="<?=base_url('contacts')?>" class="w3-bar-item w3-button w3-xlarge w3-hide-small "><b class="fas fa-newspaper w3-large"></b> <?=lang('app.contact')?></a>

        <a href="<?=base_url()?>/lang/<?=$lang;?>" class="w3-hide-small w3-bar-item w3-margin-top w3-margin-<?=$ralign?> w3-text-light-grey w3-large w3-<?=$ralign?>" title="<?=lang('app.lang')?>"><b class="fa fa-language"></b></a>
        <a href="<?=base_url()?>/color/<?=$color?>" class="w3-hide-small w3-bar-item w3-margin-top w3-margin-<?=$ralign?> w3-text-light-grey w3-large w3-<?=$ralign?>" title="<?=lang('app.'.$color)?>"><b class="fa fa-adjust"></b></a>
    </nav>
    
    <div class="container" style="min-height:800px;">

    <?= $this->renderSection('content') ?>


    </div>

    <footer class="w3-footer w3-container w3-margin-top w3-large w3-center w3-padding w3-text-black" style="background: linear-gradient(grey 0%, white 100%)">
        <b class="w3-xxlarge"></b> <?=lang('app.solo')?> <b class="w3-xxlarge"></b>
        <br>
        <a href="https://twitter.com/RoshaniyaLGBT" target="_blank" class="w3-hover-text-teal"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/roshaniyalgbt/?igshid=YmMyMTA2M2Y=" target="_blank" class="w3-hover-text-red"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/RoshaniyaLGBT" target="_blank" class="w3-hover-text-blue"><i class="fab fa-facebook"></i></a>
        <b class="fa fa-envelope"></b>
        <br>
        <span class="w3-small"> <?=lang('app.allRight')?> </span><b class="fa fa-copyright w3-small"></b>
    </footer>
    
	    <div id="target" class="w3-modal"></div>
	    <div id="loadding" class="w3-modal"></div>
    <?php if(session()->has('flash'))
    {?>    
        <div class="w3-modal flash_target" style="display:block">
        <div class="w3-modal-content">
        <div class="w3-container w3-large">
            <button type="button" class="w3-display-top<?=$ralign?> w3-padding-small w3-text-red w3-button" onclick="$('.w3-modal').remove();"><i class="fa fa-times"></i></button>
            <?=session()->get('flash')?>
        </div>
        </div>
        </div>

	<script>
	setTimeout(myFunction, 4000);
	function myFunction() 
	{
		$('.w3-modal').hide();
	}
	</script>
    <?php 
    }?>
    
    <script>
        function load()
        {
            $('#loadding').html("<img src='<?=base_url('assets/img/load.gif')?>' class='w3-circle w3-display-topmiddle w3-image w3-margin-top'>").show();;
        }
    
    </script>
</body>
</html>