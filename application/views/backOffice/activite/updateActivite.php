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
                        <h4 class="card-title">Creer une activité</h4>
                        <p class="card-description"> Remplissez le formulaire </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="description">description</label>
                                    <input type="text" class="form-control" id="description" placeholder="description de l'activité par defaut"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Creer</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>