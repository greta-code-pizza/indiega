<?php
ob_start();
?>

<!-- SECTION START -->
<section class="table page-404">
  <div class="table-row">
      <div class="table-cell valign-middle text-center">
          <div>
              <img src="./assets/images/404/404-img.png" alt="">
          </div>
          <div class="title-error mt30">
              SORRY, PAGE NOT FOUND!
          </div>
      </div>
  </div>
  <div class="footer-line table-row">
      <div class="footer-404 table-cell valign-middle">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      © Copyright 2018 
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                      All Rights Reserved
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- SECTION END --> 

<?php
  $yield = ob_get_clean();

  $title = "Lorem ipsum 404";
  $description = "Ma super description de la page 404";
  $active = "404";

  require("./layout.php");
?>