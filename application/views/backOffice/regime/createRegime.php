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
                        <h4 class="card-title">Creer un regime</h4>
                        <p class="card-description"> Remplissez le formulaire </p>
                        <form class="forms-sample" action="<?php echo site_url('regime/toCreate'); ?>" method="post">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="poids">Nom du regime</label>
                                    <input type="text" class="form-control" id="poids" placeholder="descriRegime"
                                        required name="descriRegime">
                                </div>
                                <label for="duree">durée en jour</label>
                                <input type="number" class="form-control" id="duree" placeholder="duree" required name="duree">
                                <div class="form-group">
                                    <label for="poids">Poids en kg</label>
                                    <input type="number" class="form-control" id="poids" placeholder="votre poids"
                                        step="0.1" required name="poids">
                                </div>
                                <div class="form-group">
                                <?php foreach($objectifs as $o){ ?>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios"
                                                id="optionsRadios1" value="<?php echo $o->idobjectif; ?>"><?php echo $o->descriObjectif; ?><i
                                                class="input-helper"></i></label>
                                    </div>
                                <?php } ?>
                                </div>
                                <p>Liste des plats</p>
                                <div class="row" style="height: 200px;overflow-y: scroll;">
                                    <?php for($i=0; $i<count($plats); $i++){ ?>
                                    <div class="row" style="display: flex; justify-content: space-around;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-check ">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="plat[]" value="<?php echo $plats[$i]->idplat; ?>"><?php echo $plats[$i]->descriPlat; ?><i
                                                            class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="quantitePlat1"
                                                    placeholder="quantite" step="0.1" required name="quantite<?php echo $plats[$i]->idplat; ?>" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <p>Liste des activites sportives</p>
                                <div class="row" style="height: 200px;overflow-y: scroll;">
                                <?php for($i=0; $i<count($activites); $i++){ ?>
                                    <div class="row" style="display: flex; justify-content: space-around;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-check ">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="activite[]" value="<?php echo $activites[$i]->idactivite; ?>"><?php echo $activites[$i]->descriActivite; ?><i
                                                            class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="frequence sport 1"
                                                    placeholder="frequence" step="0.1" required name="frequence<?php echo $activites[$i]->idactivite; ?>" value="0">
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Creer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>