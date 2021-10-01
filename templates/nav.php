<?php 
$home = get_template_directory_uri(); 
?>


<nav class="navbar fixed-top">
    <div class="container-fluid effect-menu">
        <a class="navbar-brand" id="navbrand" href="<?php echo home_url(''); ?>">
           <img src="<?php echo $home ?>/assets/img/logo.gif">
        </a>
        <button id="btn-nav" type="button">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
        </button>
        <div id="navtigela">
            <ul class="navbar-nav ml-auto py-3 px-4 px-lg-0 py-lg-3">
                <li class="nav-item active">
                    <a class="nav-link btn-default" href="<?php echo site_url('/portfolio'); ?>" >work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-default" href="<?php echo site_url('/saibamais'); ?>"  data-toggle="modal" data-target="#about" >about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-default" href="mailto:hello@tigela.co">contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
