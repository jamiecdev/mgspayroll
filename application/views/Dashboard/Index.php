<div class="main-panel">
  <div class="content-wrapper">
    <span><?php 
      if($this->session->flashdata('dashboard')=="success")
          echo '<script type="text/javascript"> showWelcomeToast("'.$this->session->userdata('userdata')['fullname'].'")</script>';
        ?>
      </span> 
        <div class="card">
          <div class="card-body">

            <div class="row">
              <div class="col ml-2 mr-2 mb-2 mt-2" class="text-center" style="background-color: #ffbe61">
                <a href="http://www.blackcoders.net/enterprise-resource-planning.php" target="_blank"><img src="<?=base_url(); ?>assets/images/as.svg" style="height: auto; width: auto;"></a>
                <h3  style="font-family: 'Roboto'; font-weight:Bold; color: #FFF; letter-spacing: 3px; text-align: center;">ACCOUNTING<br>SYSTEM</h3>
              </div>
              <div class="col ml-2 mr-2 mb-2 mt-2" class="text-center" style="background-color: #f29d56">
                <a href="http://www.blackcoders.net/enterprise-resource-planning.php" target="_blank"><img src="<?=base_url(); ?>assets/images/warehouse.svg"  style="height: auto; width: auto;"></a>
                <h3 style="font-family: 'Roboto'; font-weight:Bold; color: #FFF; letter-spacing: 3px; text-align: center;">INVENTORY AND<br>WAREHOUSE MANAGEMENT<br> 
              </div>
              <div class="col ml-2 mr-2 mb-2 mt-2" class="text-center" style="background-color: #ffbe61">
                <a href="http://www.blackcoders.net/enterprise-resource-planning.php" target="_blank"><img src="<?=base_url(); ?>assets/images/pos.svg"  style="height: auto; width: auto;"></a>
                <h3 style="font-family: 'Roboto'; font-weight:Bold; color: #FFF; letter-spacing: 3px; text-align: center;">POS SYSTEM</h3>
              </div>
              <div class="col ml-2 mr-2 mb-2 mt-2" class="text-center" style="background-color: #f29d56">
                <a href="http://www.blackcoders.net/enterprise-resource-planning.php" target="_blank"><img src="<?=base_url(); ?>assets/images/scm.svg"  style="height: auto; width: auto;"></a>
                <h3 style="font-family: 'Roboto'; font-weight:Bold; color: #FFF; letter-spacing: 3px; text-align: center;">SUPPLY CHAIN<br>MANAGEMENT SYSTEM</h3>
              </div>
            </div>

            <div class="row">
              <div class="col ml-2 mr-2  mb-2 mt-2" class="text-center" style="background-color: #f29d56">
                <a href="http://www.blackcoders.net/enterprise-resource-planning.php" target="_blank"><img src="<?=base_url(); ?>assets/images/finance.svg" style="height: auto; width: auto;"></a>
                <h3 style="font-family: 'Roboto'; font-weight:Bold; color: #FFF; letter-spacing: 3px; text-align: center;">FINANCE<br>MANAGEMENT SYSTEM</h3>
              </div>
              <div class="col ml-2 mr-2 mb-2 mt-2" class="text-center" style="background-color: #ffbe61">
                <a href="http://www.blackcoders.net/enterprise-resource-planning.php" target="_blank"><img src="<?=base_url(); ?>assets/images/crm.svg"  style="height: auto; width: auto;"></a>
                <h3 style="font-family: 'Roboto'; font-weight:Bold; color: #FFF; letter-spacing: 3px; text-align: center;">CUSTOMER RELATIONS<br>MANAGEMENT SYSTEM</h3>
              </div>
              <div class="col ml-2 mr-2 mb-2 mt-2" class="text-center" style="background-color: #f29d56">
                <a href="http://www.blackcoders.net/enterprise-resource-planning.php" target="_blank"><img src="<?=base_url(); ?>assets/images/purchase.svg"  style="height: auto; width: auto;"></a>
                <h3 style="font-family: 'Roboto'; font-weight:Bold; color: #FFF; letter-spacing: 3px; text-align: center;">PURCHASES MANAGEMENT<br> SYSTEM</h3>
              </div>
              <div class="col ml-2 mr-2 mb-2 mt-2" class="text-center" style="background-color: #ffbe61">
                <a href="http://www.blackcoders.net/enterprise-resource-planning.php" target="_blank"><img src="<?=base_url(); ?>assets/images/logistics.svg"  style="height: auto; width: auto;"></a>
                <h3 style="font-family: 'Roboto'; font-weight:Bold; color: #FFF; letter-spacing: 3px; text-align: center;">LOGISTICS</h3>
              </div>
            </div>

                    



                    <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/10.png" alt="image"/>
                        <figcaption>
                          <p>INBOUND/OUTBOUND SERVICES</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/1.jpg" alt="image"/>
                        <figcaption>
                          <p>ACCOUNT RECEIVABLES</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/2.jpg" alt="image"/>
                        <figcaption>
                          <p>COLLECTIONS</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/7.png" alt="image"/>
                        <figcaption>
                          <p>MULTI-LINGUAL CUSTOMER CARE</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/6.jpg" alt="image"/>
                        <figcaption>
                          <p>MEDICAL CODING</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/8.jpg" alt="image"/>
                        <figcaption>
                          <p>PAYMENTS</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/4.jpg" alt="image"/>
                        <figcaption>
                          <p>DATA SCRUBBING</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/5.jpg" alt="image"/>
                        <figcaption>
                          <p>RECORD RETRIEVAL AND DIGITIZATION</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/9.jpg" alt="image"/>
                        <figcaption>
                          <p>BENEFIT ENROLMENT AND VALIDATION</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/3.jpg" alt="image"/>
                        <figcaption>
                          <p>CONTACT CENTRE SALES SOLUTIONS</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/11.jpg" alt="image"/>
                        <figcaption>
                          <p>TECH SUPPORT</p>
                        </figcaption>
                      </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                      <figure class="effect-text-in">
                        <img src="<?=base_url(); ?>assets/images/auth/12.jpg" alt="image"/>
                        <figcaption>
                          <p>CUSTOMER SERVICE</p>
                        </figcaption>
                      </figure>
                    </div> -->
          </div>
        </div>
        <footer class="footer">
          <!-- Copyright -->
          <div class="text-center">© 2019 All Rights Reserved.
            <a href="http://www.blackcoders.net" target="_blank"><img class="ml-3" src="<?=base_url(); ?>assets/images/auth/logo.png" style="height: 30px; width: 90px"></a>
          </div>
          <!-- Copyright -->
        </footer>
  </div>
</div>