<?php
  ob_start();
?>

<!-- PAGE NAME START -->
<section class="page-name parallax" data-paroller-factor="0.1" data-paroller-type="background" data-paroller-direction="vertical">
    <div class="container">
        <div class="row">
            <h1 class="page-title">
                Contact
            </h1>
            <div class="breadcrumbs">
                <a href="index.php">Indiega</a> /
                <span class="color-1">Contact</span>
            </div>
        </div>
    </div>
</section>
<!-- PAGE NAME END -->
<!-- SECTION START -->
<section class="contact-page ptb150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h3 class="">
                    Contact information
                </h3>
                <div class="fsize-18 lheight-30 mt40">
                    Pastrami tail landjaeger porchetta short ribs ham hock, bresaola kevin leberkas. Tenderloin ground round rump swine hamburger. Cupim jerky beef ribs tongue t-bone. 
                </div>
                <div class="mt60">
                    <div class="contact-item table">
                        <div class="table-row">
                            <div class="icon-bl table-cell valign-top">
                                <i class="fa fa-phone fsize-28 fweight-400 color-1" aria-hidden="true"></i>
                            </div>
                            <div class="table-cell valign-top">
                                <div>
                                    Phone Nomber
                                </div>
                                <div class="fsize-20 fweight-700 font-agency uppercase color-white">
                                    0-800-123-4567 (operator)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-item table">
                        <div class="table-row">
                            <div class="icon-bl table-cell valign-top">
                                <i class="fa fa-map-marker fsize-28 fweight-400 color-5" aria-hidden="true"></i>
                            </div>
                            <div class="table-cell valign-top">
                                <div>
                                    Location Address
                                </div>
                                <div class="fsize-20 fweight-700 font-agency uppercase color-white">
                                    698 Katrine Crossroad Apt. 325, Miami, USA
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-item table">
                        <div class="table-row">
                            <div class="icon-bl table-cell valign-top">
                                <i class="fa fa-envelope fsize-28 fweight-400 color-6" aria-hidden="true"></i>
                            </div>
                            <div class="table-cell valign-top">
                                <div>
                                    E-mail Address
                                </div>
                                <div class="fsize-20 fweight-700 font-agency uppercase color-white">
                                    gamesplay@example.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-content gradient mt60">
                    <div class="social-list">
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="social-list">
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="social-list">
                        <a href="#">
                            <i class="fa fa-skype" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="social-list">
                        <a href="#">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="social-list">
                        <a href="#">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <form action="#" class="contact-us-form mt100">
                    <div class="row">
                        <div class="input-wrap col-md-6 col-sm-6">
                            <input type="text" class="general_input italic" placeholder="Full name">
                        </div>
                        <div class="input-wrap col-md-6 col-sm-6">
                            <input type="email" class="general_input italic" placeholder="Email address">
                        </div>
                        <div class="input-wrap col-md-6 col-sm-6">
                            <input type="email" class="general_input italic" placeholder="Phone Number">
                        </div>
                        <div class="input-wrap col-md-6 col-sm-6">
                            <input type="email" class="general_input italic" placeholder="Subject">
                        </div>
                        <div class="input-wrap col-md-12">
                            <textarea class="general_input italic" placeholder="Your Message..."></textarea>
                        </div>
                    </div>
                    <input type="submit" class="btn gradient mt30 color-white color-white plr50 ptb19" value="Send message">
                </form>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt100">
                <div class="map">
                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKrUZD1KTjV7VxOZAuC-J7ojz2JqerYZQ"></script>
                    <div id="map" class="height-600"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION END -->

<?php
  $yield = ob_get_clean();

  $title = "Lorem ipsum contacts";
  $description = "Ma super description de la page Contacts";
  $active = "contacts";

  require("./layout.php");
?>