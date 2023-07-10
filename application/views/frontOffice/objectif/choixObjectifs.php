<?php

$this->load->view('templates/header');
$this->load->view('templates/left');

?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="page-header">
               <h3 class="page-title"> Choix de votre objectif </h3>
            </div>
        <div class="row" style="display:flex; justify-content:space-evenly">
          <div class="col-md-4 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
              <a href="<?php echo site_url('objectif/augmenterPoids'); ?>" style="text-decoration:none; color:white;">
              <div class="card-body" style="text-align:center;">
                <h2 class="mb-5">Augmenter mon poids</h2>
              </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
            <a href="<?php echo site_url('objectif/diminuerPoids'); ?>" style="text-decoration:none; color:white;">
              <div class="card-body" style="text-align:center;">
                <h2 class="mb-5">Diminuer mon poids</h2>
              </div>
            </a>
            </div>
          </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>