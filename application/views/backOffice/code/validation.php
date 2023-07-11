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
                        <h4 class="card-title">Validation des codes</h4>
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> date </th>
                                    <th> utilisateur </th>
                                    <th> code </th>
                                    <th> valeur </th>
                                    <th> état </th>
                                    <th> valider </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($entrees as $e){ ?>
                                <tr>
                                    <td>
                                        <?php echo $e->date; ?>
                                    </td>
                                    <td>
                                        <?php echo $e->nom; ?>
                                    </td>
                                    <td style="text-align:center;">
                                        <?php echo $e->descriCode; ?>
                                    </td>
                                    <td style="text-align:right">
                                        <?php echo number_format($e->valeur, 2, ",", " "); ?> Ar
                                    </td>
                                    <td style="text-align:center;"><label class="badge badge-danger"><?php echo $e->descriEtat; ?></label>
                                    </td>
                                    <td class="text-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-warning btn-icon-text">
                                                <a href="<?php echo site_url('code/validate/' . "1"); ?>"
                                                    style="color:black;"><i
                                                        class="mdi mdi-check-circle btn-icon-prepend"></i></a> </button>
                                        </div>
                                    </td>
                    </div>
                </div>
                </tr>
                <?php } ?>
                <tr>
                                    <td>
                                        16-07-2023
                                    </td>
                                    <td>
                                        yoan 2
                                    </td>
                                    <td style="text-align:center;">
                                        1354a6sd
                                    </td>
                                    <td style="text-align:right">
                                        10 000 Ar
                                    </td>
                                    <td style="text-align:center;"><label class="badge badge-success">validé</label>
                                    </td>
                                    <td class="text-center">
                                        <div>
                                            
                                        </div>
                                    </td>
                    </div>

                </div>

                </tr>
                <tr>
                                    <td>
                                        16-07-2023
                                    </td>
                                    <td>
                                        yoan 3
                                    </td>
                                    <td style="text-align:center;">
                                        1354a6sd
                                    </td>
                                    <td style="text-align:right">
                                        10 000 Ar
                                    </td>
                                    <td style="text-align:center;"><label class="badge badge-warning">déjà pris</label>
                                    </td>
                                    <td class="text-center">
                                        <div>
                                            
                                        </div>
                                    </td>
                    </div>

                </div>

                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>