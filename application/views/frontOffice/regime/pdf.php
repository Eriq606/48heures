<?php

$this->load->view('templates/header');
$this->load->view('templates/left');

?>
<div class="main-panel" style="width:100vw;">
    <div class="content-wrapper" style="margin: 0 auto" >
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin" style="height:20vh; margin: 20 auto;">
                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo site_url('regime/voirPdf/'.$idregime); ?>" target="_blank">
                        <button type="button" class="btn btn-outline-danger btn-icon-text">
                            <i class="mdi mdi-upload btn-icon-prepend"></i> Voir PDF </button>
                        </a>
                        <a href="<?php echo site_url('regime/telechargerPdf/'.$idregime); ?>">
                        <button type="button" class="btn btn-outline-info btn-icon-text"> Telecharger au format PDF <i class="mdi mdi-printer btn-icon-append"></i>
                          </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>