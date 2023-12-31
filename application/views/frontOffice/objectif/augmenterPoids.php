<?php

$this->load->view('templates/header');
$this->load->view('templates/left');

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">mon profile</h4>
                <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4">
                    <ul>
                        <li>
                            <span class="legend-dots" style="background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))"></span><?php echo $genre->descriGenre; ?></li>
                        <li>
                                <span class="legend-dots" style="background:linear-gradient(to right, rgba(6, 185, 157, 1), rgba(132, 217, 210, 1))"></span>Taille : <?php echo $profile->taille; ?> cm
                            </li>
                            <li>
                                <span class="legend-dots" style="background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))"></span>Poids : <?php echo $profile->poids; ?> kg
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Je veux gagner</h4>
                <form class="forms-sample" action="<?php echo site_url("objectif/modifierObjectif"); ?>" method="post">
                    <div class="form-group">
                    <input type="number" class="form-control" id="poidsGagne" name="poids" placeholder="poids en kg" step="0.1" required>
                    </div>
                    <input type="hidden" name="idobjectif" value="2">
                    <input type="hidden" name="idprofile" value="<?php echo $profile->idprofile; ?>">
                    <button type="submit" class="btn btn-gradient-primary me-2">Confirmer</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>