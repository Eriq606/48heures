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
                <form class="forms-sample" action="<?php echo site_url("/profile/modifierProfile"); ?>" method="post">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <select name="idgenre" id="">
                            <?php foreach($genre as $g){ ?>
                              <option value="<?php echo $g->idgenre; ?>"><?php echo $g->descriGenre; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="taille">Taille en cm</label>
                    <input type="number" class="form-control" id="taille" placeholder="votre taille" step="0.1" required name="taille">
                    </div>
                    <div class="form-group">
                    <label for="poids">Poids en kg</label>
                    <input type="number" class="form-control" id="poids" placeholder="votre poids" step="0.1" required name="poids">
                    </div>
                    <input type="hidden" name="iduser" value="<?php echo $user->iduser; ?>">
                    <button type="submit" class="btn btn-gradient-primary me-2">Mettre à jour</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>