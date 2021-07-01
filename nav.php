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
                    <a class="nav-link btn-default" href="#work" >work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-default" href="#about"  data-toggle="modal" data-target="#about" >about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-default" href="mailto:hello@tigela.co">contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="about" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                Body
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>