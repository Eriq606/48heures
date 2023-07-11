<?php

$this->load->view('templates/header');
$this->load->view('templates/left');

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-6 grid-margin stretch-card h-100">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Recharger mon compte</h4>
                <form class="forms-sample" method="post" action="<?php echo site_url('code/entreeCode'); ?>">
                    <div class="form-group">
                    <input type="text" class="form-control" id="code" name="codestr" placeholder="votre code de recharge"  required>
                    <p style="color:red"><?php echo $erreur; ?></p>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Recharger mon compte</button>
                </form>
                </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card grid-margin" style="height:20vh">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="<?php echo site_url('assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Solde actuel <i class="mdi mdi-shopping mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php echo number_format($caisse, 2, ",", " "); ?> Ar</h2>
                  </div>
                </div>
              </div>
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body" style="height:80vh;overflow-y: scroll; ">
                    <h4 class="card-title">Liste des codes</h4>
                    <table class="table table-striped" >
                      <thead>
                        <tr>
                          <th> code </th>
                          <th style="text-align:right"> Montant </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($codes as $code){ ?>
                        <tr>
                          <td><?php echo $code->descriCode; ?></td>
                          <td style="text-align:right"><label class="badge badge-warning" style="color:black;"><?php echo number_format($code->valeur, 2, ",", " "); ?> Ar</label></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>