<?php

$this->load->view('templates/headerAdmin');
$this->load->view('templates/leftAdmin');

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: scroll;">
                        <h4 class="card-title">Liste des regimes</h4>
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Regime </th>
                                    <th> Menus </th>
                                    <th> Activités sportives </th>
                                    <th> Durée </th>
                                    <th> Poids (diminué ou augmenté ) </th>
                                    <th> Montant total </th>
                                    <th> Modifier </th>
                                    <th> Supprimer </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i = 0; $i < 3; $i++) { ?>
                                <tr>
                                    <td>
                                        Regime tsara
                                    </td>
                                    <td>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Quantite</th>
                                                    <th>Prix</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?php echo "plat 1" ?>
                                                    </td>
                                                    <td style="text-align:center">
                                                        <?php echo "1 kg" ?>
                                                    </td>
                                                    <td class="text-right" style="text-align:center">
                                                        <?php echo "1000" ?> Ar
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Frequence</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?php echo "activite 1" ?>
                                                    </td>
                                                    <td style="text-align:center">
                                                        <?php echo "10" ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="text-center">
                                        <?php echo "10" ?> Jours
                                    </td>
                                    <td class="text-center">
                                        <?php echo "15" ?> kg
                                    </td>
                                    <td class="text-center">
                                        <div class="mb-4">
                                            <?php echo number_format("10000", 2, ",", " "); ?>
                                            Ar
                                        </div>

                                    </td>
                                    <td class="text-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-info btn-icon-text">
                                                <a href="<?php echo site_url('regime/update/'."1"); ?>"><i class="mdi mdi-table-edit btn-icon-prepend"></i></a> </button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-warning btn-icon-text">
                                            <a href="<?php echo site_url('regime/delete/'."1"); ?>" style="color:black;"><i class="mdi mdi-delete-forever btn-icon-prepend"></i></a> </button>
                                        </div>
                                    </td>
                    </div>

                </div>

                </tr>
                <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>