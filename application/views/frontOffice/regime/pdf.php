<?php

$this->load->view('templates/header');
$this->load->view('templates/left');

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin" style="height:20vh">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?php echo site_url('assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute"
                        alt="circle-image">
                        <a href="<?php echo site_url('regime/voirPdf/'.$idregime); ?>" target="_blank">
                            <button type="button" class="btn btn-outline-success btn-icon-text">Voir en pdf</button>
                        </a>
                        <a href="<?php echo site_url('regime/telechargerPdf/'.$idregime); ?>">
                            <button type="button" class="btn btn-outline-success btn-icon-text">Telecharger le pdf</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>