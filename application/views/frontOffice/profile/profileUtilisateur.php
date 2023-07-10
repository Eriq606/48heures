<?php

$this->load->view('templates/header');
$this->load->view('templates/left');

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card" style="margin: auto auto;">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Profile utilisateur</h4>
                <p class="card-description"> Remplissez le formulaire pour mettre à jour votre profile </p>
                <form class="forms-sample">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <select name="idGenre" id="">
                            <option value="1">Homme</option>
                            <option value="0">Femme</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="taille">Taille en cm</label>
                    <input type="number" class="form-control" id="taille" placeholder="votre taille" step="0.1" required>
                    </div>
                    <div class="form-group">
                    <label for="poids">Poids en kg</label>
                    <input type="number" class="form-control" id="poids" placeholder="votre poids" step="0.1" required>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Mettre à jour</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>