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
                        <h4 class="card-title">Modifier un plat</h4>
                        <p class="card-description"> Remplissez le formulaire </p>
                        <form class="forms-sample" method="post" action="<?php echo site_url('plat/update'); ?>">
                            <div class="form-group">
                                <div class="form-group">
                                    <input name="idplat" type="hidden" value="<?php echo($plat->idplat); ?>">
                                    <label for="description">description</label>
                                    <input name="descriPLat" type="text" class="form-control" id="description" placeholder="description du plat"
                                    value="<?php echo($plat->descriPlat); ?>"  required>
                                </div>
                                <div class="form-group">
                                    <label for="prixUnitaire">Prix unitaire</label>
                                    <input name="pu" type="number" class="form-control" id="prixUnitaire" placeholder="prix unitaire du plat"
                                    value="<?php echo($plat->pu); ?>" step="0.1"  required>
                                </div>
                                <div class="form-group">
                                    <label for="unite" style="margin-right:15px;">Unite</label>
                                    <select name="idunite" id="unite" >
                                        <option value="<?php echo($plat->idunite); ?>"><?php echo($plat->descriUnite); ?></option>
                                        <?php foreach ($unites as $unite) { ?>
                                            <option value="<?php echo($unite->idunite); ?>"><?php echo($unite->descriUnite); ?></option>
                                        <?php } ?>
                                    </select>
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