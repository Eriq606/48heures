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
                                    <th> Poids </th>
                                    <th> Montant total </th>
                                    <th> Modifier </th>
                                    <th> Supprimer </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($regimes as $regime) { ?>
                                <tr>
                                    <td>
                                        <?php echo($regime->descriRegime); ?>
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
                                                <?php 
                                                    $plats = $this->PDFModel->getRegimePlat($regime->idregime);
                                                    $montant = 0;
                                                    foreach($plats as $plat) { 
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $plat->descriPlat ?>
                                                    </td>
                                                    <td style="text-align:center">
                                                        <?php echo $plat->quantite." ".$plat->descriUnite ?>
                                                    </td>
                                                    <td class="text-right" style="text-align:center">
                                                        <?php echo $plat->pu ?> Ar
                                                    </td>
                                                </tr>
                                                <?php $montant = $montant + $plat->pu ;} ?>
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
                                                <?php 
                                                    $activites = $this->PDFModel->getRegimeActivite($regime->idregime);
                                                    foreach($activites as $activite) { 
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $activite->descriActivite ?>
                                                    </td>
                                                    <td style="text-align:center">
                                                        <?php echo $activite->quantite." fois" ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $regime->duree ?> Jours
                                    </td>
                                    <td class="text-center">
                                        <?php if($regime->idobjectif == 1)  { ?>
                                        diminué de <?php echo $regime->poids ?> kg
                                        <?php } else { ?>
                                            augmenté de <?php echo $regime->poids ?> kg
                                            <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="mb-4">
                                            <?php echo number_format($montant, 2, ",", " "); ?>
                                            Ar
                                        </div>

                                    </td>
                                    <td class="text-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-info btn-icon-text">
                                                <a href="<?php echo site_url('regime/toUpdate/'.$regime->idregime); ?>"><i class="mdi mdi-table-edit btn-icon-prepend"></i></a> </button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-warning btn-icon-text">
                                            <a href="<?php echo site_url('regime/delete/'.$regime->idregime); ?>" style="color:black;"><i class="mdi mdi-delete-forever btn-icon-prepend"></i></a> </button>
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