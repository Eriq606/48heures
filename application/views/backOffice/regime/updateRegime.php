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
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="duree">durée en jour</label>
                                <input type="number" class="form-control" id="duree" placeholder="duree" value="duree par defaut" required>
                                <div class="form-group">
                                    <label for="poids">Poids en kg</label>
                                    <input type="number" class="form-control" id="poids" value="poids par defaut" placeholder="votre poids"
                                        step="0.1" required>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios"
                                                id="optionsRadios1" value=""> Augmenter poids <i
                                                class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios"
                                                id="optionsRadios2" value="option2" checked=""> Diminuer poids <i
                                                class="input-helper"></i></label>
                                    </div>
                                </div>
                                <p>Liste des plats</p>
                                <div class="row" style="height: 200px;overflow-y: scroll;">
                                    <div class="row" style="display: flex; justify-content: space-around;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-check ">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"> plat 1 <i
                                                            class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="quantitePlat1"
                                                    placeholder="quantite de plat 1" step="0.1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display: flex; justify-content: space-around; ">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-check ">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"> plat 1 <i
                                                            class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="quantitePlat1"
                                                    placeholder="quantite de plat 1" step="0.1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display: flex; justify-content: space-around; ">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-check ">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"> plat 1 <i
                                                            class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="quantitePlat1"
                                                    placeholder="quantite de plat 1" step="0.1" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Liste des activites sportives</p>
                                <div class="row" style="height: 200px;overflow-y: scroll;">
                                    <div class="row" style="display: flex; justify-content: space-around;">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-check ">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"> sport 1 <i
                                                            class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="frequence sport 1"
                                                    placeholder="frequence sport 1" step="0.1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display: flex; justify-content: space-around; ">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-check ">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"> sport 1 <i
                                                            class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="frequence sport 1"
                                                    placeholder="frequence sport 1" step="0.1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display: flex; justify-content: space-around; ">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-check ">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"> sport 1 <i
                                                            class="input-helper"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="frequence sport 1"
                                                    placeholder="frequence sport 1" step="0.1" required>
                                            </div>
                                        </div>
                                    </div>
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