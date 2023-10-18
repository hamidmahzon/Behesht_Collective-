<?php

    $bcolor = 'bg-white text-dark';
    $ncolor = 'bg-secondary text-white';
    
    if(@$color)
    {
        $color  = 'white';
    }
    if(@$color == 'black')
    {
        $bcolor = 'bg-dark text-white';
        $ncolor = 'bg-black text-white';
    }

?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome to EIC Construction</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="https://kit.fontawesome.com/00312a51b5.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    
<link rel="icon" href="<?=base_url('assets/img/logo.svg')?>" type="image/x-icon">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html 
{
    height: 100%;
    line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("<?=base_url('assets/img/home/home.jpg')?>");
  min-height: 100%;
}
    a{
        text-decoration: none;
    }

.w3-bar .w3-button {
  padding: 16px;
}

    #myNavbar{
        color: white;
    }
#myNavbar.scrolled 
{
    background-color: lightgray;
    color: black;
}
</style>
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-card" id="myNavbar">
    <?php if(sess()->get('login'))
    {?>
        <div class="w3-dropdown-hover <?=$ncolor?>">
        <button type="button" class="w3-bar-item w3-button w3-xlarge fa fa-user w3-circle"></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <b class="w3-bar-item w3-button"><?=lang('app.hi')?><br> <?=session('name')?></b>
                <a href="#" onclick="load(); $.get('<?=base_url('reset')?>', function(data, status){$('#target').html(data).show();});" class="w3-bar-item w3-button"><?=lang('app.CPassword')?></a>
                <a href="https://x13.x10hosting.com/roundcube" target="_blank" class="w3-bar-item w3-button">Email</a>
                <a href="https://sso.godaddy.com/" target="_blank" class="w3-bar-item w3-button">Domain Cpanel</a>
                <a href="https://x13.x10hosting.com:2222/evo/" target="_blank" class="w3-bar-item w3-button">Host Cpanel</a>
                <a href="https://x13.x10hosting.com/phpMyAdmin/index.php" target="_blank" class="w3-bar-item w3-button">Database Cpanel</a>
                <a href="logout" class="w3-bar-item w3-button"><?=lang('app.logout')?></a>
            </div>
        </div>
    <?php
    }
    else
    {?>
        <b onclick="load(); $.get('<?=base_url('login')?>', function(data, status){$('#target').html(data).show();});" class="w3-bar-item w3-button w3-wide"><img src="<?=base_url('assets/img/logo')?>" class="w3-image" width="50px;" /></b>
    <?php
    }
    ?>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small" id="navbar">
        <b>
        <a href="#home" class="w3-bar-item w3-button"><i class="fas fa-home"></i> HOME</a>
        <a href="#about" class="w3-bar-item w3-button"><i class="fas fa-info-circle"></i> ABOUT</a>
        <a href="#services" class="w3-bar-item w3-button"><i class="far fa-sun"></i> SERVICES</a>
        <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
        <a href="tel:+64211723397" class="w3-bar-item w3-button"><i class="fas fa-phone-alt"></i> CALL NOW</a>
            </b>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-red w3-large w3-padding-16">Close ×</a>
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-home"></i> HOME</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-info-circle"></i> ABOUT</a>
  <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button"><i class="far fa-sun"></i> SERVICES</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
  <a href="tel:+64211723397" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-phone-alt"></i> CALL NOW</a>
</nav>


    <?= $this->renderSection('content') ?>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fab fa-facebook w3-hover-opacity"></i>
    <i class="fab fa-instagram w3-hover-opacity"></i>
    <i class="fab fa-snapchat w3-hover-opacity"></i>
    <i class="fab fa-pinterest-p w3-hover-opacity"></i>
    <i class="fab fa-twitter w3-hover-opacity"></i>
    <i class="fab fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Developer by EIC Construction</p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() 
    {
    mySidebar.style.display = "none";
}
</script>
	    <div id="target" class="w3-modal"></div>
	    <div id="loadding" class="w3-modal"></div>
    <?php if(session()->has('flash'))
    {?>    
        <div class="w3-modal flash_target" style="display:block">
        <div class="w3-modal-content">
        <div class="w3-container w3-large">
            <button type="button" class="w3-display-topright w3-padding-small w3-text-red w3-button" onclick="$('.w3-modal').remove();"><i class="fa fa-times"></i></button>
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
            $('#target').html("<img src='<?=base_url('assets/img/load.gif')?>' class='w3-circle w3-display-topmiddle w3-image w3-margin-top'>").show();
        }        
        
        function loadding()
        {
            $('#loadding').html("<img src='<?=base_url('assets/img/load.gif')?>' class='w3-circle w3-display-topmiddle w3-image w3-margin-top'>").show();
        }
        
        window.addEventListener('scroll', function() 
        {
            var navbar = document.getElementById('myNavbar');
  
        if (window.scrollY > 0) 
        {
            navbar.classList.add('scrolled');
        } 
        else 
        {
            navbar.classList.remove('scrolled');
        }
});
    </script>
</body>
</html>