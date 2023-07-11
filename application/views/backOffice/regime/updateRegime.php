<?php

$this->load->view('templates/headerAdmin');
$this->load->view('templates/leftAdmin');

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card" style="margin: auto auto;">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modifier un regime</h4>
                        <p class="card-description"> Remplissez le formulaire </p>
                        <form class="forms-sample" method="post" action="<?php echo site_url('regime/update'); ?>">
                            <div class="form-group">
                                <input name="idregime" type="hidden" value="<?php echo($regime->idregime); ?>">
                                <label for="duree">description</label>
                                <input name="descriRegime" type="text" class="form-control" id="descriRegime" placeholder="descriRegime" value="<?php echo($regime->descriRegime); ?>" required>
                                <label for="duree">durée en jour</label>
                                <input name="duree" type="number" class="form-control" id="duree" placeholder="duree" value="<?php echo($regime->duree); ?>" required>
                                <div class="form-group">
                                    <label for="poids">Poids en kg</label>
                                    <input name="poids" type="number" class="form-control" id="poids" value="<?php echo($regime->poids); ?>" placeholder="votre poids"
                                        step="0.1" required>
                                </div>
                                <div class="form-group">
                                    <?php foreach ($objectifs as $objectif) { ?>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="idobjectif"
                                                id="optionsRadios1" value="<?php echo($objectif->idobjectif); ?>"> <?php echo($objectif->descriObjectif); ?> <i
                                                class="input-helper"></i></label>
                                    </div>
                                    <?php } ?>
                                </div>
                                <p>Liste des plats</p>
                                <div class="row" style="height: 200px;overflow-y: scroll;">
                                    <?php $plats = $this->PDFModel->getRegimePlat($regime->idregime);
                                    foreach($plats as $plat) { ?>
                                        <div class="row" style="display: flex; justify-content: space-around;">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check ">
                                                        <label class="form-check-label"> <?php echo($plat->descriPlat); ?> </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check ">
                                                        <label class="form-check-label"> <?php echo($plat->quantite." ".$plat->descriUnite); ?> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <p>Liste des activites sportives</p>
                                <div class="row" style="height: 200px;overflow-y: scroll;">
                                    <?php $activites = $this->PDFModel->getRegimeActivite($regime->idregime);
                                        foreach($activites as $activite) { ?>
                                        <div class="row" style="display: flex; justify-content: space-around;">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check ">
                                                        <label class="form-check-label"> <?php echo($activite->descriActivite); ?> </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check ">
                                                        <label class="form-check-label"> <?php echo($activite->quantite." fois"); ?> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>