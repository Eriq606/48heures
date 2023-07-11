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
                        <h4 class="card-title">Liste des plats</h4>
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> description </th>
                                    <th> prix unitaire </th>
                                    <th> unité </th>
                                    <th> Modifier </th>
                                    <th> Supprimer </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i = 0; $i < 3; $i++) { ?>
                                <tr>
                                    <td>
                                        plat tsara
                                    </td>
                                    <td style="text-align:right">
                                        1 000 Ar
                                    </td>
                                    <td>
                                        kg
                                    </td>
                                    <td class="text-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-info btn-icon-text">
                                                <a href="<?php echo site_url('plat/update/'."1"); ?>"><i class="mdi mdi-table-edit btn-icon-prepend"></i></a> </button>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-warning btn-icon-text">
                                            <a href="<?php echo site_url('plat/delete/'."1"); ?>" style="color:black;"><i class="mdi mdi-delete-forever btn-icon-prepend"></i></a> </button>
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