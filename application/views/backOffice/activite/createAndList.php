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
                                    <input type="text" class="form-control" id="description" placeholder="description de l'activité"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Creer</button>
                        </form>
                    </div>
                    <div class="card-body" style="overflow-y: scroll;">
                        <h4 class="card-title">Liste des activités sportives</h4>
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> description </th>
                                    <th> Modifier </th>
                                    <th> Supprimer </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i = 0; $i < 3; $i++) { ?>
                                <tr>
                                    <td>
                                        activité tsara
                                    </td>
                                    <td class="text-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-info btn-icon-text">
                                                <a href="<?php echo site_url('activite/update/'."1"); ?>"><i class="mdi mdi-table-edit btn-icon-prepend"></i></a> </button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-warning btn-icon-text">
                                            <a href="<?php echo site_url('activite/delete/'."1"); ?>" style="color:black;"><i class="mdi mdi-delete-forever btn-icon-prepend"></i></a> </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>