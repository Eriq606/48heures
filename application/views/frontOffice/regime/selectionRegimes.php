<?php

$this->load->view('templates/header');
$this->load->view('templates/left');

?>
<div class="main-panel">
    <div class="content-wrapper">
    <div class="page-header">
              <h3 class="page-title"> Regimes suggerés </h3>
            </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Resume</h4>
                <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4">
                    <ul>
                        <li>
                            <span class="legend-dots" style="background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))"></span>Votre poids actuel : 62 kg</li>
                        <li>
                                <span class="legend-dots" style="background:linear-gradient(to right, rgba(6, 185, 157, 1), rgba(132, 217, 210, 1))"></span>Objectif : perdre 20 kg
                            </li>
                        </ul>
                    </div>
                    <form class="forms-sample">
                    <div class="form-group">
                    <label for="marge">Marge en % du poids objectif</label>
                    <input type="number" class="form-control" id="marge" name="marge" placeholder="marge" step="0.1" required value="<?php echo $marge; ?>">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">modifier marge</button>
                </form>
                </div> 
            </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin" style="height:20vh">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="<?php echo site_url('assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Solde actuel <i class="mdi mdi-shopping mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">955 741 Ar</h2>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Liste des regimes</h4>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Regime </th>
                          <th> Menus </th>
                          <th> Activités sportives </th>
                          <th> Durée </th>
                          <th> Montant total </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr></tr>
                        <tr>
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
                          <td>Riz</td>
                          <td style="text-align:center">1 kpk</td>
                          <td class="text-right" style="text-align:center">1 500 Ar</td>
                        </tr>
                        <tr>
                          <td>Riz</td>
                          <td style="text-align:center">1 kpk</td>
                          <td class="text-right" style="text-align:center">1 500 Ar</td>
                        </tr>
                        <tr>
                          <td>Riz</td>
                          <td style="text-align:center">1 kpk</td>
                          <td class="text-right" style="text-align:center">1 500 Ar</td>
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
                          <td>Pompe</td>
                          <td style="text-align:center">10</td>
                        </tr>
                        <tr>
                          <td>Pompe</td>
                          <td style="text-align:center">10</td>
                        </tr>
                      </tbody>
                    </table>
                            </td>
                            <td class="text-center">40 Jours</td>
                            <td class="text-center">
                            <div class="mb-4">
                            18 000 Ar
                            </div>
                            <div>
                            <button type="button" class="btn btn-outline-success btn-icon-text">
                            <i class="mdi mdi-shopping  btn-icon-prepend"></i> Commander </button>
                            </td>
                            </div>
                            
                        </tr>
                        <tr>
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
                          <td>Riz</td>
                          <td style="text-align:center">1 kpk</td>
                          <td class="text-right" style="text-align:center">1 500 Ar</td>
                        </tr>
                        <tr>
                          <td>Riz</td>
                          <td style="text-align:center">1 kpk</td>
                          <td class="text-right" style="text-align:center">1 500 Ar</td>
                        </tr>
                        <tr>
                          <td>Riz</td>
                          <td style="text-align:center">1 kpk</td>
                          <td class="text-right" style="text-align:center">1 500 Ar</td>
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
                          <td>Pompe</td>
                          <td style="text-align:center">10</td>
                        </tr>
                        <tr>
                          <td>Pompe</td>
                          <td style="text-align:center">10</td>
                        </tr>
                      </tbody>
                    </table>
                            </td>
                            <td class="text-center">40 Jours</td>
                            <td class="text-center">
                            <div class="mb-4">
                            18 000 Ar
                            </div>
                            <div>
                            <button type="button" class="btn btn-outline-success btn-icon-text">
                            <i class="mdi mdi-shopping  btn-icon-prepend"></i> Commander </button>
                            </td>
                            </div>
                            
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>